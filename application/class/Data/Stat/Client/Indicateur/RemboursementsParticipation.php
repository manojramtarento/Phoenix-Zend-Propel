<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RemboursementsParticipation
 *
 * @author info20
 */
class Data_Stat_Client_Indicateur_RemboursementsParticipation extends Data_Stat_Client_Indicateur_Abstract {

    protected $_aData;

    public function getIndicateurId() {
        return array(6, 5);
    }

    public function getTitle() {
        return Phoenix_Translation_Files::getPdf($this->getStatClientInstance()->getOperation()->getOpDevisLang(), 'stats', 'header_remb_participation');
    }

    public function getData($output='pdf') {

        if (!isset($this->_aData)) {
            $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

            $aResult1 = $oAdapter->select()->from('View_CompilData', array('r_indicateur_id', 'sum(data_volume_volume) as data_volume_volume'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id = ?', 5)
                    ->where('data_compil_stamp >=?', $this->getStatClientInstance()->getOperation()->getOpStampStart())
                    ->where('data_compil_stamp <=?', $this->getStatClientInstance()->getDate())
                    //->assemble()
                    ->group('r_indicateur_id')
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR)
            ;
            //echo $aResult;die;
            $aResult2 = $oAdapter->select()->from('View_CompilData', array('r_indicateur_id', 'data_volume_volume as data_volume_volume'))
                    ->where('data_compil_op_id=?', $this->getStatClientInstance()->getOpId())
                    ->where('r_indicateur_id = ?', 6)
                    ->where('data_compil_stamp >=?', $this->getStatClientInstance()->getOperation()->getOpStampStart())
                    ->where('data_compil_stamp <=?', $this->getStatClientInstance()->getDate())
                    ->limit(1)
                    ->order('data_compil_stamp desc')
                    //->assemble()
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR)
            ;

            $aResult = $aResult1 + $aResult2;

            foreach ($this->getIndicateurId() as $id) {
                if (!isset($aResult[$id])) {
                    $aResult[$id] = 0;
                }

                $aIndicateur = $this->getRefIndicateur($id);
                $aData[$aIndicateur['r_indicateur_libelle_court']] = $aResult[$id];
            }

            /* foreach($aResult as $id=>$val){
              $aIndicateur=$this->getRefIndicateur($id);
              $aData[$aIndicateur['r_indicateur_libelle_court']]=$val;
              } */

            //print_r($aData);die;

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
        foreach ($aData as $key => $value) {
            $sheet->setCellValueByColumnAndRow(0, $ligne, $key);
            $sheet->setCellValueByColumnAndRow(1, $ligne, $value);
            $ligne++;
        }

        $sheet->setTitle($this->getTitleExcel());
    }

}

?>
