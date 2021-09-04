<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RemontesTaux
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_RemontesTaux extends Data_Stat_Client_Indicateur_Abstract {

    protected $_aData;

    public function getIndicateurId() {
        return array(4, 21);
    }

    public function getTitle() {
        return 'Nombre de participations';
    }

    public function getData($output='pdf') {

        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

            $nbCourriers = $oAdapter->select()
                    ->from('View_CompilData', 'sum(data_volume_volume)')
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', 4)
                    //->assemble()
                    ->query()
                    ->fetchColumn()
            ;

            $qteProduitsEstim = $oAdapter->select()
                    ->from('View_CompilData', 'data_volume_volume')
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id in (?)', 21)
                    //->assemble()
                    ->limit(1)
                    ->order('data_compil_stamp desc')
                    ->query()
                    ->fetchColumn()
            ;

            //echo $qteProduitsEstim.' / '.$nbCourriers;die;


            if (!$nbCourriers) {
                $data = 0;
            } elseif ($qteProduitsEstim != false) {
                $data = ($nbCourriers / $qteProduitsEstim) * 100;
            } else {
                $data = 0;
            }

            $this->_aData = number_format($data, 2);
        }

        return $this->_aData;
    }

    public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder) {

        $data = $this->getData();

        $oPhoenix_Stats_Xml_Builder->addTauxRemonte($data);
    }

    public function addToExcel(\PHPExcel &$oPHPExcel) {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();
        $sheet->setCellValueByColumnAndRow(0, 1, 'Taux de remontés');
        $sheet->setCellValueByColumnAndRow(1, 1, $aData);
        $sheet->setTitle($this->getTitleExcel());
    }

}

?>
