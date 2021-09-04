<?php

class RPrestations extends BaseRPrestations
{

    const TRAIT_COURRIER_ACCELERE = 482;
    const CONSUMERS_REQUESTS_REPAYMENT = 174;
    const ARCHIVING_IDS = array(282,283);

    protected function _triggerMajAdf()
    {
        // Action also available for operation in "solde" status
        $sUpdateOperationPrestationsQuery='
            UPDATE operation_prestations
            SET op_adf = "'.(int) $this->getRPAdf().'"
            WHERE operation_prestations.op_r_prest_id = "'.$this->getRPrestationId().'"
            and operation_prestations.op_id IN (
                SELECT op_id
                FROM operations
                WHERE operations.op_status_id IN ("'.Operations::STATUS_EN_COURS.'","'.Operations::STATUS_ACCEPTE.'","'.Operations::STATUS_SOLDE.'")
            )
        ';

        $this->getConnection()->query($sUpdateOperationPrestationsQuery);

        // Update of the query since the fact_id field does not exist in the invoicing_services table
        $this->getConnection()->query('
            UPDATE factures_prestations
            SET fact_prest_adf="'.((int) $this->getRPAdf()).'"
            WHERE factures_prestations.r_prestation_id="'.$this->getRPrestationId().'"
            AND factures_prestations.fact_rub_id IN (
                SELECT fact_rub_id
                FROM factures_rubriques
                JOIN factures on factures.fact_id = factures_rubriques.fact_id
                JOIN operations on operations.op_id = factures.op_id
                WHERE operations.op_status_id IN ("'.Operations::STATUS_EN_COURS.'","'.Operations::STATUS_ACCEPTE.'","'.Operations::STATUS_SOLDE.'")
            )
        ');
    }

    public function _validateIsFieldsAreCorrect()
    {
        if (!$this->getRPLibelle()) {
            $this->addValidationFailed('Le libellé doit être saisi', 'rprestations.r_p_libelle');
        }
    }

    public function getRPLibelleTranslated($iLanguageId = RLanguages::LANG_FRA)
    {
        switch ($iLanguageId) {
            case RLanguages::LANG_FRA:
                return $this->getRPLibelle();
            case RLanguages::LANG_ENG:
                return $this->getRPLibelleEn();
            default:
                return '';
        }
    }

    public function getRPDescriptionTranslated($iLanguageId = RLanguages::LANG_FRA)
    {
        switch ($iLanguageId) {
            case RLanguages::LANG_FRA:
                return $this->getRPDescriptionFr();
            case RLanguages::LANG_ENG:
                return $this->getRPDescriptionEn();
            default:
                return '';
        }
    }


    public function save(\PropelPDO $oConnection = null)
    {
        $aModifiedColumns = $this->modifiedColumns;

        parent::save($oConnection);

        foreach ($aModifiedColumns as $modifiedColumn) {
            switch ($modifiedColumn) {
                case 'r_prestations.r_p_adf':
                    $this->_triggerMajAdf();
                    break;
            }
        }
    }
}
