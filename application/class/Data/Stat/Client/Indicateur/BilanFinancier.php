<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BilanFinancier
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_BilanFinancier extends Data_Stat_Client_Indicateur_Abstract
{

    protected $_aData;
    static protected $_aPrestation;

    public function getIndicateurId()
    {
        return array(13, 14, 15, 16, 17, 18, 19);
    }

    public function getTitle()
    {
        return 'Bilan financier';
    }

    public function getPrestationLibelle($id)
    {
        if (!isset(self::$_aPrestation[$id])) {
            self::$_aPrestation[$id] = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()
                            ->select()->from('operation_prestations', array('op_prest_libelle_devis'))
                            ->where('op_prest_id=?', $id)
                            ->query()->fetchColumn();
        }

        return self::$_aPrestation[$id];
    }

    public function getData($output = 'pdf')
    {


        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();
            $aData = array();

            foreach ($this->getIndicateurId() as $indicateurId) {
                /* $row = $oAdapter->select()
                  ->from('View_CompilData', array('r_indicateur_id', 'data_volume_segment', 'data_volume_volume as data_volume_volume'))
                  ->where('data_compil_op_id = ?', $this->getStatClientInstance()->getOpId())
                  ->where('r_indicateur_id = ?', $indicateurId)
                  ->limit(1)
                  ->order('data_compil_stamp desc')
                  //->assemble()
                  ->query()
                  ->fetch(PDO::FETCH_ASSOC)
                  ; */

                $sql = "select r_indicateur_id, data_volume_segment, data_volume_volume as data_volume_volume
					from View_CompilData
					where data_compil_op_id='" . $this->getStatClientInstance()->getOpId() . "'
						and r_indicateur_id='" . $indicateurId . "'
						and data_compil_stamp=(
							select top 1 data_compil_stamp
							from data_compil
							where r_indicateur_id='" . $indicateurId . "'
                                and data_compil_op_id='" . $this->getStatClientInstance()->getOpId() . "'
								order by data_compil_stamp desc
						)
				";



                $aResult = $oAdapter->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                //echo $sql;die;
                //print_r($row);
                $aOperationPrestationIds = array();
                if ($aResult != false) {
                    foreach ($aResult as $row) {
                        $aOperationPrestationIds[] = $row['data_volume_segment'];
                        $aData[$row['data_volume_segment']][$row['r_indicateur_id']] = $row['data_volume_volume'];
                    }
                }
            }

            if (count($aData) > 0) {
                $aOrdredOperationPrestations = $this->getOrdredOperationPrestations($aOperationPrestationIds);
                foreach($aOrdredOperationPrestations as $sPrestationId){
                    $aPresta[] = array(
                        'libelle' => $this->getPrestationLibelle($sPrestationId),
                        'qte_estimee' => isset($aData[$sPrestationId][13]) ?$aData[$sPrestationId][13] : 0,
                        'qte_realisee' => isset($aData[$sPrestationId][14]) ? $aData[$sPrestationId][14] : 0,
                        'pourcentage_realisation' => isset($aData[$sPrestationId][15]) ? $aData[$sPrestationId][15] : 0,
                        'montant_estime' => isset($aData[$sPrestationId][16]) ? $aData[$sPrestationId][16] : 0,
                        'montant_realise' => isset($aData[$sPrestationId][17]) ? $aData[$sPrestationId][17] : 0,
                        'montant_encaisse' => isset($aData[$sPrestationId][18]) ? $aData[$sPrestationId][18] : 0,
                        'montant_disponible' => isset($aData[$sPrestationId][19]) ? $aData[$sPrestationId][19] : 0, 
                    );
                    
                }

                //print_r($aData);die;

                $this->_aData = $aPresta;
            } else {
                $this->_aData = array('' => array(
                        'libelle' => '',
                        'qte_estimee' => 0,
                        'qte_realisee' => 0,
                        'pourcentage_realisation' => 0,
                        'montant_estime' => 0,
                        'montant_realise' => 0,
                        'montant_encaisse' => 0,
                        'montant_disponible' => 0,
                ));
            }
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder)
    {
        $aData = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addBilanFinancier($aData);
    }

    public function addToExcel(\PHPExcel &$oPHPExcel)
    {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();

        $sheet->setCellValueByColumnAndRow(1, 1, 'qte estimee');
        $sheet->setCellValueByColumnAndRow(2, 1, 'qte realisee');
        $sheet->setCellValueByColumnAndRow(3, 1, 'pourcentage_realisation');
        $sheet->setCellValueByColumnAndRow(4, 1, 'montant estime');
        $sheet->setCellValueByColumnAndRow(5, 1, 'montant realise');
        $sheet->setCellValueByColumnAndRow(6, 1, 'montant encaisse');
        $sheet->setCellValueByColumnAndRow(7, 1, 'montant disponible');

        $ligne = 2;

        foreach ($aData as $aRow) {
            // 29228 Si le type du nom du segement est string, alors on l'encode en UTF-8
            $sLibelle = is_string($aRow['libelle']) ? Phoenix_Data_Convert::getUtf8EncodedString($aRow['libelle']) : $aRow['libelle'];
            $sheet->setCellValueByColumnAndRow(0, $ligne, $sLibelle);
            $sheet->setCellValueByColumnAndRow(1, $ligne, $aRow['qte_estimee']);
            $sheet->setCellValueByColumnAndRow(2, $ligne, $aRow['qte_realisee']);
            $sheet->setCellValueByColumnAndRow(3, $ligne, $aRow['pourcentage_realisation']);
            $sheet->setCellValueByColumnAndRow(4, $ligne, $aRow['montant_estime']);
            $sheet->setCellValueByColumnAndRow(5, $ligne, $aRow['montant_realise']);
            $sheet->setCellValueByColumnAndRow(6, $ligne, $aRow['montant_encaisse']);
            $sheet->setCellValueByColumnAndRow(7, $ligne, $aRow['montant_disponible']);
            $ligne++;
        }

        $sheet->setTitle($this->getTitleExcel());
    }

    /**
     * Cette fonction retourne la liste des préstations ordonnés par ordre croissant des codes prime pour les prestations associés à des primes, puis
     * ordonné par ordre alphabétique croissant des libellés de prestations qui ne sont pas associés à des primes. TicketRedmine : 23303
     * @param array $aOperationPrestationIds
     */
    public function getOrdredOperationPrestations(array $aOperationPrestationIds)
    {
        //Récupérations des prestation associé à des primes ordonnées avec code primes ascendant
        $aOperationPrestationsAssociatedToPrime = OperationPrestationsQuery::create()->select(array('OpPrestId'))->orderBy('OpPrestPrimeId', 'ASC')->filterByOpPrestPrimeId(null, Criteria::NOT_EQUAL)->findByOpPrestId($aOperationPrestationIds)->toArray();
        //récupération des préstations sans primes ordonnées avec les libellé de prestations ascendant
        $aOperationPrestationsWithNoPrimeAssociated = OperationPrestationsQuery::create()->select(array('OpPrestId'))->orderBy('OpPrestLibelleDevis', 'ASC')->filterByOpPrestPrimeId(null, Criteria::EQUAL)->findByOpPrestId($aOperationPrestationIds)->toArray();
        //Afficher d'abord les prestations avec primes puis ceux sans primes
        return array_merge($aOperationPrestationsAssociatedToPrime, $aOperationPrestationsWithNoPrimeAssociated);
    }
}

?>
