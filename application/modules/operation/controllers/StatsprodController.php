<?php

class Operation_StatsprodController extends My_Controller_Action {

    public function indexAction() {
        $aParams = $this->_request->getParams();
        
        if(!Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_COMPIL)){            
            $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Compil UO/Data" est désactivée'), 'error');
            return $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $aParams['op_id']));
        }
        
        $oOperation = OperationsQuery::create()->filterByPrimaryKey($aParams['op_id'])->findOne();

        if ($oOperation instanceof Operations) {
            $this->view->operation = $oOperation;
        } else {
            $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
            $oZendControllerActionHelperRedirector->gotoUrlAndExit('/operation/listing/index');
        }

        $this->view->courriers_recus = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 29);
        $this->view->courriers_saisis = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 30);
        $this->view->conforme = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 31);

        $this->view->nc_initiaux = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 32);


        $this->view->nc_rem_initiaux = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 33, true);
        $this->view->nc_rem_initiaux['total'] = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 33);

        $this->view->nc_irrem_initiaux = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 34, true);
        $this->view->nc_irrem_initiaux['total'] = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 34);

        $this->view->reclamations = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 41, true);
        $this->view->reclamations['total'] = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 41);

        $this->view->nc_plus = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 42, true);
        $this->view->nc_plus['total'] = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 42);

        $this->view->participations_SMS = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 1);
        $this->view->participations_WEB = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 2);
        $this->view->participations_AUDIOTEL = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 3);
        $this->view->participations_TOTAL = $this->view->participations_SMS + $this->view->participations_WEB + $this->view->participations_AUDIOTEL;


        $this->view->gagnant_jeux = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 40, true);
        $this->view->gagnant_jeux['total'] = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 40);

        $this->view->nb_anomalies = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 44, true);
        $this->view->nb_anomalies_total = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 44);

        $this->view->montant_remb = Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 43);


        if ($this->getParam('format') == 'csv') {
            $iRow = 1;
            $oPHPExcel = new PHPExcel();
            $sheet = $oPHPExcel->getActiveSheet();
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('courriers reçus'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->courriers_recus);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('courriers saisis'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->courriers_saisis);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('conforme'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->conforme);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('nc initiaux'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->nc_initiaux);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('nc rem initiaux'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->nc_rem_initiaux['total']);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('nc rem initiaux'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, Data_Compil_Data_Reader::getIndicateurValue($aParams['op_id'], 34));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC REM devenu CF (suite NC+ ou recla)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_rem_initiaux['DEVENU_CF']) ? $this->view->nc_rem_initiaux['DEVENU_CF'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC REM resté NC REM (pas d\'état supplémentaire)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_rem_initiaux['RESTE_NC_REM']) ? $this->view->nc_rem_initiaux['RESTE_NC_REM'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC REM resté NC REM (suite NC+ ou recla)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_rem_initiaux['REDEVENU_NC_REM']) ? $this->view->nc_rem_initiaux['REDEVENU_NC_REM'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC REM devenu NC IRREM (suite NC+ ou recla)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_rem_initiaux['DEVENU_NC_IRREM']) ? $this->view->nc_rem_initiaux['DEVENU_NC_IRREM'] : 0, 34);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('NC IRREM initiaux'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->nc_irrem_initiaux['total']);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('otal NC IRREM resté NC IRREM (pas d\'état supplémentaire)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_irrem_initiaux['RESTE_NC_IRREM']) ? $this->view->nc_irrem_initiaux['RESTE_NC_IRREM'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC IRREM resté NC IRREM (suite NC+ ou récla)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_rem_initiaux['REDEVENU_NC_IRREM']) ? $this->view->nc_irrem_initiaux['REDEVENU_NC_IRREM'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC IRREM devenu CONF (suite NC+ ou recla)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_irrem_initiaux['DEVENU_CONF']) ? $this->view->nc_irrem_initiaux['DEVENU_CONF'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC IRREM devenu NC REM (suite NC+ ou recla)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_irrem_initiaux['DEVENU_NC_REM']) ? $this->view->nc_irrem_initiaux['DEVENU_NC_REM'] : 0, 34);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Réclamations'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->reclamations['total']);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC IRREM resté NC IRREM (pas d\'état supplémentaire)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->reclamations['AVEC_REMB']) ? $this->view->reclamations['AVEC_REMB'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC IRREM resté NC IRREM (suite NC+ ou récla)'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->reclamations['SANS_REMB']) ? $this->view->reclamations['SANS_REMB'] : 0, 34);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Total NC+'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->nc_plus['total']);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC+ ayant engendré un remboursement ou une dotation'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_plus['DEVENU_CONF']) ? $this->view->nc_plus['DEVENU_CONF'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Total NC+ restant non conforme'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->nc_plus['DEVENU_NON_CONF']) ? $this->view->nc_plus['DEVENU_NON_CONF'] : 0, 34);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Particpations'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->participations_TOTAL);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Web'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->participations_WEB) ? $this->view->participations_WEB : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Audiotel'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->participations_AUDIOTEL) ? $this->view->participations_AUDIOTEL : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('SMS'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->participations_SMS) ? $this->view->participations_SMS : 0, 34);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Gagnants'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->gagnant_jeux['total']);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Web'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->gagnant_jeux['WEB']) ? $this->view->gagnant_jeux['WEB'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Audiotel'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->gagnant_jeux['AUDIOTEL']) ? $this->view->gagnant_jeux['AUDIOTEL'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('SMS'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->gagnant_jeux['SMS']) ? $this->view->gagnant_jeux['SMS'] : 0, 34);
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Anomalies'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->nb_anomalies_total);
            foreach ($this->view->nb_anomalies as $libelle => $nb_anomalies) {
                $sheet->setCellValueByColumnAndRow(0, ++$iRow, $libelle);
                $sheet->setCellValueByColumnAndRow(1, $iRow, isset($nb_anomalies) ? $nb_anomalies : 0, 34);
            }
            $iRow++;
            $iRow++;
            $sheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Montants remboursés'));
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('total'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, $this->view->nc_plus['total']);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Minimum'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->montant_remb['MONTANT_MIN']) ? $this->view->montant_remb['MONTANT_MIN'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Maximum'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->montant_remb['MONTANT_MAX']) ? $this->view->montant_remb['MONTANT_MAX'] : 0, 34);
            $sheet->setCellValueByColumnAndRow(0, ++$iRow, $this->view->translate('Moyen'));
            $sheet->setCellValueByColumnAndRow(1, $iRow, isset($this->view->montant_remb['MONTANT_AVG']) ? $this->view->montant_remb['MONTANT_AVG'] : 0, 34);
            




            $oPHPExcelWriterExcel5 = new PHPExcel_Writer_Excel5($oPHPExcel);

            $pFilename = My_Env::getInstance()->getConfig()->path->tmp . '/stats_prod_' . $oOperation->getOpNumber() . '.xls';
            $oPHPExcelWriterExcel5->save($pFilename);

            My_File_Transfer::getInstance()->send($pFilename);
        }
    }

}