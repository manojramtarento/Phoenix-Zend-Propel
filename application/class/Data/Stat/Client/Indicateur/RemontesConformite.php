<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Remontes
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_RemontesConformite extends Data_Stat_Client_Indicateur_Abstract
{

    protected $_aData;

    public function getIndicateurId()
    {
        return array(23);
    }

    public function getTitle()
    {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_remonte_conform');
    }

    public function getData($output = 'pdf')
    {

        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

            $selectDate = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                    ->where('r_indicateur_id = ?', 23)
                    ->where('data_compil_op_id = ?', $this->getStatClientInstance()->getOpId())
                    ->order('data_compil_stamp desc')
                    ->limit(1)
            ;

            $aResult = $oAdapter->select()->from('View_CompilData', array('data_volume_segment', 'sum(data_volume_volume)'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->where('data_compil_stamp =(?)', new Zend_Db_Expr($selectDate))
                    ->group('data_volume_segment')
                    //->assemble()
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR)
            ;

            $aData = array();
            //print_r($aResult);die;

            if ($aResult != false) {
                $nbTotalPrime = 0;

                //Récupération des noms des segments en Anglais ou en Français
                $sClientDevisLang = $this->getStatClientInstance()->getOperation()->getOpDevisLang();

                if ($sClientDevisLang == 'ENG') {
                    $sIniFilePath = ROOT_PATH . '/resources/pdfgen/' . $sClientDevisLang . '.ini';
                } else {
                    //Si la langue est FRA, ou n'est pas renseigné, alors utiliser la langue Française
                    $sIniFilePath = ROOT_PATH . '/resources/pdfgen/FRA.ini';
                }

                //check if the file exists
                // Check if file exists
                if (!file_exists($sIniFilePath)) {
                    throw new Exception('The ressource file ' . $sIniFilePath . 'does not exist');
                }

                $aStatsKiesData = parse_ini_file($sIniFilePath, true);
                foreach ($aResult as $key => $val) {
                    if ($key == 1) {
                        $aData[$aStatsKiesData['stats']['remonte_des_conformite_conforme']] = $val;
                    } else {
                        $aData[$aStatsKiesData['stats']['remonte_des_conformite_non_conforme']] = $val;
                    }
                }
            } else {
                $aData[''] = 0;
            }

            $this->_aData = $aData;
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder)
    {

        $aData = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addGraph(array(
            'title' => $this->getTitle(),
            'type' => 'table-pie',
            'size' => 'mini',
            'plots' => $aData));
    }

    public function addToExcel(\PHPExcel &$oPHPExcel)
    {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();
        $ligne = 1;
        foreach ($aData as $key => $value) {
            $sheet->setCellValueByColumnAndRow(0, $ligne, $key);
            $sheet->setCellValueByColumnAndRow(1, $ligne, $value);
            $ligne++;
        }

        $sheet->setTitle($this->getTitleExcel());
    }
}

?>
