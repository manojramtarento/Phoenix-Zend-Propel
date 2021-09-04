<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParticipationsSupport
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_ParticipationsSupport extends Data_Stat_Client_Indicateur_Abstract
{

    protected $_aData;

    public function getIndicateurId()
    {
        return array(2, 3, 1, 4);
    }

    public function getTitle()
    {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_participation_support');
    }

    /**
     * 
     * @return array [ date => ['label1'=>valeur,'label2'=>valeur] ]
     */
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
            $aResult = $oAdapter->select()->from('View_CompilData', array('CONVERT(VARCHAR(10), data_compil_stamp, 120) AS data_compil_stamp', 'r_indicateur_id', 'sum(data_volume_volume) as data_volume_volume'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->where('data_compil_stamp >=?', $this->getStatClientInstance()->getOperation()->getOpStampStart())
                    ->where('data_compil_stamp <=?', $this->getStatClientInstance()->getDate())
                    ->order('data_compil_stamp desc')
                    ->group(array('data_compil_stamp', 'r_indicateur_id'))
//				->assemble();
                    ->query()
                    ->fetchAll(PDO::FETCH_ASSOC)
            ;

            //print_r($aResult);
            if ($aResult != false) {
                //print_r($aResult);

                foreach ($aResult as $aRow) {
                    
                    $aIndicateur = $this->getRefIndicateur($aRow['r_indicateur_id']);
                    $aData[$aRow['data_compil_stamp']][$aIndicateur['r_indicateur_libelle_court']] = $aRow['data_volume_volume'];
                }

                //print_r($aData);
                $aData = Phoenix_GraphDrawer::groupDataByIntervals($aData, $this->getStatClientInstance()->getOperation()->getOpStampStart(), $this->getStatClientInstance()->getDate(), array('date_format' => '%d/%m/%Y'));
                //print_r($aData);
            } else {
                $aData = array('' => array('' => 0));
            }
//print_r($aData);
            $this->_aData = $aData;
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder)
    {
        $aData = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addGraph(array(
            'title' => $this->getTitle(),
            'type' => 'barc',
            'size' => 'large',
            'plots' => $aData));
    }

    public function addToExcel(\PHPExcel &$oPHPExcel)
    {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();


        //if(isset())

        $ligne = 2;
        foreach ($aData as $date => $row) {

            if (!isset($aColumns)) {
                $aColumns = array_keys($row);
                $colonne = 1;
                foreach ($aColumns as $value) {
                    $sheet->setCellValueByColumnAndRow($colonne, 1, $value);
                    $colonne++;
                }
            }


            $sheet->setCellValueByColumnAndRow(0, $ligne, $date);
            $colonne = 1;
            foreach ($aColumns as $value) {
                if (isset($row[$value])) {
                    $sheet->setCellValueByColumnAndRow($colonne, $ligne, $row[$value]);
                }
                $colonne++;
            }

            $ligne++;
        }


        $sheet->setTitle($this->getTitleExcel());
    }
}

?>
