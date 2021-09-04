<?php

class FacturesPrestationsQuery extends BaseFacturesPrestationsQuery
{


    /**
     * @param OperationPrestations $oOperationService
     * @return array
     */
    public function getAlreadyChargedDataForOperationService(OperationPrestations $oOperationService) : array
    {
        $oStatement = Propel::getConnection()->prepare('
            SELECT 
                SUM(fact_prest_quantite_facture_final) AS `total_quantity_already_charged`,
                SUM(fact_prest_montant_facture_final) AS `total_amount_already_charged`
            FROM factures_prestations
            INNER JOIN factures_rubriques ON factures_prestations.fact_rub_id = factures_rubriques.fact_rub_id
            INNER JOIN factures ON factures_rubriques.fact_id = factures.fact_id
            WHERE (op_prest_id = '.$oOperationService->getOpPrestId().')
            AND (fact_status_id IN ('.RFactureStatuts::EDITED.' , '.RFactureStatuts::ENCAISSE.', '.RFactureStatuts::ENCAISSE_PARTIEL.'))
        ');
        $oStatement->execute();
        return $oStatement->fetch();
    }
}
