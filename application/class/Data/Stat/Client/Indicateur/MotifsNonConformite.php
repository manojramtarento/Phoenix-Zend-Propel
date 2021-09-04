<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MotidsNonConformite
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_MotifsNonConformite extends Data_Stat_Client_Indicateur_Abstract
{

    protected $_aData;

    /**
     * 
     * @param string $output csv | excel
     * @return Zend_Db_Select
     */
    protected function _getRequest($output)
    {
        $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

        $selectDate = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                ->where('data_compil_op_id = ?', $this->getStatClientInstance()->getOpId())
                ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                ->order('data_compil_stamp desc')
                ->limit(1)
        ;

        $oSelect = $oAdapter->select()->from('View_CompilData', array('data_volume_segment', 'sum(data_volume_volume) as data_volume_volume'))
                ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                ->where('data_compil_stamp =(?)', new Zend_Db_Expr($selectDate))
                ->group('data_volume_segment')
                ->order('data_volume_volume desc')
        ;

        switch ($output) {
            case 'pdf':$oSelect->limit(10);
                break;
            case 'excel':$oSelect->limit(100);
                break;
        }

        return $oSelect;
    }

    public function getIndicateurId()
    {
        return array(26);
    }

    public function getTitle()
    {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_motif_non_conform');
    }

    /**
     * 
     * @param string $output csv | excel
     * @return type
     */
    public function getData($output = 'pdf')
    {

        if (!isset($this->_aData)) {
            $aResult = $this->_getRequest($output)
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR);

            /* $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

              $selectDate = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
              ->where('r_indicateur_id in (?)', $this->getIndicateurId())
              ->order('data_compil_stamp desc')
              ->limit(1)
              ;

              $aResult = $oAdapter->select()->from('View_CompilData', array('data_volume_segment', 'sum(data_volume_volume) as data_volume_volume'))
              ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
              ->where('r_indicateur_id in (?)', $this->getIndicateurId())
              ->where('data_compil_stamp =(?)', new Zend_Db_Expr($selectDate))
              ->group('data_volume_segment')
              ->limit(10)
              ->order('data_volume_volume desc')
              //->assemble()
              ->query()
              ->fetchAll(PDO::FETCH_KEY_PAIR)
              ; */

//print_r($aResult);

            if ($aResult != false) {
                $this->_aData = $aResult;
            } else {
                $aResult[''] = 0;
                $this->_aData = $aResult;
            }
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder)
    {

        $aData = $this->getData('pdf');

        $oPhoenix_Stats_Xml_Builder->addGraph(array(
            'title' => $this->getTitle(),
            'type' => 'barh',
            'size' => 'large',
            'plots' => $aData));
    }

    public function addToExcel(\PHPExcel &$oPHPExcel)
    {
        $aData = $this->getData('excel');
        $sheet = $oPHPExcel->createSheet();

        $sheet->setCellValueByColumnAndRow(0, 1, 'motif');
        $sheet->setCellValueByColumnAndRow(1, 1, 'quantité');
        $ligne = 2;
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