<?php

/**
 * Description of InvoiceSearchService
 *
 * @author NABIL NIZAR
 */
class Phoenix_Invoice_Service_InvoiceSearchService
{

    /**
     * Search Fields
     *
     * @var array
     */
    public $searchedFields = array(
        'cl_id' => array('operator' => 'eql'),
        'op_number' => array('operator' => 'eql'),
        'fact_act_id' => array('operator' => 'eql'),
        'op_type_id' => array('operator' => 'eql'),
        'r_fact_type_id' => array('operator' => 'eql'),
        'fact_date_encaisse_fr' => array('operator' => 'eql', 'date_format' => false),
        'fact_date_echeance_fr' => array(array('operator' => 'eql')),
        'fact_num_cmd' => array('operator' => 'like'),
        'fact_has_paiement_partiel' => array('operator' => 'eql'),
        'fact_montant_ttc' => array(array('operator' => 'sup', 'field' => 'fact_montant_ttc_min'),
            array('operator' => 'inf', 'field' => 'fact_montant_ttc_max')),
        'fact_date_create' => array(array('operator' => 'supeql', 'field' => 'fact_date_create_min', 'date_format' => true),
            array('operator' => 'infeql', 'field' => 'fact_date_create_max', 'date_format' => true)),
        'plan_fact_periode_id' => array('operator' => 'eql'),
        'plan_fact_periode_type_id' => array('operator' => 'eql'),
        'fact_is_echu' => array('operator' => 'eql'),
        'op_cp_id' => array('operator' => 'eql'),
        'fact_reference' => array('operator' => 'like'),
        'fact_status_id' => array('operator' => 'eql'),
    );

    /**
     * @var \Zend_Db_Select
     */
    protected $select;

    /**
     * @param array $aParams
     * @return type
     */
    public function makeSelectBySearchParams(array $aParams)
    {
        $oSelect = $this->getSelect();
        $oSelect->order('op_number desc');

        $aSearchedFields = $this->getSearchedFields();

        $oMySearchEngine = new My_Search_Engine($oSelect);
        $oMySearchEngine->findWordOn(array(
            'fact_reference' => array('operator' => 'like'),
            'cl_libelle' => array('operator' => 'like'),
        ));

        // Research on status date range with sub-query:
        if (! empty($aParams['find_fact_status_histo_id']) && (! empty($aParams['find_fact_date_status_min']) || ! empty($aParams['find_fact_date_status_max']))) {
            $oZendDbSelectStatut = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

            $oZendDbSelectStatut->from('facture_statuts', 'fact_id')
                    ->where('r_fact_stat_id = ?', $aParams['find_fact_status_histo_id'])
                    ->where('is_effective=1');
            if ($aParams['find_fact_date_status_min'] == $aParams['find_fact_date_status_max']) {
                $oZendDate = new Zend_Date($aParams['find_fact_date_status_max'], null, 'fr');
                $oZendDate->addDay(1);
                $aParams['find_fact_date_status_max'] = $oZendDate->toString('dd/MM/Y');
            }
            if (! empty($aParams['find_fact_date_status_min'])) {
                // 32655 : Format for MySQL
                $aParams['find_fact_date_status_min'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['find_fact_date_status_min']);
                $oZendDbSelectStatut->where('date_create >= ?', $aParams['find_fact_date_status_min']);
            }
            if (! empty($aParams['find_fact_date_status_max'])) {
                // 32655 : Format for MySQL
                $aParams['find_fact_date_status_max'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['find_fact_date_status_max']);
                $oZendDbSelectStatut->where('date_create <= ?', $aParams['find_fact_date_status_max']);
            }

            $aSearchedFields['fact_id'] = array('operator' => 'in', 'value' => $oZendDbSelectStatut);
        }

        // Construction of the condition based on the reasons
        $sCondition = '';
        if (! empty($aParams['find_fact_has_no_motifs'])) {
            $aFactIdsWithMotifs = LnkFactureMotifsQuery::create()->select('FactId')->setDistinct(LnkFactureMotifsPeer::FACT_ID)->find()->toArray();
            $sCondition = "fact_id not in ('" . implode("','", $aFactIdsWithMotifs) . "')";
        } elseif (! empty($aParams['find_r_facture_motifs_id'])) {
            // If the box is unchecked without reasons, and some reasons are seized
            $aFactIdsWithMotifs = LnkFactureMotifsQuery::create()->select('FactId')->setDistinct(LnkFactureMotifsPeer::FACT_ID)->findByMotifId($aParams['find_r_facture_motifs_id'])->toArray();
            $sCondition = "fact_id in ('" . implode("','", $aFactIdsWithMotifs) . "')";
        }

        if ($sCondition) {
            $this->getSelect()->where($sCondition);
        }

        // Definition of desired fields
        $oMySearchEngine->findByFields($aSearchedFields);

        $oMySearchEngine->makeOrderBy();

        return $oMySearchEngine->getSelect();
    }

    /**
     * @param \Zend_Db_Select $oSelect
     * @return \Zend_Db_Select
     */
    public function makeQueryForExport(\Zend_Db_Select $oSelect)
    {
        $oSelect->from('View_Facture_Listing', array(
            'fact_date_validation_fr',
            'fact_date_edition_fr',
            'fact_date_echeance_fr',
            'fact_date_encaisse_fr',
            'fact_reference',
            'fact_num_cmd',
            'cl_libelle',
            'op_number',
            'op_libelle',
            'ot_libelle',
            'r_fact_type_libelle',
            'fact_montant_ht',
            'fact_montant_ttc',
            'r_fact_stat_libelle',
            'plan_fact_note_interne',
            'Motif annulation' => 'motif_annulation',
            'Motif annulation autre' => 'motif_annulation_autre',
            'gestionnaire' => 'op_cp_name',
        ));
        // 31827 : Adding the join with the user table to retrieve the name and surname of commercial director
        $oSelect->joinLeft('users', 'users.user_id = View_Facture_Listing.dc_id', array('Directeur de clientèle' => 'CONCAT(COALESCE(users.user_nom,\'\'), \' \' ,COALESCE(users.user_prenom,\'\'))'));
        return $oSelect;
    }

    /**
     * @return array
     */
    public function getSearchedFields()
    {
        if (is_array($this->searchedFields)) {
            return $this->searchedFields;
        }
        throw new \LogicException('Property "searchedFields" expects a , "' . (is_object($this->searchedFields) ? get_class($this->searchedFields) : gettype($this->searchedFields)) . '" defined');
    }

    /**
     * @return  \Zend_Db_Select
     * @throws \LogicException
     */
    public function getSelect()
    {
        // Lazy load if not defiend
        if (is_null($this->select)) {
            $this->select = new \Zend_Db_Select(\Zend_Db_Table::getDefaultAdapter());
        }

        if ($this->select instanceof \Zend_Db_Select) {
            return $this->select;
        }
        throw new \LogicException('Property "select" expects an instanceof \Zend_Db_Select , "' . (is_object($this->select) ? get_class($this->select) : gettype($this->select)) . '" defined');
    }
}
