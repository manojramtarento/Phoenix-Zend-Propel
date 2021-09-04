<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CouurierCumul
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_CourrierCumul extends Data_Stat_Client_Indicateur_Abstract
{

    protected $_aData;

    public function getIndicateurId()
    {
        return array(4);
    }

    public function getTitle()
    {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_cumul_courier');
    }

    public function getData($output = 'pdf')
    {
        //print_r($this->getRefIndicateur());
        /* return array(
          '01/12' => array('sms' => 100,'web' => 100),
          '02/12' => array('sms' => 130,'web' => 100),
          '03/12' => array('sms' => 100,'web' => 110),
          '04/12' => array('sms' => 100,'web' => 60),
          '05/12' => array('sms' => 60,'web' => 90),
          '06/12' => array('sms' => 180,'web' => 100),
          );
         */

        if (!isset($this->_aData)) {

            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();
            
            // 29775 La converstion de date est fait par SQL server pour avoir le format YYYY-MM-DD
            // Sans avoir à utiliser l'objet Zend_Date qui produit des erreur PHP lié au timezone
            $aResult = $oAdapter->select()->from('View_CompilData', array('CONVERT(VARCHAR(10), data_compil_stamp, 120)', 'data_volume_volume'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->where('data_compil_stamp <=?', $this->getStatClientInstance()->getDate())
                    ->order('data_compil_stamp asc')
                    //->assemble()
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR)
            ;

            if ($aResult != false) {

                $aData = Phoenix_GraphDrawer::groupDataByIntervals($aResult, $this->getStatClientInstance()->getOperation()->getOpStampStart(), $this->getStatClientInstance()->getDate(), array('date_format' => '%d/%m/%Y'));

                /* print_r($aData); */

                $this->_aData = $aData;
            } else {
                $this->_aData = array();
            }
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder)
    {

        $aData = $this->getData();

        $sum = array_sum($aData);

        $oPhoenix_Stats_Xml_Builder->addGraph(array(
            'title' => $this->getTitle() . ' - ' . $sum,
            'type' => 'barv',
            'size' => 'large',
            'plots' => $aData));
    }

    public function addToExcel(\PHPExcel &$oPHPExcel)
    {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();

        $sheet->setCellValueByColumnAndRow(0, 1, 'date');
        $sheet->setCellValueByColumnAndRow(1, 1, 'quantité');
        $ligne = 2;
        foreach ($aData as $key => $value) {
            $sheet->setCellValueByColumnAndRow(0, $ligne, $key);
            $sheet->setCellValueByColumnAndRow(1, $ligne, $value);
            $ligne++;
        }

        $sheet->setTitle($this->getTitleExcel());
    }
}

?>