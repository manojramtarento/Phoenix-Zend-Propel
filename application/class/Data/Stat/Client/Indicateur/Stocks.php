<?php

class Data_Stat_Client_Indicateur_Stocks extends Data_Stat_Client_Indicateur_Abstract
{

    protected $data;

    public function getIndicateurId()
    {
        return array(9, 10, 11, 12);
    }

    public function getTitle()
    {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_etat_des_stocks');
    }

    public function getData($sOutput = 'pdf')
    {

        if (! isset($this->data)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();
            $oAdapterPhoenix = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter();

            //selection des gdlArtId dans phoenix
            $aPrimeGdlArtId = $oAdapterPhoenix->select()->from('operation_primes', array('gdl_art_id'))->where('op_id=?', $this->getStatClientInstance()->getOpId())
                            ->query()->fetchAll(PDO::FETCH_ASSOC);

            if (empty($aPrimeGdlArtId)) {
                $aResult0 = false;
            } else {
                //selection de la dernière date de compilation de l'indicateur 11 pour l'opération concernée
                $oSelectDate = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                        ->where('r_indicateur_id = ?', 11)
                        ->where('data_compil_op_id = ?', $this->getStatClientInstance()->getOpId())
                        ->order('data_compil_stamp desc')
                        ->limit(1)
                ;

                $aResult0 = $oAdapter->select()->from('View_CompilData', array('r_indicateur_id', 'data_volume_segment', 'data_volume_volume as data_volume_volume'))
                        ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', array(11, 12))
                        ->where('data_compil_stamp =(?)', new Zend_Db_Expr($oSelectDate))
                        ->where('data_volume_segment in (?)', $aPrimeGdlArtId)
                        ->query()
                        ->fetchAll(PDO::FETCH_ASSOC)
                ;

                foreach ($aResult0 as $iKey => $aRow) {
                    $iOperationRewardNumber = $oAdapterPhoenix->select()->from('operation_primes', 'op_prime_numero')->where('gdl_art_id = ?', $aRow['data_volume_segment'])->query()->fetchColumn();
                    if ($iOperationRewardNumber != false) {
                        $aResult0[$iKey]['data_volume_segment'] = $iOperationRewardNumber;
                    } else {
                        unset($aResult0[$iKey]);
                    }
                }
            }



            //selection des gdlArtId dans phoenix
            $aPrimeNumero = $oAdapterPhoenix->select()->from('operation_primes', array('op_prime_numero'))->where('op_id=?', $this->getStatClientInstance()->getOpId())
                            ->query()->fetchAll(PDO::FETCH_ASSOC);




            //selection de la dernière date de compilation de l'indicateur 9 pour l'opération concernée
            $oSelectDate = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                    ->where('r_indicateur_id = ?', 9)
                    ->where('data_compil_op_id = ?', $this->getStatClientInstance()->getOpId())
                    ->order('data_compil_stamp desc')
                    ->limit(1)
            ;

            if (empty($aPrimeNumero)) {
                $aResult1 = false;
                $aResult2 = false;
            } else {
                $aResult1 = $oAdapter->select()->from('View_CompilData', array('r_indicateur_id', 'data_volume_segment', 'data_volume_volume as data_volume_volume'))
                        ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                        ->where('r_indicateur_id = ?', 9)
                        ->where('data_compil_stamp =(?)', new Zend_Db_Expr($oSelectDate))
                        ->where('data_volume_segment in (?)', $aPrimeNumero)
                        ->query()
                        ->fetchAll(PDO::FETCH_ASSOC)
                ;

                Phoenix_Logger::getInstanceCronSendOperationsStat()->setActionName('getData')->log('aResult1 ' . print_r($aResult1, true));



                $aResult2 = $oAdapter->select()->from('View_CompilData', array('r_indicateur_id', 'data_volume_segment', 'sum(data_volume_volume) as data_volume_volume'))
                        ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                        ->where('r_indicateur_id in (?)', array(10))
                        ->where('data_compil_stamp >=?', $this->getStatClientInstance()->getOperation()->getOpStampStart())
                        ->where('data_compil_stamp <=?', $this->getStatClientInstance()->getDate())
                        ->where('data_volume_segment in (?)', $aPrimeNumero)
                        ->group(array('r_indicateur_id', 'data_volume_segment'))
                        ->query()
                        ->fetchAll(PDO::FETCH_ASSOC)
                ;
            }

            if ($aResult0 != false) {
                foreach ($aResult0 as $aRow) {
                    $aResult[] = $aRow;
                }
            }
            if ($aResult1 != false) {
                foreach ($aResult1 as $aRow) {
                    $aResult[] = $aRow;
                }
            }
            if ($aResult2 != false) {
                foreach ($aResult2 as $aRow) {
                    $aResult[] = $aRow;
                }
            }

            if (isset($aResult)) {
                $aData = array();
                foreach ($aResult as $aRow) {
                    $aData[$aRow['data_volume_segment']][$aRow['r_indicateur_id']] = $aRow['data_volume_volume'];
                }


                foreach ($aData as $iRewardId => $aRow) {
                    $aPrime[] = array(
                        'libelle' => $this->_getPrimeLibelle($iRewardId),
                        'qte_estimee' => isset($aRow[9]) ? $aRow[9] : 0,
                        'qte_affectee' => isset($aRow[10]) ? $aRow[10] : 0,
                        'qte_entree' => isset($aRow[11]) ? $aRow[11] : 0,
                        'qte_stock' => isset($aRow[12]) ? $aRow[12] : 0
                    );
                }
                $this->data = $aPrime;
            } else {
                $this->data = array();
            }
        }

        return $this->data;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder $oPhoenixStatsXmlBuilder)
    {
        $aData = $this->getData();
        $oPhoenixStatsXmlBuilder->addStock($aData);
    }

    public function addToExcel(\PHPExcel &$oPHPExcel)
    {
        $aData = $this->getData();
        $oSheet = $oPHPExcel->createSheet();

        $oSheet->setCellValueByColumnAndRow(1, 1, 'qte estimee');
        $oSheet->setCellValueByColumnAndRow(2, 1, 'qte affectee');
        $oSheet->setCellValueByColumnAndRow(3, 1, 'qte entree');
        $oSheet->setCellValueByColumnAndRow(4, 1, 'qte stock');

        $iLIne = 2;
        foreach ($aData as $aRow) {
            $oSheet->setCellValueByColumnAndRow(0, $iLIne, $aRow['libelle']);
            $oSheet->setCellValueByColumnAndRow(1, $iLIne, $aRow['qte_estimee']);
            $oSheet->setCellValueByColumnAndRow(2, $iLIne, $aRow['qte_affectee']);
            $oSheet->setCellValueByColumnAndRow(3, $iLIne, $aRow['qte_entree']);
            $oSheet->setCellValueByColumnAndRow(4, $iLIne, $aRow['qte_stock']);
            $iLIne++;
        }

        $oSheet->setTitle($this->getTitleExcel());
    }

}
