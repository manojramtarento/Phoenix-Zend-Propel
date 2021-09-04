<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Facturation
 *
 * @author info20
 */
class Operation_View_Helper_Facturation extends Zend_View_Helper_Abstract
{

    public function Facturation()
    {
        return $this;
    }

    /**
     * Generate Redund ADF drop down which invoice type is 1
     * @param integer $iOpId
     * @param interger $iPdfIdToCancel
     * @return string
     */
     
    public function selectAfdToCancel(int $iOpId, int $iPdfIdToCancel = null) : string
    {
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $sCondition = (!is_null($iPdfIdToCancel))? 'and pfd_id_to_cancel != '.$iPdfIdToCancel : '';
        $aResults = $oZendDbSelect->from('r_facture_types', array('name' => 'r_fact_type_libelle', 'value' => 'plan_facturation_details.pfd_id'))
                        ->join('plan_facturation_details', 'plan_facturation_details.pfd_type_fact_id = r_facture_types.r_fact_type_id')
						 ->join('factures', 'factures.fact_id = plan_facturation_details.pfd_fact_id',array('fact_reference'))
                        ->where('plan_facturation_details.op_id = ' . $iOpId . ' and r_facture_types.r_fact_type_id = ' . RFactureTypes::ADF. ' and plan_facturation_details.pfd_id NOT IN (select pfd_id_to_cancel FROM plan_facturation_details where op_id = ' . $iOpId . ' and pfd_id_to_cancel is not null '.$sCondition.' )' )
                        ->query()->fetchAll();
        $aOptions = array();
        foreach ($aResults as $aResult) {
            $aOptions[$aResult['value']] = array(
                'label' => $aResult['name'].' '.$aResult['fact_reference'],
                'value' => $aResult['value'],
                'class' => (isset($aResult['class']) ? $aResult['class'] : '')
            );
             
        }
        return Phoenix_View_Helper_Html::select(array('name' => 'pfd_id_to_cancel', 'class' => 'form-select unit size1of2 lastUnit', 'value' => $iPdfIdToCancel), $aOptions, array('default_label' => $this->view->translate('choisir') . '...'));
    }

    /**
     * Generate Invoice cancelled drop down which invoice type <> 1
     * @param PlanFacturationDetails $oPlanFacturationDetail
     * @return string
     */
    public function selectFacturesTocancel(\PlanFacturationDetails $oPlanFacturationDetail) : string
    {
        return Phoenix_View_Helper_Html::selectFromTable(
            'factures',
            array('name' => 'pfd_fact_annul',
            'class' => 'form-select unit size1of2 lastUnit',
            'value' => $oPlanFacturationDetail->getPfdFactAnnul()),
            array('name' => 'fact_reference',
                        'value' => 'fact_id',
                        'class' => "(13)"),
            array('default_label' => $this->view->translate('choisir') . '...',
            'clause_where' => 'op_id=' . $oPlanFacturationDetail->getOpId() . ' AND r_fact_type_id <> 1 AND fact_annul_id IS NULL AND fact_status_id IN (' . RFactureStatuts::EDITED . ',' . RFactureStatuts::ENCAISSE . ',' . RFactureStatuts::ENCAISSE_PARTIEL . ') AND fact_id NOT IN (select fact_annul_id from factures where fact_annul_id is not null)')
        );
    }


    /**
     *
     * @param int|NULL $iSelectedValue
     * @return string
     * @throws \InvalidArgumentException
     */
    public function selectActiveInvoiceCancellationMotives($iSelectedValue)
    {

        if (! is_int($iSelectedValue) && $iSelectedValue != null) {
            throw new \InvalidArgumentException('The Argument $iSelectedValue expects an int or null value, "' . gettype($iSelectedValue) . '" given');
        }

        $aMotivesOptions = RFactureAnnulationMotifsQuery::create()
                ->filterByRFactureAnnulationMotifsActif(true)
                ->withColumn('RFactureAnnulationMotifs.RFactureAnnulationMotifsMotifLibelle', 'label')
                ->withColumn('RFactureAnnulationMotifs.RFactureAnnulationMotifsMotifId', 'value')
                ->withColumn(RFactureTypes::ANNULATION, 'class')
                ->select(array('label'))
                ->find()
                ->toArray('value', false, Basepeer::TYPE_FIELDNAME);

        return Phoenix_View_Helper_Html::select(array('name' => 'pfd_fact_annul_motif_id', 'class' => 'form-select unit size1of2 lastUnit', 'value' => $iSelectedValue), $aMotivesOptions, array('default_label' => $this->view->translate('choisir') . '...'));
    }
    
    /**
     *
     * @param int  $iFactureId
     * @return Array
     * @throws \InvalidArgumentException
     */
    public function getInvoiceStatusWithUsers(int $iFactureId) : array
    {

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aCurrentInvoiceStatusResult = $oZendDbSelect->from(array('f' => 'factures'), array('fact_reference'))
                                        ->joinLeft(array('fs' => 'facture_statuts'), 'fs.fact_id = f.fact_id', array('fact_id'))
                                        ->joinLeft(array('rfs' => 'r_facture_statuts'), 'fs.r_fact_stat_id = rfs.r_fact_stat_id', array('r_fact_stat_id','r_fact_stat_libelle'))
                                        ->joinLeft('users', 'users.user_id = fs.user_id', array('username' => 'CONCAT(user_prenom," ",user_nom)'))
                                        ->where('fs.fact_id= ?', $iFactureId)
                                        ->query()->fetchAll();
        return $aCurrentInvoiceStatusResult;
    }
    
}
