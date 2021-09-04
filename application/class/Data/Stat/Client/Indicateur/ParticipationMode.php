<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeParticipation
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_ParticipationMode extends Data_Stat_Client_Indicateur_Abstract {

    protected $_aData;

    public function getIndicateurId() {
        return array(27, 28);
    }

    public function getTitle() {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_particiation_mode');
        return 'Mode de participation';
    }

    public function getData($output='pdf') {

        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

            $selectDate = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                    ->where('data_compil_op_id = ?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->order('data_compil_stamp desc')
                    ->limit(1)
            ;

            $aResult = $oAdapter->select()->from('View_CompilData', array('r_indicateur_id', 'sum(data_volume_volume) as data_volume_volume'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->where('data_compil_stamp =(?)', new Zend_Db_Expr($selectDate))
                    ->group('r_indicateur_id')
                    ->order('data_volume_volume desc')
                    //->assemble()
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR)
            ;

            //print_r($aResult);die;

            $aData['web'] = 0;
            // 34891 : récupération de la traduction autre
            $sOtherLibelle = Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_particiation_mode_autre');
            $aData[$sOtherLibelle] = 0;

            if ($aResult != false) {
                if (isset($aResult[27])) {
                    $aData['web'] = $aResult[27];

                    if (isset($aResult[28])) {
                        $aData[$sOtherLibelle] = $aResult[28] - $aResult[27];
                    }
                }
            }

            $this->_aData = $aData;
        }
        
        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder) {
        $aData = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addGraph(array(
            'title' => $this->getTitle(),
            'type' => 'pie',
            'size' => 'mini',
            'plots' => $aData));
    }

    public function addToExcel(\PHPExcel &$oPHPExcel) {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();

        $sheet->setCellValueByColumnAndRow(0, 1, 'mode');
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
