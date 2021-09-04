<?php

/**
 * Skeleton subclass for representing a row from the 'operation_prestations_factures_achats' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class OperationPrestationsFacturesAchats extends BaseOperationPrestationsFacturesAchats
{
    /*     * *************************************************
     *            TRIGGERS
     * *************************************************** */

    protected function _triggerUpdateOpPrestQte()
    {
        $result = OperationPrestationsFacturesAchatsQuery::create()->filterByOpPrestId($this->getOpPrestId())
                        ->withColumn('sum(op_prest_achat_quantite)', 'op_prest_achat_quantite')
                        ->select('op_prest_achat_quantite')->findOne();

        OperationPrestationsQuery::create()->filterByPrimaryKey($this->getOpPrestId())->update(array('OpPrestQreel' => $result));
    }

    /**
     * Cette fonction met à jour le champ op_prest_mreel de la table operation_prestations
     * lorsque la méthode save() est invoqué
     */
    protected function _triggerUpdateOpPrestMreel()
    {
        $sQuantity = OperationPrestationsFacturesAchatsQuery::create()->filterByOpPrestId($this->getOpPrestId())
                        ->withColumn('sum(op_prest_achat_quantite)', 'op_prest_achat_quantite')
                        ->select('op_prest_achat_quantite')->findOne();

        $iPrixVente = OperationPrestationsQuery::create()->findOneByOpPrestId($this->getOpPrestId())->getOpPrestPv();

        OperationPrestationsQuery::create()->filterByPrimaryKey($this->getOpPrestId())->update(array('OpPrestMreel' => ($sQuantity * $iPrixVente)));
    }

    public function save(\PropelPDO $con = null)
    {

        $aModifiedColumns = $this->getModifiedColumns();
        parent::save($con);

        //traitements consécutifs à l'édition d'une opération
        foreach ($aModifiedColumns as $modifiedColumn) {
            switch ($modifiedColumn) {
                case 'operation_prestations_factures_achats.op_prest_achat_quantite':
                    $this->_triggerUpdateOpPrestQte();
                    $this->_triggerUpdateOpPrestMreel();
                    break;
            }
        }
    }

    /**
     * Cette fonction permet d'invoquer les méthodes de mise à jour des deux champs
     * op_prest_qreel et op_prest_mreel, lorsqu'un delete est effetcué sur la table
     * operation_prestations_factures_achats
     * @param \PropelPDO $con
     */
    public function delete(\PropelPDO $con = null)
    {
        parent::delete($con);
        $this->_triggerUpdateOpPrestQte();
        $this->_triggerUpdateOpPrestMreel();
    }

    /**
     * 39519
     * Computes the amont of the external realized costs for a service
     * @return float
     */
    public function computeServiceExternalRealizedCost()
    {

        return (float) OperationPrestationsFacturesAchatsQuery::create()
                        ->filterByOpPrestId($this->getOpPrestId())
                        ->withColumn('SUM(op_prest_achat_quantite*op_prest_achat_cout_externe)/SUM(op_prest_achat_quantite)', 'value')
                        ->select('value')
                        ->findOne();
    }
}
