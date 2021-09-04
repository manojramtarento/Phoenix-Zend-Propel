<?php

class OperationPrestationsQuery extends BaseOperationPrestationsQuery
{

    public function findByOpPrestRubriIdAndOpPrestOrder($iOpRubriqueId, $sOrder)
    {
        return $this->filterByOpPrestRubriId($iOpRubriqueId)
            ->filterByOpPrestOrder($sOrder)
            ->findOne();
    }

    /**
     * Check whether a service exists in a status invoice created or more
     * @param array|int $aOpPrestaId
     * @param int $iFactureStatut
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function checkPrestaExistsInFactureByStatus($aOpPrestaId, int $iFactureStatut = RFactureStatuts::CREATED) : bool
    {
        $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()
            ->from('factures_prestations', array())
            ->where('facture_statuts.r_fact_stat_id >= ? ', $iFactureStatut)
            ->where('operation_prestations.op_prest_id IN (?)', is_array($aOpPrestaId) ? $aOpPrestaId : array($aOpPrestaId))
            ->joinLeft('operation_prestations', 'operation_prestations.op_prest_id = factures_prestations.op_prest_id', array('op_prest_id'))
            ->joinLeft('factures_rubriques', 'factures_rubriques.fact_rub_id = factures_prestations.fact_rub_id', array())
            ->joinLeft('facture_statuts', 'factures_rubriques.fact_id = facture_statuts.fact_id', array());

        return ! ! $oSelect->query()->fetchAll();
    }

    /**
     * Checks sections services if at least one exists in a status invoice created or more
     * @param int $iOpRubriqueId
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function checkIfOnePrestaExistsInFactureByStatus(int $iOpRubriqueId) : bool
    {
        // Selects all the services of the section by section id
        $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()
            ->from('factures_prestations', array('op_prest_id'))
            ->where('operation_prestations.op_prest_rubri_id = ?', $iOpRubriqueId)
            ->joinLeft('operation_prestations', 'operation_prestations.op_prest_id = factures_prestations.op_prest_id', array());

        // Checks whether these services do not exist in another status invoice created or more
        $aResult = $oSelect->query()->fetchAll();
        return $aResult ? $this->checkPrestaExistsInFactureByStatus($aResult, RFactureStatuts::CREATED) : false;
    }

    /**
     * Update "OpPrestCoutsValides" of all given operations prestations which can be validated automatically
     *
     * @param \Operations $oOperation
     * @return OperationPrestationsQuery
     */
    public function updateAutomaticOpPrestCoutsValides(\Operations $oOperation) : OperationPrestationsQuery
    {
        if ($oOperation->getOpStatusId() !== \Operations::STATUS_ACCEPTE) {
            throw new \LogicException(__METHOD__ . ' cannot be used with operation having status id "' . $oOperation->getOpStatusId() . '"');
        }

        $sQuery = '
            UPDATE operation_prestations
            JOIN r_prestations ON operation_prestations.op_r_prest_id = r_prestations.r_prestation_id
            JOIN r_p_type_validation ON r_prestations.r_p_validation_id = r_p_type_validation.r_p_type_validation_id
            SET 
                operation_prestations.op_prest_couts_valides = 1,
                operation_prestations.op_prest_cireel = r_prestations.r_p_cout_interne,
                operation_prestations.op_prest_cereel = r_prestations.r_p_cout_externe
            WHERE operation_prestations.op_id = ' . $oOperation->getOpId() . '
            AND operation_prestations.op_prest_couts_valides = 0
            AND r_p_type_validation.r_p_type_validation_id = ' . \RPTypeValidation::AUTOMATIQUE . ';
        ';
        $oStatement = Propel::getConnection()->prepare($sQuery);
        $oStatement->execute();
        return $this;
    }
}
