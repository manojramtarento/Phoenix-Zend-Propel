<?php

class Operations extends BaseOperations
{

    /**
     * Status
     */
    const STATUS_EN_COURS = 1;
    const STATUS_ACCEPTE = 2;
    const STATUS_REFUS = 3;
    const STATUS_CLOTURE = 4;
    const STATUS_EN_VALIDATION = 5;
    const STATUS_SOLDE = 6;
    const FILE_ENTITY_NAME = 'operations';

    /**
     * Operations stat types
     */
    const OPERATION_STAT_TYPE_ODR = 1;
    const OPERATION_STAT_TYPE_PRIME = 2;
    const OPERATION_STAT_TYPE_JEUX_WEB = 3;
    const OPERATION_STAT_TYPE_JEUX_SMS = 4;

    /**
     * @var int
     */
    protected $oldOpStatusId = null;

    /**
     * @var int
     */
    protected $hsRefusId = null;

    /**
     * Process when customer is switched by an other
     */
    protected function triggerClientChange()
    {

        // Updating of the sale prices of services on the basis of the client's negotiated service standards
        if ($this->getOpUsePrestaNegoce()) {
            $this->updatePrestationsFromNegoce();
        }

        // Removal of outstanding contracts on the transaction
        $aFilesContrat = $this->getFilesContrat();
        foreach ($aFilesContrat as $oFileContrat) {
            $oFileContrat->delete();
        }

        // Reset contacts
        $this->setOpCtId(null);
        $this->setOpCtFactId(null);

        // Reset project manager
        $this->setOpCpId(null);
        $this->save();
    }

    /**
     * Specific processing for propel-SQLServer that does not accept the characters "
     */
    protected function triggerFormatSpecialCharacters($sChangedField)
    {
        switch ($sChangedField) {
            case 'operations.op_description':
                $this->setOpDescription(Phoenix_Data_Convert::formatSmartRightDoubleQuotes($this->getOpDescription()));
                break;
            case 'operations.op_libelle':
                $this->setOpLibelle(Phoenix_Data_Convert::formatSmartRightDoubleQuotes($this->getOpLibelle()));
                break;
            case 'operations.op_commentaire':
                $this->setOpCommentaire(Phoenix_Data_Convert::formatSmartRightDoubleQuotes($this->getOpCommentaire()));
                break;
            case 'operations.op_brief_log':
                $this->setOpBriefLog(Phoenix_Data_Convert::formatSmartRightDoubleQuotes($this->getOpBriefLog()));
                break;
        }
    }

    /**
     * Triggered after a change of status
     */
    protected function triggerAfterChangeStatus()
    {
        $oOperationStatuts = new OperationStatuts();
        $oOperationStatuts->setOpId($this->getOpId());
        $oOperationStatuts->setHsOldStatutId($this->oldOpStatusId);
        $oOperationStatuts->setHsNewStatutId($this->getOpStatusId());
        $oOperationStatuts->setHsRefusId($this->hsRefusId);
        $oOperationStatuts->save();

        if ($this->getOpStatusId() === self::STATUS_CLOTURE) {
            $this->closeTasksCp();
        }
        
        if ($this->getOpStatusId() === self::STATUS_ACCEPTE) {
            // Handle
            OperationPrestationsQuery::create()->updateAutomaticOpPrestCoutsValides($this);

            // Saving a version a the quote, and mark it as validated version
            Phoenix_File_Operation_PdfGenerator::getInstance()->generatePdfQuotationAndSave($this);
        }
    }

    /**
     * Triggered after update of option Use of the negotiated pricing grid
     */
    protected function triggerAfterChangeUsePrestaNego()
    {
        if ($this->getOpUsePrestaNegoce()) {
            $this->updatePrestationsFromNegoce();
        } else {
            $this->updatePrestationsFromReferentiel();
        }
    }

