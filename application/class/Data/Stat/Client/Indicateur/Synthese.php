<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParticipationsNombre
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_Synthese extends Data_Stat_Client_Indicateur_Abstract {

    protected $_aData;

    public function getIndicateurId() {
        return array(1, 2, 3, 4);
    }

    public function getTitle() {
        return 'Synthese';
    }

    public function getData($output='pdf') {

        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

            $dataNbParticipants = $oAdapter->select()->from('View_CompilData', 'sum(data_volume_volume)')
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->where('data_compil_stamp >=?', $this->getStatClientInstance()->getOperation()->getOpStampStart())
                    ->where('data_compil_stamp <=?', $this->getStatClientInstance()->getDate())
                    //->assemble()
                    ->query()
                    ->fetchColumn()
            ;


            $selectDate = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                    ->where('r_indicateur_id = ?', 23)
                    ->where('data_compil_op_id = ?', $this->getStatClientInstance()->getOpId())
                    ->order('data_compil_stamp desc')
                    ->limit(1)
            ;

            $aDataNbGagnants = $oAdapter->select()->from('View_CompilData', array('sum(data_volume_volume)'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                ->where('r_indicateur_id = ?', 23)
                    ->where('data_compil_stamp =(?)', new Zend_Db_Expr($selectDate))
                    ->where('data_volume_segment =1')
                    //->assemble()
                    ->query()
                    ->fetchColumn()
            ;
            $oPhoenix_Translation_Files = Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats');
            //echo $data;die;
            if ($dataNbParticipants != false) {
                $aData[$oPhoenix_Translation_Files['header_nb_participants']] = $dataNbParticipants;
            } else {
                $aData[$oPhoenix_Translation_Files['header_nb_participants']] = 0;
            }

            if ($aDataNbGagnants != false) {
                $aData[$oPhoenix_Translation_Files['header_nb_gagnants']] = $aDataNbGagnants;
            } else {
                $aData[$oPhoenix_Translation_Files['header_nb_gagnants']] = 0;
            }

            $aData[$oPhoenix_Translation_Files['header_nb_perdants']] = $aData[$oPhoenix_Translation_Files['header_nb_participants']] - $aData[$oPhoenix_Translation_Files['header_nb_gagnants']];

            $this->_aData = $aData;
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder) {

        $aData = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addGraph(array(
            'title' => $this->getTitle(),
            'type' => 'table',
            'size' => 'mini',
            'plots' => $aData));
    }

    public function addToExcel(\PHPExcel &$oPHPExcel) {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();
        $sheet->setCellValueByColumnAndRow(0, 1, 'Synthese');
        $i = 2;
        foreach ($aData as $label => $val) {
            $sheet->setCellValueByColumnAndRow(0, $i, $label);
            $sheet->setCellValueByColumnAndRow(1, $i, $val);
            $i++;
        }

        $sheet->setTitle($this->getTitleExcel());
    }

}

?>