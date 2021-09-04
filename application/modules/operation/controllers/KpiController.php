<?php

class Operation_KpiController extends My_Controller_Action
{

    public function indexAction()
    {

        // On récupère l'opération en cours
        $aParams = $this->_request->getParams();
        $sOpId = $aParams['op_id'];
        $oOperation = OperationsQuery::create()->filterByPrimaryKey($sOpId)->findOne();
        if ($oOperation instanceof Operations) {
            $this->view->operation = $oOperation;
        } else {
            $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
            return $oZendControllerActionHelperRedirector->gotoUrlAndExit('/operation/listing/index');
        }

        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Arthur" est désactivée'), 'error');
            return $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $sOpId));
        }

        // Instance de l'objet requête pour chercher les informations sur Arthur
        $oAdapter = $this->_helper->DbAdapters()->getArthurConsos();
        $oAdapter->setFetchMode(Zend_Db::FETCH_OBJ);

        // Récupération des participations courriers
        $this->view->participation_courriers = Phoenix_ExternalConnection_Arthur::getInstance()->getMailsBulksByOperationId($sOperationId);

        // Récupération des participation appels
        $this->view->participation = $oAdapter->fetchPairs("SELECT type, volume FROM v_participation_appels WHERE op_id = ?", $sOpId);
        $this->view->total_dem = $oAdapter->fetchOne("SELECT SUM(volume) FROM v_dem_repart_type_integration WHERE op_id = ? ", $sOpId);

        // Répartition des demandes traites
        $this->view->total = $oAdapter->fetchOne("SELECT SUM(volume) FROM v_dem_last_status WHERE op_id = ? ", $sOpId);
        $this->view->conformes = $oAdapter->fetchOne("SELECT SUM(volume) FROM v_dem_last_status WHERE op_id = ? AND conforme = 1 ", $sOpId);
        $this->view->cf_avec_primes = $oAdapter->fetchOne("SELECT volume FROM v_dem_last_status WHERE op_id = ? AND conforme = 1 AND prime_presente = 1 ", $sOpId);
        $this->view->cf_sans_primes = $oAdapter->fetchOne("SELECT volume FROM v_dem_last_status WHERE op_id = ? AND conforme = 1 AND prime_presente = 0 ", $sOpId);

        $this->view->non_conformes = $oAdapter->fetchOne("SELECT SUM(volume) FROM v_dem_last_status WHERE op_id = ? AND conforme = 0", $sOpId);
        $this->view->remediables = $oAdapter->fetchOne("SELECT SUM(volume) FROM v_dem_last_status WHERE op_id = ? AND conforme = 0 AND remediable = 1 ", $sOpId);
        $this->view->irremediables = $oAdapter->fetchOne("SELECT SUM(volume) FROM v_dem_last_status WHERE op_id = ? AND conforme = 0 AND remediable = 0 ", $sOpId);
        $this->view->sans_statut = $oAdapter->fetchOne("SELECT SUM(volume) FROM v_dem_last_status WHERE op_id = ? AND conforme is null ", $sOpId);

        // Répartition par support de participations (dernier etat)
        $this->view->repartition_support = $oAdapter->select()->from('v_dem_last_repart_type_integration')
                  ->where('op_id = ?', $sOpId)
                  ->order('volume desc')
                  ->query()->fetchAll();

        // Répartition par support de participations (total demandes)
        $this->view->repartition_dem_support = $oAdapter->select()->from('v_dem_repart_type_integration')
                  ->where('op_id = ?', $sOpId)
                  ->order('volume desc')
                  ->query()->fetchAll();

        // Répartition par primes
        $this->view->repartition_primes = $oAdapter->select()->from('v_dem_last_repart_cf_primes')
                  ->where('op_id = ?', $sOpId)
                  ->order('volume desc')
                  ->query()->fetchAll();

        // Répartition par motif remediable
        $this->view->repartition_remediables = $oAdapter->select()->from('v_dem_last_repart_nc_rem')
                  ->where('op_id = ?', $sOpId)
                  ->order('volume desc')
                  ->query()->fetchAll();

        // Répartition par motif irremediable
        $this->view->repartition_irremediables = $oAdapter->select()->from('v_dem_last_repart_nc_irrem')
                  ->where('op_id = ?', $sOpId)
                  ->order('volume desc')
                  ->query()->fetchAll();

        // Export
        if ($this->getParam('format') == 'csv') {
            $iRow = 1;
            $oPHPExcel = new PHPExcel();
            $oSheet = $oPHPExcel->getActiveSheet();

            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Participations Courriers'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->participation_courriers) ? $this->view->participation_courriers : 0);
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Participations WEB'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->participation_web) ? $this->view->participation_web : 0);
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Participations SMS'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->participation_sms) ? $this->view->participation_sms : 0);
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Participations AUDIOTEL'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->participation_audiotel) ? $this->view->participation_audiotel : 0);
            $iRow++;
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Nombre total de demandes saisies'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->total_dem) ? $this->view->total_dem : 0);
            $iRow++;
            if (! empty($this->view->repartition_dem_support)) {
                $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Répartition par support de participations'));
                foreach ($this->view->repartition_dem_support as $oData) {
                    $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $oData->type_integration_libelle);
                    $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($oData->volume) ? $oData->volume : 0);
                }
                $iRow++;
                $iRow++;
            }
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Nombre total de dossiers uniques traités'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->total) ? $this->view->total : 0);
            $iRow++;
            if (! empty($this->view->repartition_support)) {
                $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Répartition par support de participations'));
                foreach ($this->view->repartition_support as $oData) {
                    $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $oData->type_integration_libelle);
                    $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($oData->volume) ? $oData->volume : 0);
                }
                $iRow++;
                $iRow++;
            }
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Conformes'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->conformes) ? $this->view->conformes : 0);
            $iRow++;
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Conformes avec primes'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->cf_avec_primes) ? $this->view->cf_avec_primes : 0);
            $iRow++;
            $iRow++;
            if (! empty($this->view->repartition_primes)) {
                $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Répartition par combinaison de primes'));
                foreach ($this->view->repartition_primes as $oData) {
                    $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $oData->primes);
                    $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($oData->volume) ? $oData->volume : 0);
                }
                $iRow++;
                $iRow++;
            }
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Conformes sans primes'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->cf_sans_primes) ? $this->view->cf_sans_primes : 0);
            $iRow++;
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Non conformes'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->non_conformes) ? $this->view->non_conformes : 0);
            $iRow++;
            $iRow++;
            if (! empty($this->view->repartition_remediables)) {
                $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('NC Remédiables'));
                $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->remediables) ? $this->view->remediables : 0);
                $iRow++;
                $iRow++;
                $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Répartition par premier motif remédiable'));
                foreach ($this->view->repartition_remediables as $oData) {
                    $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $oData->anomalies_libelle);
                    $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($oData->volume) ? $oData->volume : 0);
                }
                $iRow++;
                $iRow++;
            }
            if (! empty($this->view->repartition_irremediables)) {
                $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('NC Irremédiables'));
                $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->irremediables) ? $this->view->irremediables : 0);
                $iRow++;
                $iRow++;
                $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Répartition par premier motif irremédiable'));
                foreach ($this->view->repartition_irremediables as $oData) {
                    $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $oData->anomalies_libelle);
                    $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($oData->volume) ? $oData->volume : 0);
                }
                $iRow++;
                $iRow++;
            }
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $this->view->translate('Demandes d\'informations'));
            $oSheet->setCellValueByColumnAndRow(1, $iRow, ! empty($this->view->sans_statut) ? $this->view->sans_statut : 0);

            $oPHPExcelWriterExcel5 = new PHPExcel_Writer_Excel5($oPHPExcel);

            $sFilename = My_Env::getInstance()->getConfig()->path->tmp . '/kpi_' . $oOperation->getOpNumber() . '.xls';
            $oPHPExcelWriterExcel5->save($sFilename);

            My_File_Transfer::getInstance()->send($sFilename);
        }
    }

}