    /**
     * Executed automatically on validation : validation of the concordance of dates
     */
    protected function validateIsDateCorrect()
    {
        $bEndPosteDateIsAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_POSTE_DATE);
        $bConsumeringDatesAreAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CONSUMERING_DATES);
        $bEndDateIsAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_DATE);

        if ($bConsumeringDatesAreAllowed && ! $this->getOpDateconsoStart()) {
            $this->addValidationFailed('La date de début de consommation doit être renseignée', 'operations.op_dateConso_start');
        }

        if ($bConsumeringDatesAreAllowed && ! $this->getOpDateconsoEnd()) {
            $this->addValidationFailed('La date de fin de consommation doit être renseignée', 'operations.op_dateConso_end');
        }

        if (! $this->getOpStampStart()) {
            $this->addValidationFailed('La date de début de gestion doit être renseignée', 'operations.op_stamp_start');
        }

        if ($bEndDateIsAllowed && ! $this->getOpStampEnd()) {
            $this->addValidationFailed('La date de fin de gestion doit être renseignée', 'operations.op_stamp_end');
        }

        if ($bEndPosteDateIsAllowed && ! $this->getOpDateposteEnd()) {
            $this->addValidationFailed('La date postale doit être renseignée', 'operations.op_datePoste_end');
        }
        $this->validateMofifiedDates();
    }

    /**
     * Executed automatically on validation : validation of the modified dates
     */
    protected function validateMofifiedDates()
    {
        $bEndPosteDateIsAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_POSTE_DATE);
        $bConsumeringDatesAreAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CONSUMERING_DATES);
        $bEndDateIsAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_DATE);

        $aModifiedColumns = $this->modifiedColumns;
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'operations.op_dateConso_start':
                    if ($bConsumeringDatesAreAllowed && $this->getOpDateconsoStart() > $this->getOpDateconsoEnd()) {
                        $this->addValidationFailed('La date de début de consommation doit être inférieure à la date de fin consommation', $sModifiedColumn);
                    }
                    if ($bConsumeringDatesAreAllowed && $this->getOpDateconsoStart() < $this->getOpStampStart()) {
                        $this->addValidationFailed('La date de début de consommation doit être supérieure à la date de début de gestion', $sModifiedColumn);
                    }
                    break;
                case 'operations.op_dateConso_end':
                    if ($bConsumeringDatesAreAllowed && $this->getOpDateconsoStart() > $this->getOpDateconsoEnd()) {
                        $this->addValidationFailed('La date de fin de consommation doit être supérieure à la date de début de consommation', $sModifiedColumn);
                    }
                    if ($bEndPosteDateIsAllowed && $bConsumeringDatesAreAllowed && $this->getOpDateposteEnd() < $this->getOpDateconsoEnd()) {
                        $this->addValidationFailed('La date de fin de consommation doit être inférieure à la date postale', $sModifiedColumn);
                    }
                    break;
                case 'operations.op_stamp_start':
                    if ($bConsumeringDatesAreAllowed && $bEndDateIsAllowed && $this->getOpDateconsoStart() < $this->getOpStampStart()) {
                        $this->addValidationFailed('La date de début de gestion doit être inférieure à la date de début de consommation', $sModifiedColumn);
                    }
                    if ($bEndDateIsAllowed && $this->getOpStampStart() > $this->getOpStampEnd()) {
                        $this->addValidationFailed('La date de début de gestion doit être inférieure à la date de fin', $sModifiedColumn);
                    }
                    break;
                case 'operations.op_stamp_end':
                    if ($bEndDateIsAllowed && $bEndPosteDateIsAllowed && $this->getOpStampEnd() < $this->getOpDateposteEnd()) {
                        $this->addValidationFailed('La date de fin de gestion doit être supérieure à la date postale', $sModifiedColumn);
                    }
                    if ($bEndDateIsAllowed && $this->getOpStampStart() > $this->getOpStampEnd()) {
                        $this->addValidationFailed('La date de fin de gestion doit être supérieure à la date de début de gestion', $sModifiedColumn);
                    }
                    break;
                case 'operations.op_datePoste_end':
                    if ($bEndPosteDateIsAllowed && $this->getOpStampEnd() < $this->getOpDateposteEnd()) {
                        $this->addValidationFailed('La date postale "' . $this->getOpDateposteEnd() . '" doit être inférieure à la date de fin de gestion "' . $this->getOpStampEnd() . '"', $sModifiedColumn);
                    }
                    if ($bEndPosteDateIsAllowed && $bConsumeringDatesAreAllowed && $this->getOpDateposteEnd() < $this->getOpDateconsoEnd()) {
                        $this->addValidationFailed('La date postale "' . $this->getOpDateposteEnd() . '" doit être supérieure à la date de fin de consommation "' . $this->getOpDateconsoEnd() . '"', $sModifiedColumn);
                    }
                    break;
                // Adding a check on the archiving finish date value
                case 'operations.op_date_archivage_end':
                    if ($bEndDateIsAllowed && $this->getOpDateArchivageEnd() < $this->getOpStampEnd()) {
                        $this->addValidationFailed('La date de fin d\'archivage doit être supérieure à la date de fin de gestion', $sModifiedColumn);
                    }
                    break;
            }
        }
    }

    /**
     * Check if a set of operation dates are in the correct format
     *
     * @param array $aOperationDates
     * @return boolean
     */
    public function validateOperationDatesFormat(array $aOperationDates)
    {
        foreach ($aOperationDates as $sDateId => $sDateValue) {
            switch ($sDateId) {
                case 'op_stamp_start':
                    if ($sDateValue && false === Phoenix_Data_Convert::checkGeorgianDate($sDateValue)) {
                        $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('La date "%s" que vous avez renseignée est soit invalide ou dans un format incorrect. Les dates doivent être au format JJ/MM/AAAA'), $this->getZendTranslate()->translate('Début gestion')), 'operations.OP_STAMP_START');
                    }
                    break;

                case 'op_dateConso_start':
                    if ($sDateValue && false === Phoenix_Data_Convert::checkGeorgianDate($sDateValue)) {
                        $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('La date "%s" que vous avez renseignée est soit invalide ou dans un format incorrect. Les dates doivent être au format JJ/MM/AAAA'), $this->getZendTranslate()->translate('Début conso')), 'operations.OP_DATECONSO_START');
                    }
                    break;

                case 'op_dateConso_end':
                    if ($sDateValue && false === Phoenix_Data_Convert::checkGeorgianDate($sDateValue)) {
                        $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('La date "%s" que vous avez renseignée est soit invalide ou dans un format incorrect. Les dates doivent être au format JJ/MM/AAAA'), $this->getZendTranslate()->translate('Fin conso')), 'operations.OP_DATECONSO_END');
                    }
                    break;

                case 'op_stamp_end':
                    if ($sDateValue && false === Phoenix_Data_Convert::checkGeorgianDate($sDateValue)) {
                        $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('La date "%s" que vous avez renseignée est soit invalide ou dans un format incorrect. Les dates doivent être au format JJ/MM/AAAA'), $this->getZendTranslate()->translate('Fin gestion')), 'operations.OP_STAMP_END');
                    }
                    break;

                case 'op_datePoste_end':
                    if ($sDateValue && false === Phoenix_Data_Convert::checkGeorgianDate($sDateValue)) {
                        $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('La date "%s" que vous avez renseignée est soit invalide ou dans un format incorrect. Les dates doivent être au format JJ/MM/AAAA'), $this->getZendTranslate()->translate('Fin poste')), 'operations.OP_DATEPOSTE_END');
                    }
                    break;
                case 'op_date_archivage_end':
                    if ($sDateValue && false === Phoenix_Data_Convert::checkGeorgianDate($sDateValue)) {
                        $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('La date "%s" que vous avez renseignée est soit invalide ou dans un format incorrect. Les dates doivent être au format JJ/MM/AAAA'), $this->getZendTranslate()->translate('Fin d\'archivage')), 'operations.OP_DATE_ARCHIVAGE_END');
                    }
                    break;
            }
        }

        return ! $this->getValidationFailures();
    }

    protected function _validateIsModifiable()
    {

        $oTranslator = $this->getZendTranslate();
        $aValidationRules = array(
            array(
                'statuses' => array(self::STATUS_EN_COURS),
                'columns' => array(
                    'operations.op_number' => 'Le numéro d\'opération n\'est pas modifiable hors statut en cours',
                    'operations.op_cl_id' => 'Le client ne peut pas être changé hors statut en cours',
                    'operations.op_act_id' => 'Le type de métier ne peut pas être changé hors statut en cours',
                    'operations.op_type_id' => 'Le type d\'activité ne peut pas être changé hors statut en cours',
                    'operations.op_subtype_id' => 'Le type ne peut pas être changé hors statut en cours',
                    'operations.op_use_presta_negoce' => 'L\'utilisation de la grille de tarification négociée ne peut pas être changée hors statut en cours',
                    'operations.op_taux_conversion' => 'Le taux de conversion ne peut pas être changé hors statut en cours',
                    'operations.op_cgv_id' => 'Les CGV ne peuvent être changés hors statut en cours',
                    'operations.operation_universe_id' => $oTranslator->translate('unallowed_operation_universe_change'),
                    'operations.operation_media_id' => $oTranslator->translate('unallowed_operation_participation_media_change'),
                ),
            ),
            array(
                'statuses' => array(self::STATUS_EN_COURS, self::STATUS_ACCEPTE, self::STATUS_SOLDE),
                'columns' => array(
                    'operations.op_ct_id' => 'Le contact client ne peut pas être changé',
                    'operations.op_ct_fact_id' => 'Le contact pour facturation ne peut pas être changé hors statut en cours, accepté et soldé',
                    'operations.op_libelle' => 'Le libéllé ne peut pas être changé hors statut en cours, accepté ou soldé',
                    'operations.op_dc_id' => 'Le directeur commercial ne peut pas être changé hors statut en cours, accepté ou soldé',
                    'operations.op_description' => 'La description ne peut pas être changée hors statut en cours, accepté ou soldé',
                    'operations.op_commentaire' => 'Le commentaire ne peut pas être changé hors statut en cours, accepté ou soldé',
                    'operations.op_delai_trait_courrier_id' => 'Le délai de traitement de courrier ne peut pas être changé hors statut en cours, accepté ou soldé',
                    'operations.op_delai_devis_id' => 'Le délai de validité du devis ne peut pas être changé hors statut en cours, accepté ou soldé',
                    'operations.op_freq_stat_mail_id' => 'La fréquence d\'envoi des statistiques ne peut être changée hors statut en cours, accepté ou soldé',
                    'operations.op_devis_lang' => 'La langue du devis ne peut être changée hors statut en cours, accepté ou soldé',
                    'operations.op_brief_log' => 'Le commentaire logistique ne peut être changée hors statut en cours, accepté ou soldé',
                    'operations.op_cp_id' => 'Le gestionnaire ne peut pas être changé hors statut en cours, accepté ou soldé',
                    'operations.op_project_type_id' => 'Le type de projet ne peut pas être changé hors statut en cours, accepté ou soldé',
                ),
            ),
            array(
                'statuses' => array(self::STATUS_EN_COURS, self::STATUS_ACCEPTE),
                'columns' => array(
                    'operations.op_stamp_start' => 'La date de début de gestion ne peut pas être changée',
                    'operations.op_stamp_end' => 'La date de fin de gestion ne peut pas être changée hors statut en cours ou accepté',
                    'operations.op_dateConso_start' => 'La date de début de consommation ne peut pas être changée hors statut en cours ou accepté',
                    'operations.op_dateConso_end' => 'La date de fin de consommation ne peut pas être changée hors statut en cours ou accepté',
                    'operations.op_datePoste_end' => 'La date de fin postale ne peut pas être changée hors statut en cours ou accepté',
                    'operations.op_date_archivage_end' => 'La date de fin d\'archivage ne peut pas être changée hors statut en cours ou accepté',
                ),
            ),
        );

        $aModifiedColumns = $this->modifiedColumns;
        $iStatusId = $this->getOpStatusId();
        foreach ($aValidationRules as $aValidationRule) {
            if (! in_array($iStatusId, $aValidationRule['statuses'], true)) {
                foreach ($aValidationRule['columns'] as $sColumn => $sError) {
                    if (isset($aModifiedColumns[$sColumn])) {
                        $this->addValidationFailed($sError, $sColumn);
                    }
                }
            }
        }

        // Making the following process also availble for "paid off" status
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'operations.op_cp_id':
                    if (in_array($iStatusId, array(self::STATUS_ACCEPTE, self::STATUS_SOLDE, self::STATUS_CLOTURE))
                        && ! $this->getOpCpId()
                        && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::MANAGER_MANDATORY)) {
                        $this->addValidationFailed('Un gestionnaire doit être choisi', $sModifiedColumn);
                    }
                    break;

                case 'operations.op_project_type_id':
                    if (in_array($iStatusId, array(self::STATUS_ACCEPTE, self::STATUS_SOLDE, self::STATUS_CLOTURE))
                        && ! $this->getOpProjectTypeId()
                        && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::PROJECT_TYPE_MANDATORY)) {
                        $this->addValidationFailed('Un type de projet doit être choisi', $sModifiedColumn);
                    }
                    break;
            }
        }

        // Checking of the operation dates are correctly filed
        $this->validateIsDateCorrect();
    }

    /**
     * Validates that users has filled the operation terminology on operation creation
     */
    protected function _validateIsOperationTerminologyFilled()
    {

        if ($this->isNew()) {
            if (! $this->getOpActId()) {
                $this->addValidationFailed($this->getZendTranslate()->translate('error_operation_business_is_mandatory_on_operation_creation'), 'operations.OP_ACT_ID');
            }
            if (! $this->getOpTypeId()) {
                $this->addValidationFailed($this->getZendTranslate()->translate('error_operation_category_is_mandatory_on_operation_creation'), 'operations.OP_TYPE_ID');
            }
            if (! $this->getOpSubtypeId()) {
                $this->addValidationFailed($this->getZendTranslate()->translate('error_operation_mecanic_is_mandatory_on_operation_creation'), 'operations.OP_SUBTYPE_ID');
            }
            if (! $this->getOperationUniverseId()) {
                $this->addValidationFailed($this->getZendTranslate()->translate('error_operation_universe_is_mandatory_on_operation_creation'), 'operations.OPERATION_UNIVERSE_ID');
            }
            if (! $this->getOperationMediaId()) {
                $this->addValidationFailed($this->getZendTranslate()->translate('error_operation_participation_media_is_mandatory_on_operation_creation'), 'operations.OPERATION_MEDIA_ID');
            }
        }
    }

    /**
     * Verifying the intelligence of options
     */
    protected function _checkOptionsCorrectlySelected()
    {
        // Verifies that a warehouse is selected if the quotation is logistic type
        if ($this->getOpActId() == RCustomActivites::TYPE_LOG || $this->hasPrimesReal()) {
            $sSql = "select count(lnk_op_opt_id)
			from lnk_operation_option join r_operation_options on lnk_operation_option.op_opt_id=r_operation_options.r_op_option_id
			where lnk_operation_option.op_id='" . $this->getOpId() . "'
				and r_operation_options.r_op_option_parent='" . ROperationOptions::CAT_ENTREPOT . "'
				and lnk_operation_option.is_linked=1
			";

            if ($this->getConnection()->query($sSql)->fetchColumn() == 0) {
                $this->addValidationFailed('Un entrepôt doit être sélectionné', 'erreur_options');
            }

            if (! $this->hasOption(ROperationOptions::getOptWms())) {
                $this->addValidationFailed('Un WMS doit être sélectionné', 'erreur_options2');
            }
        }

        return true;
    }

    /**
     * Automatic generation of operation number
     */
    protected function generateNumOp()
    {

        // Retrieve operation number format
        $sOperationNumberFormat = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_OPERATION_NUMBER_FORMAT);
        $oLexer = new  \ReverseRegex\Lexer($sOperationNumberFormat);
        $oGenerator  = new \ReverseRegex\Random\SimpleRandom(10007);
        $oParser = new \ReverseRegex\Parser($oLexer, new \ReverseRegex\Generator\Scope(), new \ReverseRegex\Generator\Scope());

        $iAttempts = 0;
        while (true) {
            $sOperationNumber = OperationsPeer::getConnection()->query('SELECT MAX(op_number) FROM operations')->fetchColumn();
            
            // No operation exists in database
            if ($sOperationNumber === null) {
                $oParser->parse()->getResult()->generate($sOperationNumber, $oGenerator);
                break;
            }

            $iAttempts++;
            $sOperationNumber++;

            if (! preg_match('/^' . $sOperationNumberFormat . '$/', $sOperationNumber)) {
                $oParser->parse()->getResult()->generate($sOperationNumber, $oGenerator);
            }

            if (! OperationsPeer::getConnection()->query('SELECT op_number FROM operations WHERE op_number = "' . $sOperationNumber . '"')->fetchColumn()) {
                break;
            }

            if ($iAttempts >= 4) {
                throw new \LogicException('Unable to define a new unique operation number after ' . $iAttempts . ' attempts');
            }
        }
        $this->setOpNumber($sOperationNumber);
    }

    /**
     * Check constraint status change
     *
     * @param int $iNewOperationStatus
     */
    protected function _checkChangeStatut(int $iNewOperationStatus)
    {
 
        if (! $this->isNew()) {
            $this->checkOperationTypeRequiredOperationOptions($this->getOptionsId(), $iNewOperationStatus);
        }
        
        switch ($iNewOperationStatus) {
            case self::STATUS_EN_COURS:
                $this->checkChangeStatusOnGoing();
                break;

            case self::STATUS_ACCEPTE:
                $this->checkChangeStatusAccepted();
                break;

            case self::STATUS_CLOTURE:
                // Switching to accepted completed is possible when coming from "balanced" status
                if ($this->getOpStatusId() !== self::STATUS_SOLDE) {
                    $this->addValidationFailed($this->getZendTranslate()->translate('message_bad_operation_status_to_complete_operation'));
                    break;
                }
                // Only the "Administrative and Financial Director" and Accounting groups are allowed to make such switch
                if (! Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CHANGE_OPERATION_STATUS_TO_CLOSED)) {
                    $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('unallowed_user_to_switch_operation_status'), $this->getZendTranslate()->translate('label_completed_status')));
                    break;
                }

                if (false === $this->checkIfOperationHasNonEditedInvoices()) {
                    $this->addValidationFailed($this->getZendTranslate()->translate('Certaines factures ne sont pas éditées'));
                    break;
                }

                break;

            case self::STATUS_REFUS:
                if ($this->getOpStatusId() != self::STATUS_EN_COURS) {
                    $this->addValidationFailed('Le statut refusé ne peut être séléctionné');
                    break;
                }
                if (empty($this->hsRefusId)) {
                    $this->addValidationFailed('Un motif de refus doit être selectionné', 'operations.HS_REFUS_ID');
                }
                break;

            case self::STATUS_EN_VALIDATION:
                $this->addValidationFailed('Le statut en validation n\'est pas disponible');
                break;
            // Adding Rules for the the "balanced" status
            case self::STATUS_SOLDE:
                $this->checkChangeStatusPaidOff();
                break;
        }
    }


    /**
     * Check constraint status change to self::EN_COURS
     * @return Operations
     */
    protected function checkChangeStatusOnGoing()
    {
        if ($this->getOpStatusId() != null && $this->getOpStatusId() != self::STATUS_EN_COURS) {
            $this->addValidationFailed('Le statut en cours ne peut être séléctionné');
        }
    }

    /**
     * Check constraint status change to self::STATUS_ACCEPTE
     * @return Operations
     */
    protected function checkChangeStatusAccepted() : Operations
    {
        $oTranslate = $this->getZendTranslate();

        // Switching to accepted status is possible when coming from a "in progress" or "balanced" status
        if (! in_array($this->getOpStatusId(), array(self::STATUS_EN_COURS, self::STATUS_SOLDE))) {
            $this->addValidationFailed($oTranslate->translate('Le statut accepté ne peut être sélectionné'));
            return $this;
        }
        // Only the "Administrative and Financial Director", accounting and project manager user, including the current operation project manager can switch to status accepted, when coming from status "solde"
        if ($this->getOpStatusId() === self::STATUS_SOLDE && ! (
            Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CHANGE_OPERATION_STATUS_TO_CLOSED)
            || (
                $this->getOpCpId()
                && in_array(
                    Phoenix_Auth_User::getInstance()->getUserId(),
                    array_keys(UsersQuery::create()->getUsersByRUserTypeId(\RUserTypes::PROJECT_MANAGER_USER_TYPE, array($this->getOpCpId())))
                )
            )
        )) {
            $this->addValidationFailed(sprintf($oTranslate->translate('unallowed_user_to_switch_operation_status'), $oTranslate->translate('label_accepted_status')));
            return $this;
        }

        if (! Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::PROCESSING_MAIL_DELAY)) {
            // Force value
            $this->setOpDelaiTraitCourrierId(RDelaiTraitCourrier::SANS_OBJET);
        } elseif (! $this->getOpDelaiTraitCourrierId() && in_array($this->getOpTypeId(), array(ROperationType::TYPE_JEUX, ROperationType::TYPE_ODR, ROperationType::TYPE_PRIME))) {
            $this->addValidationFailed($oTranslate->translate('Merci de renseigner le délai de traitement envisagé pour cette opération'), 'operations.OP_DELAI_TRAIT_COUURIER_ID');
        }

        // Check the data in customer invoicing tab
        $sErrorMsg = '';
        $oClientInvoicingOptions = $this->getClientFactureOptions();
        foreach (array(
            $this->getClientFactureOptions()->getClFactTvaintra() => 'N° de TVA intracommunautaire.',
            $oClientInvoicingOptions->getClFactCountryId() => 'Pays du client ou de l\'entité à facturer.',
            $oClientInvoicingOptions->getClFactLang() => 'Langue du document relance.',
            $oClientInvoicingOptions->getClFactEcheance() => 'Echéance de facturation.'
        ) as $sError => $bCheck) {
            if (! $bCheck) {
                $sErrorMsg .= '<br/>- ' . $oTranslate->translate($sError);
            }
        }

        if ($sErrorMsg) {
            $this->addValidationFailed($oTranslate->translate('Renseigner les renseignements suivants sur l\'onglet facturation de votre fiche client : ') . $sErrorMsg);
        }

        if (! $this->getOpTauxConversion()) {
            $this->addValidationFailed($oTranslate->translate('Renseigner le taux de conversion estimé du devis.'), 'operations.OP_TAUX_CONVERSION');
        }

        if (! $this->getOpProjectTypeId() && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::PROJECT_TYPE_MANDATORY)) {
            $this->addValidationFailed($oTranslate->translate('Renseigner le type de projet. Si besoin interroger le PMO.'), 'operations.OP_PROJECT_TYPE_ID');
        }

        if (! $this->getOperationUniverseId()) {
            $this->addValidationFailed($oTranslate->translate('error_operation_universe_is_mandatory_on_operation_creation'), 'operations.OPERATION_UNIVERSE_ID');
        }
        if (! $this->getOperationMediaId()) {
            $this->addValidationFailed($oTranslate->translate('error_operation_participation_media_is_mandatory_on_operation_creation'), 'operations.OPERATION_MEDIA_ID');
        }

        if ($this->getPlanFacturationParams() == null) {
            $this->addValidationFailed($oTranslate->translate('Renseigner la périodicité et le type de facturation dans l\'onglet Plan de facturation'), 'operations.OP_PLAN_FACTURATION_PARAMS');
        }

        if ($this->getOpDcId() <= 0 || $this->getOpCpId() <= 0) {
            if ($this->getOpDcId() <= 0) {
                $this->addValidationFailed($oTranslate->translate('Un directeur de clientèle doit être choisi'), 'operations.OP_DC_ID');
            }

            if ($this->getOpCpId() <= 0 && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::MANAGER_MANDATORY)) {
                $this->addValidationFailed($oTranslate->translate('Un gestionnaire doit être choisi'), 'operations.OP_CP_ID');
            }

            if ($this->getOpCtFactId() <= 0) {
                $this->addValidationFailed($oTranslate->translate('Un contact de facturation doit être choisi'), 'operations.OP_CT_FACT_ID');
            }
        }

        // Validation check for classification op_classification_id
        if ($this->getOpActId() === 1 && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CLASSIFICATION_MANDATORY)) {
            if (is_null($this->getOpClassificationId())) {
                $this->addValidationFailed(
                    $oTranslate->translate('Une classification d\'opération doit être choisie'),
                    'operations.OP_CLASSIFICATION_ID'
                );
            }
        }
        
        $this->_checkOptionsCorrectlySelected();
        $this->checkOperationRewards();
        return $this;
    }

    /**
     * Check constraint status change to self::STATUS_SOLDE
     * @return Operations
     */
    protected function checkChangeStatusPaidOff()
    {
        $sValidationErrors = '';
        if ($this->getOpStatusId() === self::STATUS_CLOTURE && ! Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CHANGE_OPERATION_STATUS_TO_CLOSED)) {
            $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('unallowed_user_to_switch_operation_status'), $this->getZendTranslate()->translate('label_balanced_status')));
            return $this;
        }

        if (! in_array($this->getOpStatusId(), array(self::STATUS_ACCEPTE, self::STATUS_CLOTURE))) {
            $sValidationErrors .= '- ' . $this->getZendTranslate()->translate('message_operation_must_be_accpeted_or_completed') . '<br/>';
        }

        // Retrieve Nb pending editing documents
        if (Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            $iNbPendingEditionDocuments = Phoenix_ExternalConnection_Arthur::getInstance()->getNbPendingEditingDocumentsByOperationId($this->getOpId());
            if ($iNbPendingEditionDocuments) {
                $sValidationErrors .= '- ' . $iNbPendingEditionDocuments . ' ' . $this->getZendTranslate()->translate('document(s) sont/est en attente d\'édition') . '<br/>';
            }
        }

        $oCurrentDateTime = new DateTime(date('Y-m-d'));
        $oOperationEndManegementDate = new DateTime($this->getOpStampEnd('Y-m-d'));
        if ($oCurrentDateTime < $oOperationEndManegementDate) {
            $sValidationErrors .= '- ' . $this->getZendTranslate()->translate('La date de fin de gestion n\'est pas encore dépassée') . '<br/>';
        }
        // 33369 Checking if the operation has at least some generated invoices
        $oOperationInvoices = FacturesQuery::create()->filterByOpId($this->getOpId())->find();

        if (0 === $oOperationInvoices->count()) {
            $sValidationErrors .= '- ' . $this->getZendTranslate()->translate('Aucune facture n\'a été générée pour l\'opération') . '<br/>';
        }

        if ($this->checkIfOperationHasCreatedStatusInvoices()) {
            $sValidationErrors .= '- ' . $this->getZendTranslate()->translate('Certaines factures/Avoirs n\'ont pas encore été validées');
        }

        if ($sValidationErrors) {
            $this->addValidationFailed($sValidationErrors);
        }
        return $this;
    }

    /**
     * Verifies that the actual costs were entered, i. e. that all the benefits of the operation were validated
     *
     * @return boolean
     */
    public function hasCoutsReelsValides()
    {
        // Retrieve the number of services remaining to be validated
        $iNbPrestaBloquantes = OperationPrestationsQuery::create()
            ->filterByOpId($this->getOpId())
            ->filterByOpPrestCoutsValides(false)
            ->count();

        if ($iNbPrestaBloquantes > 0) {
            return false;
        }

        return true;
    }

    /**
     * Checks whether the invoicing parameters language is consistent with the quotation
     *
     * @return boolean
     */
    public function isLanguageFactOk()
    {
        if ($this->getOpDevisLang() == RLanguages::LANG_ENG && $this->getClientFactureOptions()->getClFactLang() != RLanguages::LANG_ENG) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Returns the list of blocking services, i. e. all services of the operation that have not been validated.
     */
    public function getPrestationsBloquantes()
    {
        // Retrieve the remaining benefits to be validated
        $oList = OperationPrestationsQuery::create()->filterByOpId($this->getOpId())
            ->filterByOpPrestCoutsValides(false)
            ->find();
        return $oList;
    }

    /**
     * Verifies that estimated costs were captured
     */
    public function hasCoutsEstimValides()
    {
        // Retrieve the number of services remaining to be validated
        $sSql = "SELECT COUNT(*)
				FROM operation_prestations
				WHERE (op_id = " . $this->getOpId() . ")
					AND (op_prest_ciestim IS NULL AND op_prest_ceestim IS NULL)";
        return $this->getConnection()->query($sSql)->fetchColumn() <= 0;
    }

    /**
     * Verifies that the operation has services
     */
    public function hasPrestations()
    {
        // Retrieve the number of services
        $sSql = 'SELECT COUNT(*)
				FROM operation_prestations
				WHERE op_id = ' . $this->getOpId();
        return $this->getConnection()->query($sSql)->fetchColumn() > 0;
    }

    /**
     * Check operation has physic reward
     *
     * @static var integer $iRewardNb
     * @return bool
     */
    public function hasPrimesReal()
    {
        static $iRewardNb;
        if (! isset($iRewardNb)) {
            $iRewardNb = OperationPrimesQuery::create()->filterByOpId($this->getOpId())->filterByOperationPrimeRRewardTypeId(\RRewardTypes::REWARD_TYPE_PHYSIC)->count();
        }
        return $iRewardNb > 0;
    }

    /**
     * Options selected
     * @param int|array $iOption
     * @return bool
     */
    public function hasOption($iOption)
    {
        return LnkOperationOptionQuery::create()->filterByOpId($this->getOpId())->filterByIsLinked(1)->filterByOpOptId($iOption)->count() > 0;
    }

    /**
     * Returns the list of operation option identifiers
     */
    public function getOptionsId()
    {
        $aListIds = array();

        $aListOptions = $this->getLnkOperationOptions();
        foreach ($aListOptions as $oOption) {
            if ($oOption->getIsLinked()) {
                $aListIds[] = $oOption->getOpOptId();
            }
        }

        return $aListIds;
    }

    /**
     * Retrieves the list of validation services concerned by the validation of the remaining costs of the current operation
     *
     * @return array
     */
    public function getUnvalidatedServiceCosts()
    {
        $aGroups = array();
        $sSql = '
            SELECT acl_groups.group_name, op_prest_libelle, op_r_prest_id
			FROM acl_groups
            JOIN r_prestations ON acl_groups.group_id = r_prestations.r_p_groupe_validation_id
            JOIN operation_prestations ON r_prestations.r_prestation_id = operation_prestations.op_r_prest_id
			WHERE op_id = ' . $this->getOpId() . '
            AND op_prest_couts_valides = 0
        ';

        return $this->getConnection()->query($sSql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Assigns all tasks related to the project to the person in charge of the project
     */
    public function assignTasksToCurentCp()
    {
        $iOpCpId = $this->getOpCpId();
        if ($iOpCpId) {
            foreach ($this->getOperationTaskss() as $oOperationTask) {
                $oOperationTask->setOpTaskAssignToUser($iOpCpId);
                $oOperationTask->save();
            }
        }
    }

    /**
     * Closing of the tasks of the project manager
     */
    public function closeTasksCp()
    {
        $iOpCpId = $this->getOpCpId();
        if (! $iOpCpId) {
            return $this;
        }

        // Assigning a default deadline
        OperationTasksQuery::create()->filterByOpId($this->getOpId())
            ->filterByOpTaskAssignToUser($iOpCpId)
            ->filterByOpTaskDeadline(null)
            ->update(array('OpTaskDeadline' => date('Y-m-d')));

        // Closing today
        $sSql = '
            UPDATE operation_tasks
            SET op_task_done = op_task_deadline
            WHERE op_id = ' . $this->getOpId() . '
            AND op_task_assign_to_user = ' . $iOpCpId;

        $this->getConnection()->prepare($sSql)->execute();
    }

    /**
     * Returns True if a reminder of costs can be sent, i. e. if no reminder has been sent in the last 24 hours.
     */
    public function isRelanceCoutsPossible()
    {
        $oDateDerniereRelance = $this->getOpDateRelanceCouts(null);
        if ($oDateDerniereRelance instanceof DateTime) {
            $iDiffSeconds = time() - $oDateDerniereRelance->getTimestamp();
            return $iDiffSeconds > (3600 * 24);
        }
        return true;
    }

    /**
     * Sends an email to the managers of the validation groups concerned by the validation of the remaining costs of the current operation
     *
     * @param array $aRelanceReceivers
     * @return boolean
     */
    public function relanceGroupesValidationCouts(array $aRelanceReceivers)
    {
        // The users concerned are restarted
        if ((count($aRelanceReceivers) > 0) && $this->isRelanceCoutsPossible()) {
            $oQueueRelance = new QueueRelanceCouts();
            $oQueueRelance->setOpId($this->getOpId());

            try {
                // Send to the right email address
                Phoenix_MailSender::operationsRelanceCouts($this, $aRelanceReceivers);
                // Flag of email sending if no exception is raised during sending
                $oQueueRelance->setMailSent(1);
            } catch (Zend_Mail_Exception $oZendMailException) {
                // If a mail exception is removed when sending email then, we manage the exception and put mail_sent to 0
                \CSErrorHandler::getInstance()->handleException($oZendMailException);
                $oQueueRelance->setMailSent(0);
            } catch (Zend_Exception $oZendException) {
                // Incident of exception related to the sending of email, is raised when sending email
                \CSErrorHandler::getInstance()->handleException($oZendException);
                $oQueueRelance->setMailSent(0);
            }
            // We record the status of the sending of the reminder of costs
            $oQueueRelance->save();

            if ($oQueueRelance->getMailSent()) {
                // We set the date of sending of the email
                $this->setOpDateRelanceCouts(new DateTime());
                $this->save();
                return true;
            } else {
                return false;
            }
        }

        return false;
    }

    /**
     * Historizes a contract file version
     * @param string
     * @return int|bool
     */
    public function addFileContrat($sName)
    {

        $oFiles = new Files();
        $oFiles->setFileCategoryId(RFileCategories::CONTRAT);
        $oFiles->setFileEntityName(self::FILE_ENTITY_NAME);
        $oFiles->setFileEntityId($this->getOpId());
        $oFiles->setFileName($sName);

        if ($oFiles->validate()) {
            $oFiles->save();
            return $oFiles->getFileId();
        } else {
            $aErrors = $oFiles->getValidationFailures();
            foreach ($aErrors as $sFieldname => $aErrorsField) {
                if (is_array($aErrorsField)) {
                    foreach ($aErrorsField as $oError) {
                        $this->addValidationFailed($oError->getMessage());
                    }
                } else {
                    $this->addValidationFailed($aErrorsField->getMessage());
                }
            }
        }

        return false;
    }

    /**
     * Saves a version of the operation quote
     * Indicating wheither the saved quotes matches the one generated at operation acceptation
     *
     * @param string $sFileName
     * @param bool $bIsAcceptedVesrion
     * @return bool|int
     * @throws \InvalidArgumentException
     */
    public function addFileDevis($sFileName, $bIsAcceptedVesrion = false)
    {

        if (! is_string($sFileName)) {
            throw new \InvalidArgumentException('Argument "' . $sFileName . '" expects a string, "' . gettype($sFileName) . '" given.');
        }

        if (! is_bool($bIsAcceptedVesrion)) {
            throw new \InvalidArgumentException('Argument "' . $bIsAcceptedVesrion . '" expects a boolean, "' . gettype($bIsAcceptedVesrion) . '" given.');
        }

        $oFile = new Files();
        $oFile->setFileCategoryId(RFileCategories::DEVIS);
        $oFile->setFileEntityName(self::FILE_ENTITY_NAME);
        $oFile->setFileEntityId($this->getOpId());
        $oFile->setFileName($sFileName);

        // Indicating if the quote is generated at operation acceptation
        $oFile->setFileIsAcceptedVersion($bIsAcceptedVesrion);

        if ($oFile->validate()) {
            $oFile->save();
            return $oFile->getFileId();
        } else {
            $aErrors = $oFile->getValidationFailures();
            foreach ($aErrors as $sFieldname => $aErrorsField) {
                if (is_array($aErrorsField)) {
                    foreach ($aErrorsField as $oError) {
                        $this->addValidationFailed($oError->getMessage());
                    }
                } else {
                    $this->addValidationFailed($aErrorsField->getMessage());
                }
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getFilesContrat()
    {
        return FilesQuery::create()->findByCategoryAndEntity(RFileCategories::CONTRAT, self::FILE_ENTITY_NAME, $this->getOpId());
    }

    /**
     * @return array
     */
    public function getFilesDevis()
    {
        return FilesQuery::create()->findByCategoryAndEntity(RFileCategories::DEVIS, self::FILE_ENTITY_NAME, $this->getOpId());
    }

    /**
     * @return array
     */
    public function getFileDevisLastVersion()
    {
        return FilesQuery::create()->findLastVersionByCategoryAndEntity(RFileCategories::DEVIS, self::FILE_ENTITY_NAME, $this->getOpId());
    }

    /**
     * Adding a transport file to database
     *
     * @param string $sName
     * @return int|bool
     */
    public function addFilePlanTransport($sName)
    {

        $oFiles = new Files();
        $oFiles->getConnection()->useDebug();
        $oFiles->setFileCategoryId(RFileCategories::PLAN);
        $oFiles->setFileEntityName(self::FILE_ENTITY_NAME);
        $oFiles->setFileEntityId($this->getOpId());
        $oFiles->setFileName($sName);

        if ($oFiles->validate()) {
            $oFiles->save();
            return $oFiles->getFileId();
        } else {
            $aErrors = $oFiles->getValidationFailures();

            foreach ($aErrors as $sFieldname => $aErrorsField) {
                foreach ($aErrorsField as $oError) {
                    $this->addValidationFailed($oError->getMessage());
                }
            }
        }

        return false;
    }

    public function getPlanFacturationParams()
    {
        return PlanFacturationParamsQuery::create()->findOneByOpId($this->getOpId());
    }

    /**
     * Transport files associated with the operation
     * @return array
     */
    public function getFilesPlanTransport()
    {
        return FilesQuery::create()->findByCategoryAndEntity(RFileCategories::PLAN, self::FILE_ENTITY_NAME, $this->getOpId());
    }

    public function setOpNumber($sOperationNumber)
    {
        parent::setOpNumber($sOperationNumber);
        if (! $this->isNew()) {
            if ($this->getOpStatusId() != operations::STATUS_EN_COURS) {
                $this->addValidationFailed('Le numéro d\'opération ne peut être modififié si le statut de l\'opération n\'est pas en cours');
            }
            // Validate operation number
            $sOperationNumberFormat = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_OPERATION_NUMBER_FORMAT);
            if (! preg_match('/^' . $sOperationNumberFormat . '$/', $this->getOpNumber())) {
                $this->addValidationFailed('Le numéro d\'opération "' . $this->getOpNumber() . '" ne respecte le format attendu');
            }
        }
    }

    public function setOpStatusId($iOpStatusId, $iHsRefusId = null)
    {
        $this->oldOpStatusId = $this->getOpStatusId();
        $this->hsRefusId = $iHsRefusId;
        $this->_checkChangeStatut($iOpStatusId);
        parent::setOpStatusId($iOpStatusId);
    }

    public function setOpClId($iOpClId)
    {
        parent::setOpClId($iOpClId);
        if (! $this->isNew() && $this->getOpStatusId() != Operations::STATUS_EN_COURS) {
            $this->addValidationFailed('Le client ne peut être modifié si le statut de l\'opération n\'est pas en cours');
        }
        if ($iClSiteIdForLog = $this->getClSiteIdForLog()) {
            if (! ClientSitesQuery::create()
                ->filterByClSiteId($iClSiteIdForLog)
                ->filterByClId($iOpClId)
                ->filterByClSiteIsForLog(1)
                ->findOne()) {
                // Reset client site Id for log
                $this->setClSiteIdForLog(null);
            }
        }
    }

    public function setClSiteIdForLog($iClSiteIdForLog)
    {
        parent::setClSiteIdForLog($iClSiteIdForLog);
        if ($iClSiteIdForLog) {
            // Assert that client site id belong to the current operation's client
            if ($sOpClientId = $this->getOpClId()) {
                if (! ClientSitesQuery::create()
                    ->filterByClSiteId($iClSiteIdForLog)
                    ->filterByClId($sOpClientId)
                    ->filterByClSiteIsForLog(1)
                    ->findOne()) {
                    $this->addValidationFailed('Le site client n\'est pas lié au client de l\'opération');
                }
            } else {
                $this->addValidationFailed('Aucun client n\'est lié à cette opération, il est est donc impossible de définir un site');
            }
        }
    }

    public function setOpMailsDest($sMails)
    {
        parent::setOpMailsDest($sMails);

        if (! empty($sMails)) {
            $aMails = explode(',', $sMails);
            foreach ($aMails as $sMail) {
                if (! Zend_Validate::is($sMail, 'Zend_Validate_EmailAddress')) {
                    $this->addValidationFailed("L'adresse renseignée n'est pas correcte", 'op_mails_dest');
                }
            }
        }
    }

    public function setOpDateconsoEnd($sValue)
    {
        if ($oDateTime = PropelDateTime::newInstance($sValue, null, 'DateTime')) {
            $sValue = $oDateTime->setTime(23, 59, 59);
        }
        return parent::setOpDateconsoEnd($sValue);
    }

    public function setOpDateposteEnd($sValue)
    {
        if ($oDateTime = PropelDateTime::newInstance($sValue, null, 'DateTime')) {
            $sValue = $oDateTime->setTime(23, 59, 59);
        }
        return parent::setOpDateposteEnd($sValue);
    }

    public function setOpStampEnd($sValue)
    {
        if ($oDateTime = PropelDateTime::newInstance($sValue, null, 'DateTime')) {
            $sValue = $oDateTime->setTime(23, 59, 59);
        }
        return parent::setOpStampEnd($sValue);
    }

    public function preValidate()
    {
        if ($this->isNew()) {
            $this->setOpNumber('00000');
            $this->setOpStatusId(self::STATUS_EN_COURS);
        }
        parent::preValidate();
    }

    /**
     * Adding services depending on the operation options
     */
    public function processOperationOptionsTemplating()
    {

        // Retrieving the associated operation options
        $aOptions = ROperationOptionsQuery::create()->getAvailableOptionsIdByOpId($this->getOpId());

        // Retrieving from the template, the rubrics with the services associated to the options
        $oOptionTemplates = ROperationOptionsTplQuery::create()->filterByROptId($aOptions)->find();
        $aSelectedRubricsAndServices = array();
        foreach ($oOptionTemplates as $oROperationOptionsTpl) {
            // 40729 Retrieving only enabled services
            $oAssociatedService = RPrestationsQuery::create()->filterByRPrestationId($oROperationOptionsTpl->getRPrestId())->findOne();
            if (($oAssociatedService instanceof RPrestations) && ($oAssociatedService->getActif() == 1)) {
                $aSelectedRubricsAndServices[$oROperationOptionsTpl->getRRubId()][] = $oROperationOptionsTpl;
            }
        }

        // Adding the selected rubrics and services to the operation quote
        foreach ($aSelectedRubricsAndServices as $iRubricId => $aRubric) {
            $iOpRubricId = $this->addRubriqueFromReferentiel($iRubricId);
            foreach ($aRubric as $oROperationOptionsTpl) {
                $oPrestation = $this->replacePrestationFromReferentiel($oROperationOptionsTpl->getRPrestId(), $iOpRubricId, false);
                if ($oPrestation instanceof OperationPrestations) {
                    $oPrestation->setOpPrestIsMandatory($oROperationOptionsTpl->getROpOptionTplIsMandatory())->save();
                }
            }
        }
    }

    /**
     * Adds template rewards, scenarii, rubrics and services
     *
     * @param \ROperationTypeSubTpl $oTemplate
     */
    public function processOperationSubTypeTemplating(\ROperationTypeSubTpl $oTemplate)
    {

        $iTemplateId = $oTemplate->getOstTplId();

        // Adding template rewards
        $aROperationTypeSubTplPrime = ROperationTypeSubTplPrimeQuery::create()->filterByOstTplId($iTemplateId)
            ->orderByOstTplPrimeNumero()
            ->find();

        foreach ($aROperationTypeSubTplPrime as $oROperationTypeSubTplPrime) {
            $sSQLQuery = 'insert into operation_primes(op_id,op_prime_libelle,op_prime_numero, operation_prime_r_reward_type_id)
						values(:op_id,:op_prime_libelle,:ost_tpl_prime_numero, :operation_prime_r_reward_type_id)';
            $oStmt = $this->getConnection()->prepare($sSQLQuery);
            $oStmt->bindValue(':op_id', $this->getOpId(), PDO::PARAM_INT);
            $oStmt->bindValue(':ost_tpl_prime_numero', $oROperationTypeSubTplPrime->getOstTplPrimeNumero(), PDO::PARAM_INT);
            $oStmt->bindValue(':op_prime_libelle', $oROperationTypeSubTplPrime->getOstTplPrimeLibelle(), PDO::PARAM_STR);
            $oStmt->bindValue(':operation_prime_r_reward_type_id', $oROperationTypeSubTplPrime->getOstTplRewardType(), PDO::PARAM_INT);
            $oStmt->execute();

            $aPrimesIdByNumero[$oROperationTypeSubTplPrime->getOstTplPrimeNumero()] = $this->getConnection()->lastInsertId();
        }

        // Adding template scenarii
        $aROperationTypeSubTplScenarios = ROperationTypeSubTplScenarioQuery::create()->filterByOstTplId($iTemplateId)
            ->orderByRScenarioNumero()
            ->useRScenariosQuery()->endUse()
            ->with('RScenarios')
            ->find();

        $aScenariosIdByNumero = array();
        foreach ($aROperationTypeSubTplScenarios as $oROperationTypeSubTplScenario) {
            $oRScenario = $oROperationTypeSubTplScenario->getRScenarios();

            $oStmt = $this->getConnection()->prepare('
                INSERT INTO operation_scenarii (
                    op_id,
					op_r_scenario_id,
					op_scenario_numero,
					op_scenario_pcent,
					op_scenario_libelle,
					op_scenario_reference,
					op_r_prime_id
                )
				VALUES (
                    :op_id,
					:op_r_scenario_id,
					:op_scenario_numero,
					:op_scenario_pcent,
					:op_scenario_libelle,
					:op_scenario_reference,
					:op_r_prime_id
                )
            ');
            $oStmt->bindValue(':op_id', $this->getOpId(), PDO::PARAM_INT);
            $oStmt->bindValue(':op_r_scenario_id', $oROperationTypeSubTplScenario->getRScenarioId(), PDO::PARAM_INT);
            $oStmt->bindValue(':op_scenario_numero', $oROperationTypeSubTplScenario->getRScenarioNumero(), PDO::PARAM_INT);
            $oStmt->bindValue(':op_scenario_pcent', $oROperationTypeSubTplScenario->getRScenarioPcent(), PDO::PARAM_INT);
            $oStmt->bindValue(':op_scenario_libelle', $oRScenario->getRScenarioLibelle(), PDO::PARAM_STR);
            $oStmt->bindValue(':op_scenario_reference', $oROperationTypeSubTplScenario->getRScenarioReference(), PDO::PARAM_STR);
            if (isset($aPrimesIdByNumero[$oROperationTypeSubTplScenario->getRPrimeNumero()])) {
                $oStmt->bindValue(':op_r_prime_id', $aPrimesIdByNumero[$oROperationTypeSubTplScenario->getRPrimeNumero()], PDO::PARAM_INT);
            } else {
                $oStmt->bindValue(':op_r_prime_id', null, PDO::PARAM_INT);
            }
            $oStmt->execute();

            $aScenariosIdByNumero[$oROperationTypeSubTplScenario->getRScenarioNumero()] = $this->getConnection()->lastInsertId();

            if (preg_match_all('/[0-9]+/', $oROperationTypeSubTplScenario->getRScenarioReference(), $aMatchedScenarii) > 0) {
                $aNumbers = $aMatchedScenarii[0];
                foreach ($aNumbers as $iNumber) {
                    $oStmt = $this->getConnection()->prepare('
                        INSERT INTO operation_scenarii_parents (op_id,ops_numero,ops_parent_numero)
						VALUES(:op_id,:ops_numero,:ops_parent_numero)
                    ');
                    $oStmt->bindValue(':op_id', $this->getOpId(), PDO::PARAM_INT);
                    $oStmt->bindValue(':ops_numero', $oROperationTypeSubTplScenario->getRScenarioNumero(), PDO::PARAM_INT);
                    $oStmt->bindValue(':ops_parent_numero', $iNumber, PDO::PARAM_INT);
                    $oStmt->execute();
                }
            }
        }

        // Adding template rubrics and services
        $oROperationTypeSubTplRubriques = ROperationTypeSubTplRubriqueQuery::create()->filterByOstTplId($iTemplateId)->find();

        foreach ($oROperationTypeSubTplRubriques as $oROperationTypeSubTplRubrique) {
            /* @var $oROperationTypeSubTplRubrique ROperationTypeSubTplRubrique */
            $iOpRubriqueId = $this->addRubriqueFromReferentiel($oROperationTypeSubTplRubrique->getRRubriqueId());
            $iServiceOrder = 0;
            $oCriteria = new Criteria();
            $oCriteria->addAscendingOrderByColumn('ost_tpl_prestation_order');
            foreach ($oROperationTypeSubTplRubrique->getROperationTypeSubTplPrestations($oCriteria) as $oROperationTypeSubTplPrestation) {
                /* @var $oROperationTypeSubTplPrestation ROperationTypeSubTplPrestation */
                $oOperationPrestation = $this->replacePrestationFromReferentiel($oROperationTypeSubTplPrestation->getRPrestationId(), $iOpRubriqueId, false);

                if ($oOperationPrestation !== false) {
                    $oOperationPrestation->setOpPrestIsMandatory($oROperationTypeSubTplPrestation->getOstTplPrestationIsMandatory());
                    $oOperationPrestation->setOpPrestOrder(++$iServiceOrder);
                    $oOperationPrestation->setOpPrestNpa($oROperationTypeSubTplPrestation->getOstTplPrestationIsHidden());

                    if (isset($aPrimesIdByNumero[$oROperationTypeSubTplPrestation->getRPrimeNumero()])) {
                        $oOperationPrestation->setOpPrestPrimeId($aPrimesIdByNumero[$oROperationTypeSubTplPrestation->getRPrimeNumero()]);
                    }
                    if (isset($aScenariosIdByNumero[$oROperationTypeSubTplPrestation->getRScenarioNumero()])) {
                        $oOperationPrestation->setOpPrestScenaId($aScenariosIdByNumero[$oROperationTypeSubTplPrestation->getRScenarioNumero()]);
                    }
                    $oOperationPrestation->save();
                }
            }
        }

        // Adding countries
        $oTemplateCountries = ROperationTypeSubTplCountriesQuery::create()
            ->filterByROperationTypeSubTplCountryTplId($iTemplateId)
            ->filterByROperationTypeSubTplCountryIsCountryLinked(1)
            ->find();

        foreach ($oTemplateCountries as $oTemplateCountry) {
            $oOperationCountry = new \LnkOperationCountry();
            $oOperationCountry->setOpId($this->getOpId());
            $oOperationCountry->setLnkOpCountryId($oTemplateCountry->getROperationTypeSubTplCountryRCountryId());
            $oOperationCountry->save();
        }

        // Saving the template used to generate operations rewards, scenariis and rubrics/services
        $this->setOperationOstTplId($oTemplate->getOstTplId());
        $this->save();
    }

    /**
     * Add a service to the operation, coming from the repository (r_prestations table)
     *
     * @param string|int $sRServiceId
     * @param string|int $sOpRubricId
     * @param boolean $bSave
     * @param \OperationPrestations $oOperationPrestationToReplace
     * @return \OperationPrestations|boolean
     * @throws \InvalidArgumentException
     */
    public function replacePrestationFromReferentiel($sRServiceId, $sOpRubricId, $bSave = true, \OperationPrestations $oOperationPrestationToReplace = null)
    {

        if (! is_string($sRServiceId) && ! is_int($sRServiceId)) {
            throw new \InvalidArgumentException('Argument "$sRServiceId" expects a string or an int,"' . (is_object($sRServiceId) ? get_class($sRServiceId) : gettype($sRServiceId)) . '" given');
        }

        if (! is_string($sOpRubricId) && ! is_int($sOpRubricId)) {
            throw new \InvalidArgumentException('Argument "$sOpRubricId" expects a string or an int, "' . (is_object($sOpRubricId) ? get_class($sOpRubricId) : gettype($sOpRubricId)) . '" given');
        }

        if (! is_bool($bSave)) {
            throw new \InvalidArgumentException('Argument "$bSave" expects a string, "' . (is_object($bSave) ? get_class($bSave) : gettype($bSave)) . '" given');
        }

        $oRPrestations = RPrestationsQuery::create()->findPK($sRServiceId);

        $sServiceAccountingCode = $oRPrestations->getRPCodeComptable();

        if (! ($oRPrestations instanceof RPrestations)) {
            $this->addValidationFailed('La prestation ' . $oRPrestations->getRPrestationId() . ' n\'existe pas ');
            return false;
        }
        if (empty($sServiceAccountingCode)) {
            $this->addValidationFailed('La prestation ' . $oRPrestations->getRPrestationId() . ' ne peut pas être associée à une opération car le code comptable n\'est pas défini');
            return false;
        }

        $oOperationPrestations = $oOperationPrestationToReplace ? : new OperationPrestations();


        $oOperationPrestations->setOpId($this->getOpId())
            ->setOpPrestRubriId($sOpRubricId);

        // Retriving the customer service tailored
        $oCustomizedService = ClientPrestationsQuery::create()->filterByClId($this->getOpClId())->findOneByRPrestId($sRServiceId);

        $oOperationPrestations->setOpPrestCiestim($oRPrestations->getRPCoutInterne());
        $oOperationPrestations->setOpPrestCeestim($oRPrestations->getRPCoutExterne());

        // Checking that the user wishes to use neociated prices/labels and checking if the service is tailored for the customer
        if ($this->getOpUsePrestaNegoce() && $oCustomizedService instanceof ClientPrestations) {
            $sOpPrestLibelleDevis = ($oCustomizedService->getRPClientLibelle()) ? $oCustomizedService->getRPClientLibelle() : $oRPrestations->getRPLibelle();
            $iOpPrestPv = $oCustomizedService->getClPrestPv();
        } else {
            $sOpPrestLibelleDevis = $oRPrestations->getRPLibelle();
            $iOpPrestPv = $oRPrestations->getRPPrixVente();
        }

        $oOperationPrestations->setOpPrestCoef(1)
            ->setOpRPrestId($sRServiceId)
            ->setOpPrestPv($iOpPrestPv)
            ->setOpPrestLibelle($oRPrestations->getRPLibelle())
            ->setOpPrestLibelleDevis($sOpPrestLibelleDevis)
            ->setOpPrestCommentInterne($oRPrestations->getRPCommentaires())
            ->setOpPrestCodeComptable($oRPrestations->getRPCodeComptable())
            ->setOpAdf($oRPrestations->getRPAdf())
            ->setOpPrestIsMajFromCompiluo($oRPrestations->getRPIsMajFromCompiluo())
            ->translate(trim($this->getOpDevisLang()));

        if ($bSave) {
            $oOperationPrestations->save();
        }

        return $oOperationPrestations;
    }

    /**
     * Add a section to the operation
     * @param int $iRubriqueId
     * @return int identifiant de la rubrique créée pour l'opération
     */
    public function addRubriqueFromReferentiel($iRubriqueId)
    {
        $oRRubrique = RRubriquesQuery::create()->findPk($iRubriqueId);

        $oOperationRubriques = new OperationRubriques();
        $oOperationRubriques->setOpRRubriqueId($iRubriqueId)
            ->setOpId($this->getOpId())
            ->setRRubTypeId($oRRubrique->getRRubTypeId())
            ->setRTvaTypeId($oRRubrique->getRTvaTypeId())
            ->setOpRubriqueLibelle($oRRubrique->getRRubLibelle())
            ->save();
        return $oOperationRubriques->getOpRubriqueId();
    }

    /**
     * Add or not an option to the operation
     *
     * @param int $iOptionId
     * @param bool $bIsLinked
     */
    public function replaceOption($iOptionId, $bIsLinked)
    {
        // We're looking at whether the parent category is checkbox or radio.
        $oOption = ROperationOptionsQuery::create()->findOneByROpOptionId($iOptionId);
        $sTypeParent = $oOption->getParent()->getROpOptionType();

        switch ($sTypeParent) {
            case ROperationOptionsType::TYPE_RADIO_CAT:
                // If it is of the radio type, you must first set the options of the category concerned to' false'
                $oList = ROperationOptionsQuery::create()->findByROpOptionParent($oOption->getROpOptionParent());
                foreach ($oList as $oChild) {
                    ROperationOptionsQuery::create()->updateOptionForOperation($this->getOpId(), $oChild->getROpOptionId(), false);
                }

                ROperationOptionsQuery::create()->updateOptionForOperation($this->getOpId(), $iOptionId, $bIsLinked);
                break;

            case ROperationOptionsType::TYPE_CHECKBOX_CAT:
                // Otherwise we simply update the option
                ROperationOptionsQuery::create()->updateOptionForOperation($this->getOpId(), $iOptionId, $bIsLinked);
                break;
        }
    }

    /**
     * Update of sales prices negotiated on all the services, negotiated by the customer of the operation
     */
    public function updatePrestationsFromNegoce()
    {
        $oOperationPrestations = $this->getOperationPrestationss();
        $oClientPrestations = $this->getClients()->getClientPrestationss();

        foreach ($oOperationPrestations as $oOperationPrestation) {
            foreach ($oClientPrestations as $oClientPrestation) {
                if ($oOperationPrestation->getOpRPrestId() == $oClientPrestation->getRPrestId()) {
                    $oOperationPrestation->setOpPrestPv($oClientPrestation->getClPrestPv());
                    $oOperationPrestation->save();
                }
            }
        }
    }

    /**
     * Update of the sale prices of the services of the operation according to the reference system
     */
    public function updatePrestationsFromReferentiel()
    {
        $oOperationPrestations = $this->getOperationPrestationss();
        foreach ($oOperationPrestations as $oOperationPrestation) {
            $oRPrestations = RPrestationsQuery::create()->findPk($oOperationPrestation->getOpRPrestId());
            $oOperationPrestation->setOpPrestPv($oRPrestations->getRPPrixVente());
            $oOperationPrestation->save();
        }
    }

    /**
     * Copy of qualifying information + services from another operation
     *
     * @param int $iOperationId ID of the operation to be copied
     * @param bool $bUsePrestaNegoce uses or not the negotiated rates
     * @param int $iNewCustomerId new customer of the operation
     * @throws \InvalidArgumentException
     */
    public function copyFromOperationAndSave($iOperationId, $bUsePrestaNegoce = false, $iNewCustomerId = 0)
    {
        if (! is_integer($iNewCustomerId)) {
            throw new \InvalidArgumentException('The new customer id expects integer, "' . gettype($iNewCustomerId) . '" given');
        }

        $oOperationCopied = OperationsQuery::create()->findPk($iOperationId);
        $oOperationCopied->copyInto($this);

        // Set site to be used as customer address in
        $this->setClSiteIdForLog(null);

        // Init stats recipient
        $this->setOpMailsDest('');

        // Change this option here to avoid making a second save
        $this->setOpUsePrestaNegoce($bUsePrestaNegoce);
        
        

        //  Reset the following fields on copy : op_description, op_commentaire and op_brief_Log
        $this->setOpDescription(null)
            ->setOpCommentaire(null)
            ->setOpBriefLog(null)
            ->setDateModify(null)
            ->setUserModify(null)
            ->setOpDateLastSendStat(null);

        $this->save(null, true);


    
    
        // Copy rewards
        $aOperationPrimes = $oOperationCopied->getOperationPrimess();
        $aPrimeIdToReplace = array();
        foreach ($aOperationPrimes as $oOperationPrime) {
            /* @var OperationPrimes $oOperationPrimeCopied */
            $iPrimeId = $oOperationPrime->getPrimaryKey();
            $oOperationPrimeCopied = $oOperationPrime->copy();
            $oOperationPrimeCopied->setOpId($this->getOpId());
            $oOperationPrimeCopied->setGdlArtId(null);
            $oOperationPrimeCopied->save();
            $aPrimeIdToReplace[$iPrimeId] = $oOperationPrimeCopied->getPrimaryKey();
        }

        // Copy scenariis
        $aOperationScenarii = $oOperationCopied->getOperationScenariis();
        $aOperationScenariiIdToReplace = array();
        foreach ($aOperationScenarii as $oOperationScenarii) {
            $iScenarioId = $oOperationScenarii->getPrimaryKey();
            $sSql = '
                INSERT INTO operation_scenarii(
                    op_scenario_numero,
                    op_id,
                    op_r_scenario_id,
                    op_scenario_libelle,
                    op_scenario_volume,
                    op_scenario_pcent,
                    op_r_prime_id,
                    op_scenario_reference
                )
                VALUES(
                    :op_scenario_numero,
                    :op_id,
                    :op_r_scenario_id,
                    :op_scenario_libelle,
                    :op_scenario_volume,
                    :op_scenario_pcent,
                    :op_r_prime_id,
                    :op_scenario_reference
                )
            ';

            $oStmt = $this->getConnection()->prepare($sSql);
            $oStmt->bindValue(':op_id', $this->getOpId(), pdo::PARAM_INT);
            $oStmt->bindValue(':op_scenario_numero', $oOperationScenarii->getOpScenarioNumero(), pdo::PARAM_INT);
            $oStmt->bindValue(':op_r_scenario_id', $oOperationScenarii->getOpRScenarioId(), pdo::PARAM_INT);
            $oStmt->bindValue(':op_scenario_libelle', $oOperationScenarii->getOpScenarioLibelle(), pdo::PARAM_STR);
            $oStmt->bindValue(':op_scenario_volume', $oOperationScenarii->getOpScenarioVolume(), pdo::PARAM_INT);
            $oStmt->bindValue(':op_scenario_pcent', $oOperationScenarii->getOpScenarioPcent(), pdo::PARAM_INT);
            if (isset($aPrimeIdToReplace[$oOperationScenarii->getOpRPrimeId()])) {
                $oStmt->bindValue(':op_r_prime_id', $aPrimeIdToReplace[$oOperationScenarii->getOpRPrimeId()], pdo::PARAM_INT);
            } else {
                $oStmt->bindValue(':op_r_prime_id', null, pdo::PARAM_INT);
            }
            $oStmt->bindValue(':op_scenario_reference', $oOperationScenarii->getOpScenarioReference(), pdo::PARAM_STR);
            $oStmt->execute();

            $aOperationScenariiIdToReplace[$iScenarioId] = $this->getConnection()->lastInsertId();
        }

        

        // Copy references parent enfant pour scenarios
        $aOperationScenariiParents = OperationScenariiParentsQuery::create()->findByOpId($iOperationId);

        foreach ($aOperationScenariiParents as $oOperationScenariiParent) {
            $oOperationScenariiParentCopied = $oOperationScenariiParent->copy();
            $oOperationScenariiParentCopied->setOpId($this->getOpId());
            $oOperationScenariiParentCopied->save();
        }

        // Copy sections
        $oOperationRubriques = $oOperationCopied->getOperationRubriquess();
        $aOperationsIdToReplace = array();
        foreach ($oOperationRubriques as $oOperationRubrique) {
            $iRubriqueId = $oOperationRubrique->getPrimaryKey();
            $oOperationRubriqueCopied = $oOperationRubrique->copy();
            $oOperationRubriqueCopied->setOpId($this->getOpId());
            $oOperationRubriqueCopied->save();
            $aOperationsIdToReplace[$iRubriqueId] = $oOperationRubriqueCopied->getPrimaryKey();
        }

    
        // Copy services
        $oCriteria = new Criteria();
        $oCriteria->addAscendingOrderByColumn('op_prest_order');

        $aOperationPrestations = $oOperationCopied->getOperationPrestationss($oCriteria);

        $aOperationsAdded = array();

        // Retrieving Ids of services that have been removed
        $aDisabledPrestations = $oOperationCopied->getDisabledPrestations(true);

        foreach ($aOperationPrestations as $oOperationPrestation) {
            // If the current service is deactivated from the catalog, then it is not included in the services of the new operation.
            if (in_array($oOperationPrestation->getOpRPrestId(), $aDisabledPrestations)) {
                continue;
            }

            $oOperationPrestationCopied = $oOperationPrestation->copy();

            if (in_array($oOperationPrestationCopied->getOpRPrestId(), $aOperationsAdded)) {
                $oOperationPrestationCopied->setOpPrestIsMandatory(0);
            }

            // Resete performed indices
            $oOperationPrestationCopied->setOpPrestQreel(0);
            $oOperationPrestationCopied->setOpPrestMreel(0);
            $oOperationPrestationCopied->setOpPrestCereel(0);
            $oOperationPrestationCopied->setOpPrestCireel(0);
            $oOperationPrestationCopied->setOpPrestOff(0);
            $oOperationPrestationCopied->setOpPrestCodeComptable($oOperationPrestationCopied->getRPrestations()->getRPCodeComptable());
            $oOperationPrestationCopied->setDateModify(null);
            $oOperationPrestationCopied->setUserModify(null);
            $oOperationPrestationCopied->setCostValidationDate(null);
            $oOperationPrestationCopied->setCostUpdaterUser(null);
            $oOperationPrestationCopied->setOpPrestCoutsValides(0);

            // Add negotiated services for the client chosen by the user
            if ($bUsePrestaNegoce === true && $iNewCustomerId) {
                $oOperationPrestationCopied->applyPrestaNegoce($iNewCustomerId);
            }

            $oOperationPrestationCopied->setOpId($this->getOpId());
            if (isset($aOperationsIdToReplace[$oOperationPrestationCopied->getOpPrestRubriId()])) {
                $oOperationPrestationCopied->setOpPrestRubriId($aOperationsIdToReplace[$oOperationPrestationCopied->getOpPrestRubriId()]);
            }
            if (isset($aPrimeIdToReplace[$oOperationPrestationCopied->getOpPrestPrimeId()])) {
                $oOperationPrestationCopied->setOpPrestPrimeId($aPrimeIdToReplace[$oOperationPrestationCopied->getOpPrestPrimeId()]);
            }
            if (isset($aOperationScenariiIdToReplace[$oOperationPrestationCopied->getOpPrestScenaId()])) {
                $oOperationPrestationCopied->setOpPrestScenaId($aOperationScenariiIdToReplace[$oOperationPrestationCopied->getOpPrestScenaId()]);
            }

            $iCount = OperationPrestationsQuery::create()->filterByOpPrestRubriId($oOperationPrestationCopied->getOpPrestRubriId())->count();
            $iCount++;
            $oOperationPrestationCopied->setOpPrestOrder($iCount);

            // Init NPA & NPR
            $oOperationPrestationCopied->setOpPrestNpa(0);
            $oOperationPrestationCopied->setOpPrestNpr(0);

            $oOperationPrestationCopied->saveSimple();

            $aOperationsAdded[] = $oOperationPrestationCopied->getOpRPrestId();
        }

        // Copy options
        $aLnkOperationOptions = $oOperationCopied->getLnkOperationOptions();
        foreach ($aLnkOperationOptions as $oLnkOperationOption) {
            if (! in_array($oLnkOperationOption->getROperationOptions()->getROpOptionParent(), array(ROperationOptions::CAT_ENTREPOT, ROperationOptions::CAT_WMS))) {
                $oLnkOperationOptionCopied = $oLnkOperationOption->copy();
                $oLnkOperationOptionCopied->setOpId($this->getOpId());
                $oLnkOperationOptionCopied->save();
            }
        }
    }

    /**
     * Counting the number of recipients for the stats
     * @return int
     */
    public function getNbDestinatairesStats()
    {
        $iNbContactsChampLibre = 0;
        $iNbContactsChecked = LnkOperationsContactsMailQuery::create()->filterByOpId($this->getOpId())
            ->where('LnkOperationsContactsMail.SendMail=?', true)
            ->count();

        $sMails = $this->getOpMailsDest();
        if (! empty($sMails)) {
            $aMails = explode(',', $sMails);
            $iNbContactsChampLibre = count($aMails);
        }

        return $iNbContactsChecked + $iNbContactsChampLibre;
    }

    /**
     * @return array
     */
    public function getDestinatairesStats()
    {
        $aContact = ContactsQuery::create()
            ->useLnkOperationsContactsMailQuery()
            ->filterByOpId($this->getOpId())
            ->filterBySendMail(1)
            ->endUse()
            ->find()
            ->toKeyValue('CtId', 'CtEmail');
        $sMails = $this->getOpMailsDest();
        return $sMails ? explode(',', $sMails) + $aContact : $aContact;
    }

    /**
     * Generation of invoices having due date < today
     * @param bool $bSendMailNotification : send a "invoice created" notification mail
     * @return int
     */
    public function genFactures() : array
    {
        $aInvoiceReferences = array();
        if ($this->getOpStatusId() != operations::STATUS_ACCEPTE) {
            $this->addValidationFailed('L\'opération n\'a pas le statut accepté');
            return $aInvoiceReferences;
        }
        if ($this->getContactFacturation() == null) {
            $this->addValidationFailed('Il n\'y a pas de contact de facturation rattaché à l\'opération');
            return $aInvoiceReferences;
        }
        if ($this->getContactFacturation()->getClientSites() == null) {
            $this->addValidationFailed('Il n\'y a pas de site rattaché au contact de facturation');
            return $aInvoiceReferences;
        }
        if ($this->getOpDcId() == null) {
            $this->addValidationFailed('Il n\'y a pas de directeur de clientèle renseigné pour cette opération');
            return $aInvoiceReferences;
        }
        if ($this->getClientFactureOptions() == null || $this->getClientFactureOptions()->getClFactEcheance() == null) {
            $this->addValidationFailed('Il n\'y a pas d\'échéance de facturation renseignée pour le client de l\'opération');
            return $aInvoiceReferences;
        }

        // Starting transaction
        $this->getConnection()->beginTransaction();

        try {
            // Deleting created unlocked invoices for regeneration
            $oCriteria = new Criteria();
            $oCriteria->add('fact_status_id', RFactureStatuts::CREATED)->add('fact_verrou', 1, Criteria::ALT_NOT_EQUAL);
            $aInvoices = $this->getFacturess($oCriteria);

            foreach ($aInvoices as $oInvoice) {
                $oInvoice->delete(null, false);
            }

            // Retrieve operations deadlines which have not generated invoices and whose due date is less than the current date
            $aPlanFacturationDetails = PlanFacturationDetailsQuery::create()->findEcheanceToFacture($this->getOpId());

            // Invoice generation for each day of payement
            foreach ($aPlanFacturationDetails as $oPlanFacturationDetail) {
                $oFacture = $oPlanFacturationDetail->genFacture();
                if (! $oFacture) {
                    $aValidationFailures = $oPlanFacturationDetail->getValidationFailures();
                    $sFailureMessage = implode('', My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($aValidationFailures));
                    $this->addValidationFailed('Erreur de génération de la facture' . ($sFailureMessage ? ' : ' . $sFailureMessage : ''));
                    return $aInvoiceReferences;
                }
                $aInvoiceReferences[] = $oFacture->getFactReference();
            }
            $this->getConnection()->commit();
        } catch (\Throwable $oException) {
            \CSErrorHandler::getInstance()->handleException($oException);
            $this->getConnection()->rollBack();
            $this->addValidationFailed($oException->getMessage());
            return $aInvoiceReferences;
        }
        return $aInvoiceReferences;
    }

    /**
     * Aggregate operation invoiced amounts by rubriques
     * @return array [index=>[fact_rub_libelle,rubrique_type_libelle,r_tva_libelle,fact_rub_montant_ht,fact_rub_montant_ttc]]
     */
    public function getMontantFactureByRubrique() : array
    {
        static $aResult;
        if (! isset($aResult)) {
            $aResult = $this->getConnection()->query('
                SELECT
                    fact_rub_libelle,
                    rubrique_type_libelle,
                    r_tva_libelle,
                    SUM(fact_rub_montant_ht) AS "fact_rub_montant_ht",
                    SUM(fact_rub_montant_ttc) AS "fact_rub_montant_ttc"
				FROM factures
                JOIN factures_rubriques ON factures.fact_id=factures_rubriques.fact_id
				JOIN r_rubriques_type ON factures_rubriques.r_rub_type_id = r_rubriques_type.rubrique_type_id
				JOIN r_tva_type ON factures_rubriques.r_tva_type_id = r_tva_type.r_tva_id
				WHERE factures.op_id = ' . $this->getOpId() . '
                AND factures.fact_status_id IN (' . RFactureStatuts::EDITED . ',' . RFactureStatuts::ENCAISSE_PARTIEL . ',' . RFactureStatuts::ENCAISSE . ')
				GROUP BY op_rubrique_id, fact_rub_libelle, rubrique_type_libelle, r_tva_libelle
			')->fetchAll(PDO::FETCH_ASSOC);
        }
        return $aResult;
    }

    /**
     * Total invoiced amounts excluding VAT
     * @return int
     */
    public function getInvoiceAmountExcludingVat() : int
    {
        $iSum = 0;
        foreach ($this->getMontantFactureByRubrique() as $aRow) {
            $iSum += $aRow['fact_rub_montant_ht'];
        }
        return $iSum;
    }

    /**
     * Total invoiced amounts inclusive of tax
     *
     * @return int
     */
    public function getInvoiceAmountIncludingVat() : int
    {
        $iSum = 0;
        foreach ($this->getMontantFactureByRubrique() as $aRow) {
            $iSum += $aRow['fact_rub_montant_ttc'];
        }
        return $iSum;
    }

    /**
     * @param string $sType
     * @return array (ADF_Estim, ADF_Facture, ADF_Encaisse, ADF_Reel, ADF_Utilise, ADF_Dispo)
     */
    public function getFundRaisingAmount(string $sType = null) : array
    {
        $aResult = $this->getConnection()->query('SELECT * FROM View_Operation_ADF WHERE op_id = "' . $this->getOpId() . '"')->fetch(PDO::FETCH_ASSOC);
        $aResult['ADF_Utilise'] = Phoenix_ExternalConnection_Arthur::getInstance()->getUsedFundRaisingByOperationId($this->getOpId());
        $aResult['ADF_Dispo'] = $aResult['ADF_Encaisse'] - $aResult['ADF_Utilise'];

        if ($sType) {
            return $aResult[$sType];
        } else {
            return $aResult;
        }
    }

    /**
     * Update real quantities
     */
    public function majQreelFromQestim()
    {
        $this->getConnection()->query("
            UPDATE operation_prestations SET op_prest_qreel = op_prest_qestim, op_prest_mreel = op_prest_qestim*op_prest_pv
            WHERE op_id = " . $this->getOpId() . "
            AND op_prest_qreel = 0
            AND op_prest_rubri_id IN (
                SELECT op_rubrique_id
                FROM operation_rubriques
                WHERE op_id = " . $this->getOpId() . "
                AND r_rub_type_id = " . RRubriquesType::FF . "
           )
       ");
    }

    /**
     * Amounts relative to "decouvert" requests
     * @param string $sIndex
     * @return array [Dec_Montant_Accord]
     */
    public function getMontantsDecouvert($sIndex = null)
    {
        static $aViewOperationDecouvert;

        if (! isset($aViewOperationDecouvert[$this->getOpId()])) {
            $aViewOperationDecouvert[$this->getOpId()] = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()->from('View_Operation_Decouvert')
                ->where('op_id=?', $this->getOpId())
                ->query()->fetch(PDO::FETCH_ASSOC);
        }
        if (! isset($sIndex)) {
            return $aViewOperationDecouvert[$this->getOpId()];
        } else {
            return isset($aViewOperationDecouvert[$this->getOpId()][$sIndex]) ? $aViewOperationDecouvert[$this->getOpId()][$sIndex] : 0;
        }
    }

    /**
     * Calculate current estimated margin
     * @return float
     */
    public function getMargeEstim()
    {
        $aPrestations = $this->getOperationPrestationss();
        return Data_Compta_Calcul_Operation::margeEstim($aPrestations);
    }

    /**
     * Calculate real current margin
     * @return float
     */
    public function getMargeReel()
    {
        $aPrestations = $this->getOperationPrestationss();
        return Data_Compta_Calcul_Operation::margeReel($aPrestations);
    }

    /**
     * Computes different amounts for the quote
     *
     * @param  string $sLanguage
     * @param  string $sType
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getMontants($sLanguage = RLanguages::LANG_FRA, $sType = 'estim')
    {

        if (is_null($sLanguage)) {
            $sLanguage = RLanguages::LANG_FRA;
        }

        if (! is_string($sLanguage)) {
            throw new \InvalidArgumentException('Argument "$sLanguage" expects a string "' . gettype($sLanguage) . '" given');
        }

        if (! is_string($sType)) {
            throw new \InvalidArgumentException('Argument "$sType" expects a string "' . gettype($sType) . '" given');
        }

        $aTva = RTvaTypeQuery::create()->find()->toArray('RTvaId', false, BasePeer::TYPE_FIELDNAME);

        $aMontantForTva = array();
        $fMontantTotalSansRembEtFraisPostauxHt = 0;
        $fMontantTotalSansRembEtFraisPostauxTtc = 0;
        $fMontantFraisPostauxHt = 0;
        $fMontantFraisPostauxTtc = 0;
        $fMontantRembHt = 0;
        $fMontantRembTtc = 0;
        $fMontantTotalHt = 0;
        $fMontantTotalTtc = 0;
        $fMontantCaHt = 0;

        // Browsing rubrics to compute amonts
        switch ($sType) {
            case 'estim':
                $sGetMontant = 'getMontantTotalEstim';
                break;
            case 'reel':
                $sGetMontant = 'getMontantTotalReel';
                break;
            case 'estim_ca':
                $sGetMontant = 'getMontantTotalEstimCa';
                break;
        }


        foreach ($this->getOperationRubriquess() as $oOperationRubrique) {
            $fAmount = $oOperationRubrique->$sGetMontant();
            // Postal charges amount
            if (in_array($oOperationRubrique->getOpRRubriqueId(), array(RRubriques::RUB_POSTAL_CHARGES_NO_VAT))) {
                $fMontantFraisPostauxHt += $fAmount;
                $fMontantFraisPostauxTtc += $fAmount * $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_coeff'];
            } elseif (in_array($oOperationRubrique->getOpRRubriqueId(), RRubriques::REFUND_SECTION_IDS)) {
                // Refunds amount
                $fMontantRembHt += $fAmount;
                $fMontantRembTtc += $fAmount * $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_coeff'];
            } else {
                // The rest
                $fMontantTotalSansRembEtFraisPostauxHt += $fAmount;
                $fMontantTotalSansRembEtFraisPostauxTtc += $fAmount * $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_coeff'];
            }

            // Total amounts
            if ($aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_statut'] == 'tva') {
                $fMontantTotalHt += $fAmount;
            }
            $fMontantTotalTtc += $fAmount * $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_coeff'];
            $fMontantCaHt += $fAmount;

            if ($aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_taux']) {
                if (! isset($aMontantForTva[$aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_id']])) {
                    $aMontantForTva[$aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_id']]['montant'] = 0;
                }
            }
            $aMontantForTva[$aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_id']]['montant'] += $fAmount * $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_taux'] / 100;

            if ($sLanguage == RLanguages::LANG_ENG) {
                $aMontantForTva[$aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_id']]['libelle'] = $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_libelle_en'];
            } else {
                $aMontantForTva[$aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_id']]['libelle'] = $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_libelle'];
            }
        }
        $aResult['montant_for_tva'] = $this->getSortedMontantForTva($aMontantForTva);
        $aResult['montant_total_sans_remb_et_frais_postaux_ht'] = $fMontantTotalSansRembEtFraisPostauxHt;
        $aResult['montant_total_sans_remb_et_frais_postaux_ttc'] = $fMontantTotalSansRembEtFraisPostauxTtc;
        $aResult['frais_postaux_ht'] = $fMontantFraisPostauxHt;
        $aResult['frais_postaux_ttc'] = $fMontantFraisPostauxTtc;
        $aResult['remb_ht'] = $fMontantRembHt;
        $aResult['remb_ttc'] = $fMontantRembTtc;
        $aResult['total_ht'] = $fMontantTotalHt;
        $aResult['total_ttc'] = $fMontantTotalTtc;
        $aResult['montant_total_ca_ht'] = $fMontantCaHt;

        return $aResult;
    }

    /**
     * Get sorted amount of Tva
     *
     * @param array $aMontantForTva
     * @return array
     */
    public function getSortedMontantForTva($aMontantForTva)
    {
        if ($aMontantForTva) {
            $aSortedMontantForTva = array();
            $aIdkeys = array();
            $iCounter = 2;

            foreach ($aMontantForTva as $iRTvaTypeID => $fMontantTva) {
                if ($iRTvaTypeID == RTvaType::NON_SOUMIS_TVA) {
                    $aSortedMontantForTva[0] = $fMontantTva;
                    $aIdkeys[0] = $iRTvaTypeID;
                } elseif ($iRTvaTypeID == RTvaType::FRAIS_TTC) {
                    $aSortedMontantForTva[1] = $fMontantTva;
                    $aIdkeys[1] = $iRTvaTypeID;
                } else {
                    $aSortedMontantForTva[$iCounter] = $fMontantTva;
                    $aIdkeys[$iCounter] = $iRTvaTypeID;
                    ++$iCounter;
                }
            }
            ksort($aSortedMontantForTva);
            ksort($aIdkeys);
            $aMontantForTva = array_combine($aIdkeys, $aSortedMontantForTva);
        }

        return $aMontantForTva;
    }

    /**
     * Process for update of mail process delay
     */
    private function processChangeDelaiCourrier()
    {
        // Adds of the "accelerated processing for specific time limit" service, if the service has not already been added
        if (in_array($this->getOpDelaiTraitCourrierId(), array(
            RDelaiTraitCourrier::ACCELERE_STANDARD_5_JOURS,
            RDelaiTraitCourrier::RAPIDE_48_72_HRS,
            RDelaiTraitCourrier::RAPIDE_24_HRS,
            RDelaiTraitCourrier::URGENT_24_HRS
        )) &&
            OperationPrestationsQuery::create()->filterByOpId($this->getOpId())
            ->filterByOpRPrestId(RPrestations::TRAIT_COURRIER_ACCELERE)
            ->count() == 0) {
            $oRRubrique = OperationRubriquesQuery::create()->filterByOpId($this->getOpId())
                ->filterByOpRRubriqueId(RRubriques::RUB_FRAIS_VARIABLES)
                ->findOne();
            if ($oRRubrique != null) {
                $iRubId = $oRRubrique->getOpRubriqueId();
            } else {
                $iRubId = $this->addRubriqueFromReferentiel(RRubriques::RUB_FRAIS_VARIABLES);
            }
            $this->replacePrestationFromReferentiel(RPrestations::TRAIT_COURRIER_ACCELERE, $iRubId);
        }
    }

    /**
     * Add prestations to archive data if needed
     */
    public function addPrestationArhivage()
    {
        $aRprestId = OperationPrestationsQuery::create()->filterByOpId($this->getOpId())
            ->filterByOpRPrestId(RPrestations::ARCHIVING_IDS)
            ->select('OpRPrestId')->find()->toArray();

        if ($this->getClientContratOptions()->hasDataArchivage() && $this->getOpStatusId() == self::STATUS_EN_COURS && count($aRprestId) < 2) {
            $oRRubrique = OperationRubriquesQuery::create()->filterByOpId($this->getOpId())
                ->filterByOpRRubriqueId(RRubriques::RUB_FF_MISE_EN_PLACE)
                ->findOne();
            if ($oRRubrique != null) {
                $iRubId = $oRRubrique->getOpRubriqueId();
            } else {
                $iRubId = $this->addRubriqueFromReferentiel(RRubriques::RUB_FF_MISE_EN_PLACE);
            }
            foreach (RPrestations::ARCHIVING_IDS as $iPrestId) {
                if (! in_array($iPrestId, $aRprestId)) {
                    $this->replacePrestationFromReferentiel($iPrestId, $iRubId);
                }
            }
        }
    }

    /**
     * Check that all gedelog data relative to operation are sync with Phoenix
     * @return boolean
     */
    public function isPushedToGedelog()
    {
        $oGedelogOperationParams = GedelogOperationParamsQuery::create()->filterByOpId($this->getOpId())->findOne();

        if ($oGedelogOperationParams instanceof GedelogOperationParams) {
            return
                $oGedelogOperationParams->getGdlOpId()
                && $oGedelogOperationParams->getGdlEntId()
                && $oGedelogOperationParams->getGdlComtId()
                && $oGedelogOperationParams->getGdlFournId();
        }
        return false;
    }

    /**
     * @param int $iLangId
     */
    public function translate($iLangId = null)
    {
        if (! isset($iLangId)) {
            $iLangId = $this->getOpDevisLang();
        }

        foreach ($this->getOperationPrestationss() as $oPrestation) {
            $oPrestation->translate($iLangId)->save();
        }
    }

    /**
     * Save operation
     *
     * @param \PropelPDO $oConnection
     * @param type $bIsCopy
     */
    public function save(\PropelPDO $oConnection = null, $bIsCopy = false)
    {

        $bIsNew = $this->isNew();

        // Generate operation number
        if ($bIsNew) {
            $this->generateNumOp();
            $this->setOpStatusId(Operations::STATUS_EN_COURS);
            // Resetting the old status of the operation
            $this->oldOpStatusId = Operations::STATUS_EN_COURS;

            // Set the current user as DC
            if (Phoenix_Auth_User::getInstance()->getType() == 'DC') {
                $iUserId = Phoenix_Auth_User::getInstance()->getUserId();
                $this->setOpDcId($iUserId);
            }

            // Activate negotiated services if this grid for the customer to the opéeation
            // Disabling the automatic application of the pricing grid, only when copying specifications..
            if ($this->getClients()->hasPrestaNegoce() && ! $bIsCopy) {
                $this->setOpUsePrestaNegoce(true);
            }
        }

        // Retrieving changed fields and duplicate elimination values
        // This allows one, for example to avoid historize 3 status change line of operations
        $aModifiedColumns = array_unique($this->modifiedColumns);

        // Process traitement prior to save of the operation
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'operations.op_description':
                case 'operations.op_libelle':
                case 'operations.op_commentaire':
                case 'operations.op_brief_log':
                    $this->triggerFormatSpecialCharacters($sModifiedColumn);
                    break;
            }
        }
        parent::save($oConnection);
        $this->postSaveProcess($bIsNew, $aModifiedColumns);
    }



    /**
     * @param bool $bIsNew
     * @param array $aModifiedColumns
     * @return Operations
     */
    protected function postSaveProcess(bool $bIsNew, array $aModifiedColumns)
    {

        // Process editing an existing operation
        if (! $bIsNew) {
            foreach ($aModifiedColumns as $sModifiedColumn) {
                switch ($sModifiedColumn) {
                    case 'operations.op_cl_id':
                        $this->triggerClientChange();
                        break;
                    case 'operations.op_use_presta_negoce':
                        // Edite pv prestations according negotiated rate or not
                        $this->triggerAfterChangeUsePrestaNego();
                        break;
                }
            }
        } else {
            if (OperationsExtQuery::create()->filterByPrimaryKey($this->getOpId())->count() == 0) {
                $oOperationsExt = new OperationsExt();
                $oOperationsExt->setOpId($this->getOpId())->save();
            }
        }

        // Process consecutive to the publication of an operation
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'operations.op_status_id':
                    $this->triggerAfterChangeStatus();
                    break;
                case 'operations.op_delai_trait_courrier_id':
                    $this->processChangeDelaiCourrier();
                    break;
                case 'operations.op_cp_id':
                    $this->assignTasksToCurentCp();
                    break;
                case 'operations.op_devis_lang':
                    $this->translate();
                    break;
                case 'operations.op_description':
                case 'operations.op_libelle':
                case 'operations.op_commentaire':
                    $this->triggerFormatSpecialCharacters($sModifiedColumn);
                    break;
            }
        }
        return $this;
    }

    /**
     * This function returns the list of presets disabled for the current operation.
     * @param bool $bOnlyIds
     * @return array
     */
    public function getDisabledPrestations($bOnlyIds = false)
    {
        $aOriginalOperationPrestations = OperationPrestationsQuery::create()->select('OpRPrestId')->findByOpId($this->getOpId())->toArray();
        if ($bOnlyIds) {
            return RPrestationsQuery::create()->select('RPrestationId')->filterByActif(0)->findByRPrestationId($aOriginalOperationPrestations)->toArray();
        } else {
            return RPrestationsQuery::create()->filterByActif(0)->findByRPrestationId($aOriginalOperationPrestations)->toArray('RPrestationId', false, Basepeer::TYPE_FIELDNAME);
        }
    }

    /**
     * Get Zend Translate
     *
     * @return \Zend_Registry
     * @throws \LogicException
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicException('Undefined Zend Translate object');
    }

    /**
     * Get clients who had never an operation status changed to accepted before $iNbDay days
     *
     * @param int $iNbDay
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getClientHavingNoAcceptedOperation($iNbDay)
    {
        if (! is_int($iNbDay)) {
            throw new \InvalidArgumentException('Operation id expects int, "' . gettype($iNbDay) . '" given');
        }
        // 32655 adaptation de la syntaxe de soustraction de la date pour MySQL
        // Get clients who had never an operation status changed to accepted before $iNbDay days
        $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()
            ->from('clients', 'cl_id')
            ->where('operation_statuts.hs_new_statut_id = 2')
            ->where('operation_statuts.date_create < NOW() - INTERVAL ? DAY', $iNbDay)
            ->joinLeft('operations', 'clients.cl_id = operations.op_cl_id', array())
            ->joinLeft('operation_statuts', 'operation_statuts.op_id = operations.op_id', array())
            ->group('cl_id');

        $aResult = $oSelect->query()->fetchAll();

        return $aResult;
    }

    /**
     * Get  Accepted operations by client for the first time in the last $iNbDay days
     *
     * @param array $aClients
     * @param int $iNbDay
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getAcceptedOperationsByClients(array $aClients, $iNbDay)
    {
        if (! is_int($iNbDay)) {
            throw new \InvalidArgumentException('Operation id expects int, "' . gettype($iNbDay) . '" given');
        }

        // Get  Accepted operations by client for the first time in the last $iNbDay days
        $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()
            ->from('operations', array('op_number'))
            ->where('operation_statuts.date_create >=  NOW() - INTERVAL ? DAY', $iNbDay)
            ->where('operation_statuts.date_create < NOW() ')
            ->where('operation_statuts.hs_new_statut_id = 2')
            ->where('clients.cl_id NOT IN (?)', $aClients)
            ->joinLeft('clients', 'clients.cl_id = operations.op_cl_id', array('cl_libelle'))
            ->joinLeft('operation_statuts', 'operation_statuts.op_id = operations.op_id', array('date_accepte' => 'DATE_FORMAT(operation_statuts.date_create, \'%d/%m/%Y %H:%i:%s\')'))
            ->joinLeft(array('dc' => 'users'), 'operations.op_dc_id=dc.user_id', array('dc_nom' => 'dc.user_nom', 'dc_prenom' => 'dc.user_prenom'));

        return $oSelect->query()->fetchAll();
    }

    /**
     * Retrieve data about the operation dates and main contacts
     *
     * @return array
     */
    public function getOperationGlobalData()
    {
        $aOperationGlobalInformation = array(
            'iOperationNumber' => $this->getOpNumber(),
            'sOperationLibelle' => $this->getOpLibelle(),
            'iOperationType' => $this->getOpTypeId(),
            'iClientId' => $this->getOpClId(),
            'sClientLibelle' => $this->getClients()->getClLibelle(),
            'iOperationStatisticsType' => $this->getOperationStatisticsType(),
        );

        $sFax = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER);
        $oDcUser = $this->getUserDC();
        $oCpUser = $this->getUserCP();
        $aOperationContacts = array(
            'aOperationDc' => $oDcUser ? array('sUserName' => $oDcUser->getUserNomPrenom(), 'sUserEmail' => $oDcUser->getUserMail(), 'sUserTel' => $oDcUser->getUserPhone(), 'sUserFax' => $sFax) : array(),
            'aOperationCp' => $oCpUser ? array('sUserName' => $oCpUser->getUserNomPrenom(), 'sUserEmail' => $oCpUser->getUserMail(), 'sUserTel' => $oCpUser->getUserPhone(), 'sUserFax' => $sFax) : array(),
        );

        $aOperationDates = array(
            'sOperationManagementStartDate' => $this->getOpStampStart('d/m/Y'),
            'sOperationManagementEndDate' => $this->getOpStampEnd('d/m/Y'),
            'sOperationConsumptionStartDate' => $this->getOpDateconsoStart('d/m/Y'),
            'sOperationConsumptionEndDate' => $this->getOpDateconsoEnd('d/m/Y'),
            'sOperationPostEndDate' => $this->getOpDateposteEnd('d/m/Y'),
            'sStatsComputedToDate' => date('d/m/Y')
        );

        return array(
            'aOperationGlobalInformation' => $aOperationGlobalInformation,
            'aOperationContacts' => $aOperationContacts,
            'aOperationDates' => $aOperationDates
        );
    }

    /**
     * Retrieves data about the current operation edited, cashed and partly cashed invoices
     *
     * @return array
     */
    public function getStatisticsOperationInvoices()
    {
        $oStmt = $this->getConnection()->prepare('
            SELECT
                 VF.fact_reference AS \'N° facture\',
                 VF.fact_num_cmd AS \'N° Commande\',
                 VF.r_fact_type_libelle AS \'Type de facture\',
                 VF.fact_montant_ht AS \'Montant HT\',
                 VF.fact_montant_ttc AS \'Montant TTC\',
                 CASE
                     WHEN VF.fact_annul_id IS NULL AND VF.r_fact_type_id != 1 AND ft.fact_id IS NOT NULL THEN \'Annulée\'
                     WHEN VF.r_fact_type_id = 13 AND VF.fact_status_id = 4 THEN \'Annulation\'
                     ELSE VF.r_fact_stat_libelle
                 END AS \'Statut\',
                 VF.fact_date_echeance_fr AS \'Echéance\',
                 VF.fact_date_edition_fr AS \'Edition\',
                 VF.fact_date_encaisse_fr AS \'Encaissée\'
             FROM View_Facture_Listing VF
             LEFT JOIN factures ft ON VF.fact_id = ft.fact_annul_id
             WHERE VF.fact_status_id IN (3, 4, 5)
             AND VF.op_id =:OpId
             ORDER BY VF.fact_date_create ASC
         ');
        $oStmt->bindValue(':OpId', $this->getOpId(), PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get operation statistics id
     *
     * @return int
     */
    public function getOperationStatisticsType()
    {
        switch ($this->getOpTypeId()) {
            case ROperationType::TYPE_ODR:
            case ROperationType::TYPE_FID_AND_STIM:
                return self::OPERATION_STAT_TYPE_ODR;
            case ROperationType::TYPE_PRIME:
            case ROperationType::TYPE_SOR:
                return self::OPERATION_STAT_TYPE_PRIME;
            case ROperationType::TYPE_JEUX:
                if (in_array($this->getOperationMediaId(), array(ROperationMedias::R_OPERATION_MEDIA_WEB, ROperationMedias::DEFAULT_R_OPERATION_MEDIA, ROperationMedias::R_OPERATION_MEDIA_WEB_AND_PAPER), true)) {
                    return self::OPERATION_STAT_TYPE_JEUX_WEB;
                }
                //  Use temporary the sms
                if ($this->getOperationMediaId() === ROperationMedias::R_OPERATION_MEDIA_SMS) {
                    return self::OPERATION_STAT_TYPE_JEUX_SMS;
                }
                // Return default op type id
            default:
                return $this->getOpTypeId();
        }
    }

    /**
     * This function indicates if the statistics can be generated for current operation type
     * @return boolean
     */
    public function isOperationTypeValidForStatictics()
    {
        return (in_array($this->getOpTypeId(), array(ROperationType::TYPE_ODR, ROperationType::TYPE_PRIME, ROperationType::TYPE_SOR, ROperationType::TYPE_FID_AND_STIM))
            || ($this->getOpTypeId() === ROperationType::TYPE_JEUX
            && in_array($this->getOperationMediaId(), array(ROperationMedias::R_OPERATION_MEDIA_WEB, ROperationMedias::R_OPERATION_MEDIA_SMS, ROperationMedias::DEFAULT_R_OPERATION_MEDIA))));
    }

    /**
     * Check if exist physical bonus
     *
     * @return boolean
     */
    public function checkExistPhysicalBonus()
    {
        return (OperationPrimesQuery::create()
            ->filterByOpId($this->getOpId())
            ->filterByOperationPrimeRRewardTypeId(\RRewardTypes::REWARD_TYPE_PHYSIC)
            ->count() > 0);
    }

    /**
     * Display Financial Report
     *
     * @return boolean
     */
    public function displayFinancialReport()
    {
        $oOperationExt = OperationsExtQuery::create()->findOneByOpId($this->getOpId());
        return ($oOperationExt) ? ! $oOperationExt->getOptStatHideBilanFinancier() : true;
    }

    /**
     * Check weither the current operation has invoices in created status
     *
     * @return boolean
     */
    public function checkIfOperationHasCreatedStatusInvoices()
    {

        $oCreatedStatusInvoices = FacturesQuery::create()->filterByOpId($this->getOpId())->filterByFactStatusId(RFactureStatuts::CREATED, Criteria::EQUAL)->find();
        return $oCreatedStatusInvoices->count() ? true : false;
    }

    /**
     * Check weither the current operation has non edited invoices
     *
     * @return boolean
     */
    public function checkIfOperationHasNonEditedInvoices()
    {
        $oInvoices = FacturesQuery::create()->filterByOpId($this->getOpId())->filterByFactStatusId(array(RFactureStatuts::EDITED, RFactureStatuts::ENCAISSE, RFactureStatuts::ENCAISSE_PARTIEL), Criteria::NOT_IN)->find();
        return $oInvoices->count() ? false : true;
    }

    /**
     * @return array : array(error => [reward id => rewards labels])
     */
    public function getInvalidRewards()
    {
        $aInvalidRewards = array();

        // Get rewards which do not have reward type
        $oCriteria = new Criteria();
        $oCriteria->add('operation_primes.operation_prime_r_reward_type_id', null, Criteria::EQUAL);
        $aPrimes = $this->getOperationPrimess($oCriteria);
        if ($aPrimes) {
            foreach ($aPrimes as $oPrime) {
                $aInvalidRewards['rewards_do_not_have_reward_type'][$oPrime->getOpPrimeId()] = $oPrime->getOpPrimeLibelle();
            }
        }

         // Get physic rewards without expedition mode
        $oCriteria = new Criteria();
        $oCriteria->add('operation_primes.operation_prime_r_reward_type_id', \RRewardTypes::REWARD_TYPE_PHYSIC, Criteria::EQUAL);
        $oCriteria->add('operation_primes.operation_prime_r_reward_expedition_mode_id', null, Criteria::EQUAL);
        $aPrimes = $this->getOperationPrimess($oCriteria);
        if ($aPrimes) {
            $aRewardsLabels = array();
            foreach ($aPrimes as $oPrime) {
                $aRewardsLabels[$oPrime->getOpPrimeId()] = $oPrime->getOpPrimeLibelle();
            }
            if ($aRewardsLabels) {
                $aInvalidRewards['physic_rewards_without_expedition_mode'] = $aRewardsLabels;
            }
        }

        // Get physic rewards with expedition mode is transporter but no transported is undefined
        $oCriteria = new Criteria();
        $oCriteria->add('operation_primes.operation_prime_r_reward_type_id', \RRewardTypes::REWARD_TYPE_PHYSIC, Criteria::EQUAL);
        $oCriteria->add('operation_primes.operation_prime_r_reward_expedition_mode_id', 1, Criteria::EQUAL);
        $oCriteria->add('operation_primes.operation_prime_r_reward_transporter_id', null, Criteria::ISNULL);
        $aPrimes = $this->getOperationPrimess($oCriteria);
        if ($aPrimes) {
            $aRewardsLabels = array();
            foreach ($aPrimes as $oPrime) {
                $aRewardsLabels[$oPrime->getOpPrimeId()] = $oPrime->getOpPrimeLibelle();
            }
            if ($aRewardsLabels) {
                $aInvalidRewards['physic_rewards_with_expedition_mode_transporter_but_no_transported'] = $aRewardsLabels;
            }
        }
        return $aInvalidRewards;
    }

    /**
     * Check operation rewards
     *
     * @return \Operations
     */
    private function checkOperationRewards()
    {
        foreach ($this->getInvalidRewards() as $sError => $aRewardsLabels) {
            $this->addValidationFailed(sprintf($this->getZendTranslate()->translate($sError), join(', ', $aRewardsLabels)), 'erreur_rewards');
        }
        return $this;
    }

    /**
     * Check options required of operation type
     * @param array|null $aSelectedOptions
     * @param int $iNewOpStatusId
     * @return \Operations
     */
    public function checkOperationTypeRequiredOperationOptions(?array $aSelectedOptions, int $iNewOpStatusId) : Operations
    {
        $aROperationOptionsRequired = \ROperationTypeRequiredOptionsQuery::create()->retrieveOperationOptionsIdByOperationTypeId($this->getOpTypeId());
        $aOptionsRequiredNotExists = array_diff($aROperationOptionsRequired, $aSelectedOptions);
        foreach ($aOptionsRequiredNotExists as $iROperationOptionId) {
            $iStatusRelatedToOption = \ROperationStatusRequiredOptionsQuery::create()
             ->filterByROperationStatusRequiredOptionsROperationOptionId($iROperationOptionId)
             ->filterByROperationStatusRequiredOptionsROperationStatusOsId($iNewOpStatusId)->count();
            if (! $iStatusRelatedToOption) {
                continue;
            }
            
            $oROperationOption = \ROperationOptionsQuery::create()->findOneByROpOptionId($iROperationOptionId);
            // Retrieve child options recursively
            $aChildOptions = $this->retrieveChildOptionsRecursively($oROperationOption, $aSelectedOptions);
            if (! $aChildOptions) {
                $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('option_required_for_operation_type'), $oROperationOption->getROpOptionLibelle()), 'erreur_options' . $iROperationOptionId);
            }

            if ($oROperationOption->getROpOptionType() === \ROperationOptionsType::TYPE_RADIO_CAT && count($aChildOptions) > 1) {
                $this->addValidationFailed(sprintf($this->getZendTranslate()->translate('only_one_option_required_for_operation_type'), $oROperationOption->getROpOptionLibelle()), 'erreur_options' . $iROperationOptionId);
            }
        }
        return $this;
    }

    /**
     * Retrieve child options recursively
     * @param \ROperationOption $oROperationOption
     * @param array|null $aSelectedOptions
     * @return array : id of selected options matching with given child option
     */
    private function retrieveChildOptionsRecursively(\ROperationOptions $oROperationOption, ?array $aSelectedOptions)
    {
        $aChildOptions = array();
        // Check explicit children
        $aROperationOptionsChild = $oROperationOption->getChildrenOptions(false, true);
        foreach ($aROperationOptionsChild as $oROperationOptionChild) {
            $iChildOptionId = $oROperationOptionChild->getROpOptionId();
            if (in_array($iChildOptionId, $aSelectedOptions)) {
                $aChildOptions[] = $iChildOptionId;
            }
            $aChildOptions = array_merge($aChildOptions, $this->retrieveChildOptionsRecursively($oROperationOptionChild, $aSelectedOptions));
        }

        // Check implicit children for TYPE_RADIO_CAT or TYPE_CHECKBOX_CAT option
        $sROpOptionType = $oROperationOption->getROpOptionType();
        if (in_array($sROpOptionType, array(\ROperationOptionsType::TYPE_RADIO_CAT, \ROperationOptionsType::TYPE_CHECKBOX_CAT), true)) {
            $aROperationOptionsChild = ROperationOptionsQuery::create()
                ->filterByROpOptionParent($oROperationOption->getROpOptionId())
                ->filterByROpOptionType(array(\ROperationOptionsType::TYPE_RADIO_CAT, \ROperationOptionsType::TYPE_CHECKBOX_CAT))
                ->find();

            if ($aROperationOptionsChild) {
                foreach ($aROperationOptionsChild as $oROperationOptionChild) {
                    $iChildOptionId = $oROperationOptionChild->getROpOptionId();
                    if (in_array($iChildOptionId, $aSelectedOptions)) {
                        $aChildOptions[] = $iChildOptionId;
                    }
                    $aChildOptions = array_merge($aChildOptions, $this->retrieveChildOptionsRecursively($oROperationOptionChild, $aSelectedOptions));
                }
            }
        }
        return $aChildOptions;
    }

    /**
     * Save billing plan settings for current operation from given params
     *
     * @param array $aParams
     * @return void
     */
    public function saveBillingPlanSettings(array $aParams)
    {


        $oBillingPlanSettings = PlanFacturationParamsQuery::create()->findOneByOpId($this->getOpId());
        if (! $oBillingPlanSettings) {
            // If it's the first settings creation
            $oBillingPlanSettings = new PlanFacturationParams();
        }
        // Retrieving current invoicing settings
        $sCurrentDatePremFact = Phoenix_Data_Convert::formatdateFromSqlServer($oBillingPlanSettings->getPlanFactDatePremFact());
        $sCurrentDateDerFact = Phoenix_Data_Convert::formatdateFromSqlServer($oBillingPlanSettings->getPlanFactDateDerFact());
        $sCurrentFactPeriodeId = $oBillingPlanSettings->getPlanFactPeriodeId();
        $sCurrentFactPeriodeTypeId = $oBillingPlanSettings->getPlanFactPeriodeTypeId();
        $bGenerateFacts = false;

        // If one of the following fields has changed, then we regenrate the invoice plans
        $sFirstInvoiceDate = $aParams['plan_fact_date_prem_fact'];
        $sLastInvoiceDate = $aParams['plan_fact_date_der_fact'];
        $sInvoiceRangeId = $aParams['plan_fact_periode_id'];
        if (($sCurrentDatePremFact != $sFirstInvoiceDate) || ($sCurrentDateDerFact != $sLastInvoiceDate) || ($sCurrentFactPeriodeId != $sInvoiceRangeId) || ($sCurrentFactPeriodeTypeId != $aParams['plan_fact_periode_type_id'])) {
            $bGenerateFacts = true;
        }

        $aParams['op_id'] = $this->getOpId();
        $aParams['plan_facturation_params_auto_display_vat'] = ! empty($aParams['plan_facturation_params_auto_display_vat']) ? 1 : 0;

        $oBillingPlanSettings->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

        if ($oBillingPlanSettings->validate()) {
            if ($bGenerateFacts) {
                // Checking that no invoice is in created status while other predecessors invoices are validated, edited or locked
                if ($oBillingPlanSettings->checkPredecessorBills()) {
                    $oBillingPlanSettings->cleanBillingPlansAndBills();
                    $oBillingPlanSettings->genPlanFactu();
                } else {
                    return array(
                        'plan_fact_date_prem_fact' => array(
                            sprintf(Zend_Registry::get('Zend_Translate')->translate('Vous devez valider la facture antérieure à la dernière facture bloquée, validée ou éditée avant de régénérer le plan de facturation'))
                        ),
                    );
                }
            }
            $oBillingPlanSettings->save();
            return $oBillingPlanSettings;
        }
        return $oBillingPlanSettings->getValidationFailures();
    }

    /**
     * Create an operation entity from given data
     *
     * @param array $aData
     * @return Operations\array
     */
    public static function createOperationFromData(array $aData)
    {
        $oOperation = new Operations();
        $aOperationDates = array(
            'op_stamp_start' => $aData['op_stamp_start'] ?? null,
            'op_stamp_end' => $aData['op_stamp_end'] ?? null,
            'op_dateConso_start' => $aData['op_dateConso_start'] ??  null,
            'op_dateConso_end' => $aData['op_dateConso_end'] ??  null,
            'op_datePoste_end' => $aData['op_datePoste_end'] ?? null,
            'op_date_archivage_end' => $aData['op_date_archivage_end'] ?? null,
        );

        $aData['op_stamp_start'] = isset($aData['op_stamp_start']) ? Phoenix_Data_Convert::FormatDateForMysql($aData['op_stamp_start']) : null;
        $aData['op_stamp_end'] = isset($aData['op_stamp_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aData['op_stamp_end']) : null;
        $aData['op_dateConso_start'] = isset($aData['op_dateConso_start']) ? Phoenix_Data_Convert::FormatDateForMysql($aData['op_dateConso_start']) : null;
        $aData['op_dateConso_end'] = isset($aData['op_dateConso_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aData['op_dateConso_end']) : null;
        $aData['op_datePoste_end'] = isset($aData['op_datePoste_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aData['op_datePoste_end']) : null;
        $aData['op_date_archivage_end'] = isset($aData['op_date_archivage_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aData['op_date_archivage_end']) : null;

        // Handle client label
        if (! empty($aData['cl_libelle'])) {
            $oClient = ClientsQuery::create()->findOneByClLibelle($aData['cl_libelle']);
            if (! $oClient instanceof Clients) {
                return array(
                    'cl_libelle' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_cl_libelle_not_valid'))
                    ),
                );
            }
            $aData['op_cl_id'] = $oClient->getClId();
        }

        // Handle operation type label
        if (! empty($aData['op_type_libelle'])) {
            $oROperationType = ROperationTypeQuery::create()->findOneByOtLibelle($aData['op_type_libelle']);
            if (! $oROperationType instanceof \ROperationType) {
                return array(
                    'op_type_libelle' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_op_type_libelle_not_valid'))
                    ),
                );
            }
            $aData['op_type_id'] = $oROperationType->getOtId();
            $aData['op_act_id'] = $oROperationType->getActId();
        }

        // Handle operation type label
        if (! empty($aData['op_subtype_libelle'])) {
            $oROperationTypeSubQuery = ROperationTypeSubQuery::create();
            if (! empty($aData['op_type_id'])) {
                $oROperationTypeSubQuery->filterByOstOtId($aData['op_type_id']);
            }

            $oROperationTypeSub = $oROperationTypeSubQuery->findOneByOstLibelle($aData['op_subtype_libelle']);
            if (! $oROperationTypeSub instanceof \ROperationTypeSub) {
                return array(
                    'op_subtype_libelle' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_op_subtype_libelle_not_valid'))
                    ),
                );
            }
            $aData['op_subtype_id'] = $oROperationTypeSub->getOstId();
        }

        // Handle operation universe label
        if (! empty($aData['operation_universe_label'])) {
            $oROperationUniverse = ROperationUniversesQuery::create()->findOneByROperationUniverseLabel($aData['operation_universe_label']);
            if (! $oROperationUniverse instanceof \ROperationUniverses) {
                return array(
                    'operation_universe_label' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_operation_universe_label_not_valid'))
                    ),
                );
            }
            $aData['operation_universe_id'] = $oROperationUniverse->getROperationUniverseId();
        }

        // Handle operation media label
        if (! empty($aData['operation_media_label'])) {
            $oROperationMedia = ROperationMediasQuery::create()->findOneByROperationMediaLabel($aData['operation_media_label']);
            if (! $oROperationMedia instanceof \ROperationMedias) {
                return array(
                    'operation_media_label' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_operation_media_label_not_valid'))
                    ),
                );
            }
            $aData['operation_media_id'] = $oROperationMedia->getROperationMediaId();
        }

        if (isset($aData['op_cl_id'])) {
                // Default value for the KAM contact must be the contact defined in the client card on the "Sales Manager required" dropdown list
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aDcId = $oZendDbSelect->from('clients', array('cl_dc_id'))
                ->joinLeft('users', 'clients.cl_dc_id = users.user_id', array('user_id'))
                ->where('users.r_user_type_id  = ?', 2)
                ->where('clients.cl_id = ?', $aData['op_cl_id'])
                ->query()->fetch();
            if (isset($aDcId['cl_dc_id'])) {
                $aData['op_dc_id'] = $aDcId['cl_dc_id'];
            }

            // Default value for the Billing contact must be the contact defined in the client card on the Default responsible for billing   dropdown list
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

            $aCtFacturation = $oZendDbSelect->from('clients', array('cl_ct_facturation'))
                ->joinLeft('contacts', 'clients.cl_ct_facturation = contacts.ct_id', array('ct_id'))
                ->where('contacts.actif  = ?', 1)
                ->where('clients.cl_id = ?', $aData['op_cl_id'])
                ->query()->fetch();

            if (isset($aCtFacturation['cl_ct_facturation'])) {
                $aData['op_ct_fact_id'] = $aCtFacturation['cl_ct_facturation'];
            }
        }

        $oOperation->fromArray($aData, BasePeer::TYPE_FIELDNAME);

        if ($oOperation->validateOperationDatesFormat($aOperationDates) && $oOperation->validate()) {
                // Adding options
            if (isset($aData['operation_option'])) {
                foreach ($aData['operation_option'] as $iOperationOptionId) {
                    $oLnkOperationOption = new LnkOperationOption();
                    $oLnkOperationOption->setOpId($oOperation->getOpId())
                        ->setOpOptId($iOperationOptionId)
                        ->setIsLinked(true);
                    $oOperation->addLnkOperationOption($oLnkOperationOption);
                }
            }

             // Find template
            $oRTypesDevisService = new Phoenix_Administration_RTypesDevis_Service_RTypesDevisService();
            $aIdentifiedTemplateData = $oRTypesDevisService->identifyTemplateWithOneUniverseAndOneMedia($oOperation->getOpSubtypeId(), $oOperation->getOperationUniverseId(), $oOperation->getOperationMediaId());
            $oTemplate = (isset($aIdentifiedTemplateData['template']) && $aIdentifiedTemplateData['template'] instanceof \ROperationTypeSubTpl) ? $aIdentifiedTemplateData['template'] : null;

            $oOperation->save();

            if ($oTemplate instanceof \ROperationTypeSubTpl) {
                $oOperation->processOperationSubTypeTemplating($oTemplate);
            }

            $oOperation->processOperationOptionsTemplating();
            $oOperation->addPrestationArhivage();
            return $oOperation;
        }
        return $oOperation->getValidationFailures();
    }
}

// Operations
