<?php

class OperationsQuery extends BaseOperationsQuery
{

    const COMPLETE_LISTING_MAX_LINES = 50000;

    /**
     * @param string $oSelect containing the filters to be applied
     * @return Operations
     */
    public static function getCompleteListing($oSelect)
    {
        $aData = $oSelect->query()->fetchAll();
        $aFields = array_keys($aData[0]);

        if (in_array('Date de Création', $aFields)) {
            // Format date_create to d/m/Y format
            foreach ($aData as &$aRow) {
                $aRow['Date de Création'] = Phoenix_Data_Convert::formatDateFromSqlServer2($aRow['Date de Création']);
            }
        }

        // If the number of lines is reduced, the options are displayed in addition, if there are too many lines, it takes too much time to calculate
        if (count($aData) < self::COMPLETE_LISTING_MAX_LINES) {
            $aListOptions = array();

            // Retrieve every possible option
            $oList = ROperationOptionsQuery::create()->findByROpOptionType(ROperationOptionsType::TYPE_CHILDREN);
            foreach ($oList as $oElement) {
                if ($oElement instanceof ROperationOptions) {
                    // Retrieve parent
                    $aListOptions[] = array(
                        'id' => $oElement->getROpOptionId(),
                        'test' => $oElement->getParent()->getROpOptionLibelle(),
                        'libelle' => $oElement->getParent()->getROpOptionLibelle() . '-' . $oElement->getROpOptionLibelle()
                    );

                    // A header column is added for each option
                    $aFields[] = $oElement->getParent()->getROpOptionLibelle() . '-' . $oElement->getROpOptionLibelle();
                }
            }

            // For each operation (aData line), we will update the options
            foreach ($aData as $sId => $aLine) {
                $aActiveOptions = array();
                $sOpId = $aLine['op_id'];

                // We retrieve the identifiers of the active options for this operation
                $oOptions = LnkOperationOptionQuery::create()->filterByIsLinked(true)->findByOpId($sOpId);
                foreach ($oOptions as $oOption) {
                    if ($oOption instanceof LnkOperationOption) {
                        $aActiveOptions[] = $oOption->getOpOptId();
                    }
                }

                // For each option, it is indicated whether it is active or not
                foreach ($aListOptions as $aOption) {
                    $sValue = in_array($aOption['id'], $aActiveOptions) ? 1 : 0;

                    $aData[$sId][$aOption['libelle']] = $sValue;
                }
            }
        }
        $aFieldHeaders = array_combine($aFields, $aFields);

        return new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Array($aData, $aFieldHeaders));
    }

    /**
     * Generates an operation object with the filtered services according to the desired categories
     *
     * @param string $sOpId
     * @param array $aCategoriesId
     * @return Operations
     */
    public function getOperationWithPrestationsFromPrestationCategories($sOpId, $aCategoriesId)
    {
        $aCond = array();

        $oOperationsQuery = OperationsQuery::create()->filterByPrimaryKey($sOpId)->useOperationRubriquesQuery(null, Criteria::JOIN);
        $oOperationsQuery = $oOperationsQuery->useOperationPrestationsQuery(null, Criteria::JOIN)->filterByOpPrestNpa(0);
        $oOperationsQuery = $oOperationsQuery->enduse()->useRTvaTypeQuery()->endUse()->endUse()
            ->with('OperationRubriques')
            ->with('OperationPrestations')
            ->orderBy('RTvaType.RTvaRubOrder')
            ->orderBy('OperationRubriques.OpRubriqueOrder')
            ->orderBy('OperationPrestations.OpPrestOrder');

        // Construction of service search filters according to category
        foreach ($aCategoriesId as $sCategoryId) {
            switch ($sCategoryId) {
                case RPrestationCategories::FF:
                    $oOperationsQuery = $oOperationsQuery->where('OperationRubriques.RRubTypeId = ?', RRubriquesType::FF);
                    break;
                case RPrestationCategories::FV:
                    $oOperationsQuery->condition('cond2', 'OperationRubriques.RRubTypeId = ?', RRubriquesType::FV);
                    $oOperationsQuery->condition('cond3', 'OperationRubriques.OpRRubriqueId != ?', 34);
                    $oOperationsQuery->condition('cond4', 'OperationPrestations.OpPrestCodeComptable NOT LIKE ?', '467%');
                    $oOperationsQuery = $oOperationsQuery->where(array('cond2', 'cond3', 'cond4'), self::LOGICAL_AND);

                    break;
                case RPrestationCategories::REMB:
                    $oOperationsQuery = $oOperationsQuery->where('OperationPrestations.OpPrestCodeComptable LIKE ?', '467%');
                    break;
                case RPrestationCategories::DOTATION:
                    $oOperationsQuery = $oOperationsQuery->where('OperationRubriques.OpRRubriqueId = ?', 34);
                    break;
                case RPrestationCategories::ADF:
                    $oOperationsQuery = $oOperationsQuery->where('OperationPrestations.OpAdf = ?', '1');
                    break;
                case RPrestationCategories::NOTE_CREDIT:
                    $oOperationsQuery = $oOperationsQuery->where('OperationPrestations.OpPrestId IN ?', array(175, 176, 442, 444, 265, 268, 269));
                    break;
                case RPrestationCategories::ANNUL:
                    break;
            }
            if (count($aCategoriesId) > 1) {
                $oOperationsQuery = $oOperationsQuery->_or();
            }
        }

        OperationsPeer::clearInstancePool();
        $oOperation = $oOperationsQuery->find();
        if (isset($oOperation[0])) {
            return $oOperation[0];
        } else {
            return null;
        }
    }

    /**
     * Retrieve the operations to use in staticstics cron
     *
     * @return \PropelObjectCollection
     */
    public function retrieveOperationsForStatistics()
    {
        $aConditions = array('cond1');
        $oOperationsQuery = OperationsQuery::create()
            ->where('actif = ?', 1, PDO::PARAM_INT)
            ->where('op_status_id = ?', Operations::STATUS_ACCEPTE, PDO::PARAM_INT)
            ->where('op_dateConso_start <= NOW()')
            ->where('op_stamp_end >= NOW()')
            ->condition('cond1', 'op_freq_stat_mail_id = ? ', RFreqStatMail::QUOTIDIEN, PDO::PARAM_INT);
        if (date('w') == 1) {
            $oOperationsQuery->condition('cond2', 'op_freq_stat_mail_id = ?', RFreqStatMail::HEBDOMADAIRE, PDO::PARAM_INT);
            $aConditions[] = 'cond2';
        }
        if (date('t') == date('j')) {
            $oOperationsQuery->condition('cond3', 'op_freq_stat_mail_id = ?', RFreqStatMail::MENSUEL, PDO::PARAM_INT);
            $aConditions[] = 'cond3';
        }

        return $oOperationsQuery->where($aConditions, 'OR')->find();
    }


    /**
     * Get operations according to conditions
     * @return array
     */
    public function getOperationsForAutomaticClosure() : array
    {
        $sOperationsQuery = '
            SELECT o.op_id, o.op_status_id
            FROM operations o 
            INNER JOIN factures AS f ON f.op_id = o.op_id 
            WHERE (
                IF((
                    SELECT COUNT(*) 
                    FROM operation_prestations AS op 
                    WHERE op.op_prest_couts_valides = 0 
                    AND op.op_id = o.op_id 
                    GROUP BY op.op_id
                ) > 0, 0, 1 ) > 0
            ) 
            AND (
                IF((
                    SELECT COUNT(*) 
                    FROM factures AS fact 
                    WHERE (
                        fact.r_fact_type_id NOT IN (9, 10, 11, 12) 
                        OR fact.fact_status_id NOT IN (' . Operations::STATUS_REFUS . ', ' . Operations::STATUS_CLOTURE . ', ' . Operations::STATUS_EN_VALIDATION . ')
                    ) 
                    AND fact.op_id = o.op_id 
                    GROUP BY fact.op_id
                ) > 0, 0, 1 ) > 0
            ) 
            AND o.op_status_id = ' . Operations::STATUS_SOLDE . ' 
            GROUP BY o.op_id
        ';
        $oStatement = Propel::getConnection()->prepare($sOperationsQuery);
        $oStatement->execute();
        return $oStatement->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * Returns the list of old dc users that are not any more Dcs in the users table
     *
     * @return array
     */
    public function getOldDcUsers()
    {
        return self::create()->filterByOpDcId(null, Criteria::NOT_EQUAL)
            ->useUserDCQuery()
            ->filterByRUserTypeId(RUserTypes::KEY_ACCOUNT_MANAGER_USER_TYPE, Criteria::NOT_EQUAL)
            ->_or()
            ->filterByRUserTypeId(null, Criteria::EQUAL)
            ->endUse()
            ->select('OpDcId')
            ->distinct()
            ->find()
            ->toArray();
    }

    /**
     * Returns the list of old cp users that are not any more Cps in the users table
     *
     * @return array
     */
    public function getOldCpUsers()
    {
        return self::create()->filterByOpDcId(null, Criteria::NOT_EQUAL)
            ->useUserCPQuery()
            ->filterByRUserTypeId(RUserTypes::PROJECT_MANAGER_USER_TYPE, Criteria::NOT_EQUAL)
            ->_or()
            ->filterByRUserTypeId(null, Criteria::EQUAL)
            ->endUse()
            ->select('OpCpId')
            ->distinct()
            ->find()
            ->toArray();
    }

    /**
     * Returns the list of old cdp users that are not any more Cps in the users table
     *
     * @return array
     */
    public function getOldCdpUsers()
    {
        return self::create()
            ->useUserCdpQuery()
            ->filterByRUserTypeId(RUserTypes::PROJECT_MANAGER_USER_TYPE, Criteria::NOT_EQUAL)
            ->_or()
            ->filterByRUserTypeId(null, Criteria::EQUAL)
            ->endUse()
            ->select('OpCdpId')
            ->distinct()
            ->find()
            ->toArray();
    }

    /**
     * Returns an instance of operations related to the given operationId
     *
     * @param int $iOperationId
     * @return \Operations
     * @throws \LogicException
     */
    public function getOperationByOpId(int $iOperationId) : \Operations
    {
        if (($oOperation = OperationsQuery::create()->findPk($iOperationId)) instanceof \Operations) {
            return $oOperation;
        }

        throw new \LogicException('No valid operation was found for the given operation id "' . $iOperationId . '"');
    }

    /**
     * @param int $iOperationId
     * @return array
     */
    public function getOperationCountriesSelectListData(int $iOperationId) : array
    {
        $sCountriesQuery = 'SELECT rc.r_country_id as value, rc.r_country_name as label
            FROM r_countries rc
            INNER JOIN lnk_operation_country loc ON loc.lnk_op_country_id = rc.r_country_id
            WHERE loc.op_id = :OpId
            ORDER BY rc.r_country_name';

        $oStatement = Propel::getConnection()->prepare($sCountriesQuery);
        $oStatement->bindValue(':OpId', $iOperationId, PDO::PARAM_INT);
        $oStatement->execute();
        return $oStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $iOperationId
     * @return array
     */
    public function getOperationCurrenciesSelectListData(int $iOperationId) : array
    {
        $aOperationCountriesIds = LnkOperationCountryQuery::create()->select('LnkOpCountryId')
            ->filterByOpId($iOperationId)
            ->find()
            ->toArray();

        if ($aOperationCountriesIds) {
            $sCurrenciesQuery = '
                SELECT r_currency_id AS value, r_currency_label AS label
                FROM r_currencies
                WHERE r_currency_id IN (
                    SELECT DISTINCT(r_country_r_currency_id)
                    FROM r_countries
                    WHERE r_country_id IN (' . implode(', ', $aOperationCountriesIds) . ')
                )
                AND r_currency_actif = 1
            order by r_currency_label';
            return Propel::getConnection()->query($sCurrenciesQuery)->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    /**
     * @param array $aOperationsIds
     * @return PDOStatement
     */
    public function getSimpleOperationsExportData(array $aOperationsIds = null) : PDOStatement
    {
        $bEndPosteDateIsAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_POSTE_DATE);
        $bConsumeringDatesAreAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CONSUMERING_DATES);
        $bEndDateIsAllowed = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_DATE);

        $aFields = array(
            'op_id' => 'Id Opération',
            'op_number' => 'N° Opération',
            'op_label' => 'Intitulé Opération',
            'op_client_label' => 'Client',
            'op_nb_contracts' => 'Nb contrats',
            'op_universe_label' => 'Univers',
            'op_media_label' => 'Média',
            'op_classification_label' => 'Classification',
            'op_act_label' => 'Métier',
            'op_type_label' => 'Catégorie',
            'op_subtype_label' => 'Mécanique',
            'op_status' => 'Statut',
            'op_sales_director' => 'Directeur de Clientèle',
            'op_manager' => 'Gestionnaire',
            'op_project_manager' => 'Chef de projet',
            'op_start_date' => 'Date Début De Gestion',
        );

        if ($bConsumeringDatesAreAllowed) {
            $aFields['op_start_consuming_date'] = 'Date Début Consommation';
            $aFields['op_end_consuming_date'] = 'Date Fin Consommation';
        }
        if ($bEndPosteDateIsAllowed) {
            $aFields['op_end_post_date'] = 'Date Fin Postale';
        }

        if ($bEndDateIsAllowed) {
            $aFields['op_end_date'] = 'Date Fin de Gestion';
        }

        $aFields += array(
            'op_end_archiving_date' => 'Date Fin archivage',
            'op_accepted_date' => 'Date initiale d\'acceptation du devis',
            'op_balanced_date' => 'Date de solde du devis',
            'op_rejected_date' => 'Date de refus du devis',
            'op_closed_date' => 'Date de clôture du devis',
            'op_date_create' => 'Date de création du devis',
            'op_first_invoice_date' => 'Date de Première Facture',
            'op_last_invoice_date' => 'Date de Dernière Facture',
            'op_parent_op_number' => 'Opération d\'origine',
            'op_original_template' => 'Template d\'origine',
            'op_project_type_label' => 'Complexité projet',
            'op_conversion_rate' => 'Taux de conversion estimé du devis',
            'op_mail_processing_time' => 'Délai de traitement du courrier',
            'op_invoices_vat_amount' => 'Montant facturé TTC',
            'op_estimated_amount_including_vat' => 'Montant estimé TTC',
            'op_estimated_amount_turnover' => 'Montant CA estimé HT',
        );

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::REQUEST_FOR_FUNDS)) {
            $aFields += array(
                'op_invoiced_funds' => 'Fonds facturés',
                'op_received_funds' => 'Fonds encaissés',
            );
        }

        $sQuery = 'SELECT';
        foreach ($aFields as $sSelect => $sAlias) {
            $sQuery .= ' ' . $sSelect . ' AS \'' . addslashes($sAlias) . '\',';
        }
        $sQuery = rtrim($sQuery, ',') . ' FROM View_Operation_Listing';
        if (is_array($aOperationsIds)) {
            $sQuery .= ' WHERE op_id IN("' . join('","', $aOperationsIds) . '")';
        }

        $oConnection = Propel::getConnection();
        $oStatement = $oConnection->prepare('SET sql_mode = \'\'');
        $oStatement->execute();
        $oConnection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $oStatement = $oConnection->prepare($sQuery);
        $oStatement->execute();
        return $oStatement;
    }

    /**
     * @param array $aOperationsIds
     * @return ArrayObject
     */
    public function getFullOperationsExportData(array $aOperationsIds = null) : ArrayObject
    {
        // Retrieve all options
        $oStatement = Propel::getConnection()->prepare('SELECT
            child_option.r_op_option_id,
            CONCAT(parent_option.r_op_option_libelle, "-", child_option.r_op_option_libelle) AS option_label
            FROM r_operation_options child_option
            INNER JOIN r_operation_options parent_option ON child_option.r_op_option_parent = parent_option.r_op_option_id
            WHERE child_option.r_op_option_type = 1
            AND child_option.actif = 1
            ORDER BY child_option.r_op_option_id ASC
        ');
        $oStatement->execute();

        $aResult = $aOperationsInfos = $aAllOptions = array();
        while ($aData = $oStatement->fetch(PDO::FETCH_ASSOC)) {
            $aAllOptions[$aData['r_op_option_id']] = $aData['option_label'];
        }

        $oStatement = $this->getSimpleOperationsExportData($aOperationsIds);

        // Default funds data if allowed
        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::REQUEST_FOR_FUNDS)) {
            if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
                throw new \LogicException('The external "Arthur" connection is disabled, unable to provide "Fund rainsing" information');
            }
            $aDefaultFundsData = array('Fonds utilisés' => 0, 'Fonds disponibles' => 0, 'Fonds requis' => 0);
        } else {
            $aDefaultFundsData = array();
        }

        // Fetch options by operations
        while ($aData = $oStatement->fetch(PDO::FETCH_ASSOC)) {
            $aOperationsInfos[(int) current($aData)] = $aData + $aDefaultFundsData + array_fill_keys($aAllOptions, 0);
        }
        $aOperationIds = array_keys($aOperationsInfos);

        // Get options
        $oOperationsActiveOptionsStatement = Propel::getConnection()->prepare('
            SELECT
                operation_options.op_id AS operation_id,
                child_option.r_op_option_id,
                CONCAT(parent_option.r_op_option_libelle, "-", child_option.r_op_option_libelle) AS option_label,
                operation_options.is_linked AS option_activity
            FROM r_operation_options child_option
            INNER JOIN r_operation_options parent_option ON child_option.r_op_option_parent = parent_option.r_op_option_id
            INNER JOIN lnk_operation_option operation_options ON child_option.r_op_option_id = operation_options.op_opt_id
            WHERE child_option.r_op_option_type = 1
            AND operation_options.op_id IN(' . join(',', $aOperationIds) . ')
            AND child_option.actif = 1
            ORDER BY child_option.r_op_option_id ASC
        ');

        $oOperationsActiveOptionsStatement->execute();
        while ($aOperationOption = $oOperationsActiveOptionsStatement->fetch(PDO::FETCH_ASSOC)) {
            $aOperationsInfos[(string) $aOperationOption['operation_id']][$aOperationOption['option_label']] = $aOperationOption['option_activity'];
        }

        // Get raised funds datas for operations if allowed
        if ($aDefaultFundsData) {
            foreach (Phoenix_ExternalConnection_Arthur::getInstance()->getUsedAndRequiredFundsRaisingByOperationIds($aOperationIds) as $iOperationId => $aUsedFundRaising) {
                $aOperationsInfos[$iOperationId]['Fonds utilisés'] = (float) $aUsedFundRaising['ADF_Utilise'];
                $aOperationsInfos[$iOperationId]['Fonds disponibles'] = (float) $aOperationsInfos[$iOperationId]['Fonds encaissés'] - $aOperationsInfos[$iOperationId]['Fonds utilisés'];
                $aOperationsInfos[$iOperationId]['Fonds requis'] = (float) $aUsedFundRaising['op_required_funds'];
            }
        }
        return new \ArrayObject($aOperationsInfos);
    }

    /**
     * @return PDOStatement
     */
    public function getSalesReportData() : PDOStatement
    {
        $oConnection = Propel::getConnection();
        $oStatement = $oConnection->prepare('SET sql_mode = \'\'');
        $oStatement->execute();

        $oConnection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $oStatement = $oConnection->prepare('
            SELECT op_number AS \'N° OP\',
            CONCAT(ot_libelle,\' - \',ost_libelle) AS \'Type Opération\',
            o.op_libelle AS \'Libellé Opération\',
            date_first_acceptation AS \'Date devis\',
            cl_libelle AS \'Libellé Client\',
            op_r_prest_id AS \'Numéro de prestation\',
            op_prest_libelle AS \'Libellé des Prestation\',
            op_prest_pv AS \'Prix\',
            op_prest_mestim AS \'Montant Estimé\',
            op_prest_mestim - op_prest_ciestim * op_prest_qestim AS \'Marge Estimée\',
            op_prest_mreel AS \'Montant Réalisé\',
            op_prest_mreel - op_prest_cireel * op_prest_qreel AS \'Marge Réalisée\',
            CASE op_prest_off
             WHEN 0 THEN \'Non\'
             WHEN 1 THEN \'Oui\'
            END AS \'Prestation offerte\',
            CONCAT(dc.user_nom,\' \',dc.user_prenom) AS \'Directeur de clientèle\'
            FROM operations o
            LEFT JOIN clients c ON c.cl_id = o.op_cl_id
            LEFT JOIN operation_prestations op ON op.op_id = o.op_id
            LEFT JOIN operation_statuts os ON o.op_id = os.op_id
            LEFT JOIN View_Operation_First_Acceptation vod ON vod.op_id = o.op_id
            LEFT JOIN r_operation_type rot ON rot.ot_id = o.op_type_id
            LEFT JOIN r_operation_type_sub rots ON rots.ost_id = o.op_subtype_id
            LEFT JOIN users dc ON dc.user_id = o.op_dc_id AND r_user_type_id = 2
            WHERE (op_r_prest_id IN (742,743,744,745,746,747,754,756) OR (op_type_id = 5 AND op_subtype_id = 37))
            AND YEAR(date_first_acceptation) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_first_acceptation) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)
            GROUP BY op_number,op_r_prest_id
        ');
        $oStatement->execute();
        return $oStatement;
    }

    /**
     * Returns an indexed array of the cashed and Available funds raising for each operation
     *
     * @param  array $aOperationIds
     * @return array
     * @throws \InvalidArgumentExceptions
     */
    public function getUsedAndAvailableFundsRaisingByOperationIds(array $aOperationIds)
    {
        if ($aOperationIds) {
            $aUsedFund = Phoenix_ExternalConnection_Arthur::getInstance()->getUsedAndRequiredFundsRaisingByOperationIds($aOperationIds);

            // Retrieving cashed funds raising
            $aCashedAdf = Propel::getConnection()
                ->query("SELECT op_id, ADF_Encaisse FROM View_Operation_ADF_Encaisse WHERE op_id IN (" . implode(', ', $aOperationIds) . ")")
                ->fetchALL(PDO::FETCH_GROUP);

            $aUsedAndAvailableAdf = array();

            // Building an indexed array of the cashed and available adf by operation
            foreach ($aOperationIds as $iOperationId) {
                $aUsedAndAvailableAdf[$iOperationId]['iUsedAdf'] = (isset($aUsedFund[$iOperationId][0]['ADF_Utilise'])) ? $aUsedFund[$iOperationId][0]['ADF_Utilise'] : 0;
                $aUsedAndAvailableAdf[$iOperationId]['iAvailableAdf'] = $aCashedAdf[$iOperationId][0]['ADF_Encaisse'] - $aUsedAndAvailableAdf[$iOperationId]['iUsedAdf'];
            }

            return $aUsedAndAvailableAdf;
        }
        throw new \InvalidArgumentExceptions('Argument "$aOperationIds" is empty');
    }

    /**
     * @param \DateTime $oStartDate
     * @param \DateTime $oEndDate
     * @return array
     */
    public function getOperationStatusExportData(\DateTime $oStartDate, \DateTime $oEndDate) : array
    {
        // Retrieve statuses data
        $oStatement = Propel::getConnection()->prepare('SELECT os_id, os_libelle FROM r_operation_status WHERE actif = 1 ORDER BY os_libelle');
        $oStatement->execute();

        $aStatusesData = array();
        while ($aStatusData = $oStatement->fetch(PDO::FETCH_ASSOC)) {
            $aStatusesData[(int) $aStatusData['os_id']] = $aStatusData['os_libelle'];
        }

        // Fetch operation that have change their status during the given date range
        $sStartDate = $oStartDate->format('Y-m-d H:i:s');
        $sEndDate = $oEndDate->format('Y-m-d H:i:s');
        $oStatement = Propel::getConnection()->prepare($sQuery = '
            SELECT
                op_id,

                CASE WHEN date_ongoing BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '"
                THEN date_ongoing 
                ELSE NULL 
                END AS date_ongoing,

                CASE WHEN date_accepted BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '"
                THEN date_accepted 
                ELSE NULL
                END AS date_accepted,

                CASE WHEN date_rejected BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '"
                THEN date_rejected 
                ELSE NULL
                END AS date_rejected,

                CASE WHEN date_closed BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '"
                THEN date_closed 
                ELSE NULL
                END AS date_closed,

                CASE WHEN date_balanced BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '"
                THEN date_balanced 
                ELSE NULL
                END AS date_balanced  

            FROM View_Operation_Dates
            WHERE (date_ongoing BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '")
            OR (date_accepted BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '")
            OR (date_rejected BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '")
            OR (date_closed BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '")
            OR (date_balanced BETWEEN "' . $sStartDate . '" AND "' . $sEndDate . '")
        ');
        $oStatement->execute();


        $aOperationsIds = array();
        while ($aOperationStatusData = $oStatement->fetch(PDO::FETCH_ASSOC)) {
            // Get the status id for the given date range
            $iOperationId = (int) $aOperationStatusData['op_id'];
            unset($aOperationStatusData['op_id']);
            $aOperationsIds[$iOperationId] = array();
            foreach ($aOperationStatusData as $sKey => $sValue) {
                if ($sValue !== null) {
                    $aOperationsIds[$iOperationId][$sKey] = $sValue;
                }
            }
        }

        $oStatement = Propel::getConnection()->prepare($sQuery = '  
            SELECT 
                `operations`.op_id,
                `operations`.`op_number`, 
                `operations`.`op_libelle`, 
                `voea`.`montant_total_estime_ca` AS `Montant CA estimé HT`, 
                `voea`.`montant_total_estime_ttc` AS `Montant estimé TTC`, 
                `r_operation_status`.`os_libelle`,
                `clients`.`cl_libelle`, 
                `dc`.`user_id` AS `dc_id`,
                `dc`.`user_nom` AS
                `dc_nom`, 
                `dc`.`user_prenom` AS `dc_prenom`, 
                `cp`.`user_nom` AS `cp_nom`, 
                `cp`.`user_prenom` AS `cp_prenom`, 
                `r_custom_activites`.`act_libelle` AS `business`, 
                `r_operation_type`.`ot_libelle` AS `category`, 
                `r_operation_type_sub`.`ost_libelle` AS `mecanic`, 
                `r_project_type`.`r_project_type_libelle` AS `project_complexity`, 
                `r_operation_medias`.`r_operation_media_label` AS `media`, 
                `r_operation_universes`.`r_operation_universe_label` AS `universe`
            FROM `operations`
            LEFT JOIN `view_operation_estimated_amounts` AS `voea` ON voea.op_id=operations.op_id
            INNER JOIN `r_operation_status` ON operations.op_status_id=r_operation_status.os_id
            LEFT JOIN `clients` ON operations.op_cl_id=clients.cl_id
            LEFT JOIN `users` AS `dc` ON operations.op_dc_id=dc.user_id
            LEFT JOIN `users` AS `cp` ON operations.op_cp_id=cp.user_id
            LEFT JOIN `r_custom_activites` ON operations.op_act_id=r_custom_activites.act_id
            LEFT JOIN `r_operation_type` ON operations.op_type_id=r_operation_type.ot_id
            LEFT JOIN `r_operation_type_sub` ON operations.op_subtype_id=r_operation_type_sub.ost_id
            LEFT JOIN `r_project_type` ON operations.op_project_type_id=r_project_type.r_project_type_id
            LEFT JOIN `r_operation_medias` ON operations.operation_media_id=r_operation_medias.r_operation_media_id
            LEFT JOIN `r_operation_universes` ON operations.operation_universe_id=r_operation_universes.r_operation_universe_id 
            WHERE operations.op_id IN(' . join(',', array_keys($aOperationsIds)) . ')
            ORDER BY `dc_id` ASC
        ');
        $oStatement->execute();

        $aStatusDateIds = array(
            'date_ongoing' => Operations::STATUS_EN_COURS,
            'date_accepted' => Operations::STATUS_ACCEPTE,
            'date_rejected' => Operations::STATUS_REFUS,
            'date_closed' => Operations::STATUS_CLOTURE,
            'date_balanced' => Operations::STATUS_SOLDE,
        );


        $aReturn = array();
        while ($aOperationData = $oStatement->fetch(PDO::FETCH_ASSOC)) {
            // Retrieve operation status date data
            $iOperationId = (int) $aOperationData['op_id'];
            foreach ($aOperationsIds[$iOperationId] as $sStatusDateKey => $sStatusDate) {
                // Retrieve status id
                $iStatusId = $aStatusDateIds[$sStatusDateKey];
                $sStatusLabel = $aStatusesData[$iStatusId];

                $aReturn[$sStatusLabel][] = array_merge($aOperationData, array(
                    'os_libelle' => $sStatusLabel,
                    'hs_new_statut_id' => $iStatusId,
                    'date_statut' => $sStatusDate,
                ));
            }
        }

        ksort($aReturn);

        return $aReturn;
    }

    /**
     * Get all operations which management end in a month
     * @return array
     */

    public function getOperationManagementEndExportData() : array
    {

        $oStatement = Propel::getConnection()->prepare('SELECT 
            operations.op_id, operations.op_number, DATE_FORMAT(operations.op_stamp_end,"%d/%m/%Y") AS op_stamp_end, 
            operations.op_libelle, clients.cl_libelle, users.user_id, CONCAT(users.user_nom," ", users.user_prenom) AS cp_name FROM operations 
            LEFT JOIN users ON users.user_id = operations.op_cp_id 
            LEFT JOIN clients ON clients.cl_id = operations.op_cl_id 
            WHERE (operations.op_stamp_end BETWEEN DATE_ADD(CURRENT_DATE, INTERVAL 1 DAY) 
            AND DATE_ADD(CURRENT_DATE, INTERVAL 31 DAY)) 
            AND operations.actif = 1 
            AND operations.op_cp_id IS NOT NULL 
            AND operations.op_status_id IN (2,6) 
            ORDER BY cp_name, operations.op_stamp_end, operations.op_number
        ');

        $oStatement->execute();
        return $oStatement->fetchAll(PDO::FETCH_ASSOC);
    }
}
