<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RemontesPalier
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_RemontesPalier extends Data_Stat_Client_Indicateur_Abstract {

    protected $_aData;

    public function getIndicateurId() {
        return array(52);
    }

    public function getTitle() {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_remonte_palier');
    }

    public function getData($output='pdf') {


        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

            $aResult = $oAdapter->select()->from('View_CompilData', array('data_volume_segment', 'sum(data_volume_volume)'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->group('data_volume_segment')
                    //->assemble()
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR)
            ;

            $aData = array();
            //print_r($aResult);

            if ($aResult != false) {
                /* $nbTotalPrime = 0;
                  foreach ($aResult as $primeNum => $val) {
                  if (!empty($primeNum)) {
                  $nbTotalPrime+=$val;
                  }
                  } */

                foreach ($aResult as $primeNum => $val) {
                    if (is_numeric($primeNum)) {
                        $aData[$this->_getPrimeLibelle($primeNum)] = $val;
                    } elseif ($primeNum == 'remb') {
                        $aData['remb'] = $val;
                    }
                }
            } else {
                $aData[''] = 0;
            }
            $this->_aData = $aData;
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder) {

        $aData = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addGraph(array(
            'title' => $this->getTitle(),
            'type' => 'barh',
            'size' => 'mini',
            'plots' => $aData));
    }

    public function addToExcel(\PHPExcel &$oPHPExcel) {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();
        $ligne = 1;
        foreach ($aData as $sKey => $value) {
            // 29228 Si le type du nom du segement est string, alors on l'encode en UTF-8
            $sKey = is_string($sKey) ? Phoenix_Data_Convert::getUtf8EncodedString($sKey) : $sKey;
            $sheet->setCellValueByColumnAndRow(0, $ligne, $sKey);
            $sheet->setCellValueByColumnAndRow(1, $ligne, $value);
            $ligne++;
        }

        $sheet->setTitle($this->getTitleExcel());
    }

}

?>
