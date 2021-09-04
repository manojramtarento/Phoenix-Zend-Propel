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
class Data_Stat_Client_Indicateur_ParticipationsNombre extends Data_Stat_Client_Indicateur_Abstract {

    protected $_aData;

    public function getIndicateurId() {
        return array(1, 2, 3, 4);
    }

    public function getTitle() {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'nb_participations');
    }

    public function getData($output='pdf') {

        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

            $data = $oAdapter->select()->from('View_CompilData', 'sum(data_volume_volume)')
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', $this->getIndicateurId())
                    ->where('data_compil_stamp >=?', $this->getStatClientInstance()->getOperation()->getOpStampStart())
                    ->where('data_compil_stamp <=?', $this->getStatClientInstance()->getDate())
                    //->assemble()
                    ->query()
                    ->fetchColumn()
            ;

            //echo $data;die;
            if ($data != false) {
                $this->_aData = $data;
            } else {
                $this->_aData = 0;
            }
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder) {

        $data = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addNbParticipations($data);
    }

    public function addToExcel(\PHPExcel &$oPHPExcel) {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();
        $sheet->setCellValueByColumnAndRow(0, 1, 'Nombre de participations');
        $sheet->setCellValueByColumnAndRow(1, 1, $aData);
        $sheet->setTitle($this->getTitleExcel());
    }

}

?>