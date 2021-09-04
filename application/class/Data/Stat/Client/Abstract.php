<?php

abstract class Data_Stat_Client_Abstract
{

    /**
     *
     * @var Phoenix_Stats_Xml_Builder
     */
    private $_oPhoenixStatsXmlBuilder;

    /**
     *
     * @var PHPExcel
     */
    protected $_oPHPExcel;
    protected $_numOp;
    protected $_opId;

    /**
     * statistiques générées à date
     * @var type
     */
    protected $_date;
    protected $_aClassIndicateurs;
    protected $_sXml;
    protected $_oOperation;

    protected $_aIndciteurObjects;


    /**
     *
     * @param Operations|integer $refOp objet propel ou numéro d'opération
     * @param string $date date référence pour génération des stats
     */
    public function __construct($refOp, $date)
    {
        $this->_date = $date;

        if ($refOp instanceof Operations) {
            $this->_initFromPropel($refOp);
        } else {
            $this->_initFromSql($refOp);
        }
    }

    protected function _initFromSql($numOp)
    {
        $this->_numOp = $numOp;

        $this->_oPhoenixStatsXmlBuilder = new Phoenix_Stats_Xml_Builder();

        $row = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()
                        ->from('operations')
                        ->join(array('users_dc' => 'users'), 'users_dc.user_id=operations.op_dc_id', array('nom_contact_dc' => 'users_dc.user_nom', 'email_contact_dc' => 'users_dc.user_mail', 'tel_contact_dc' => 'users_dc.user_phone'))
                        ->join(array('users_cp' => 'users'), 'users_cp.user_id=operations.op_cp_id', array('nom_contact_cp' => 'users_dc.user_nom', 'email_contact_cp' => 'users_dc.user_mail', 'tel_contact_cp' => 'users_dc.user_phone'))
                        ->where('op_number=?', $this->_numOp)->query()->fetch(zend_db::FETCH_BOTH);

        $this->_opId = $row['op_id'];

        $oOperations = new Operations();
        $oOperations->hydrate($row);


        $aData = array(
            'lang' => $oOperations->getOpDevisLang(),
            'contact_dc' => array('nom_contact' => $row['nom_contact_dc'], 'email_contact' => $row['email_contact_dc'], 'tel_contact' => $row['tel_contact_dc'], 'fax_contact' => Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER)),
            'contact_cp' => array('nom_contact' => $row['nom_contact_cp'], 'email_contact' => $row['email_contact_cp'], 'tel_contact' => $row['tel_contact_cp'], 'fax_contact' => Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER)),
            'nom_offre' => $row['op_libelle'],
            'num_operation' => $row['op_number'],
            'operation_conso_start' => $row['op_dateConso_start'],
            'operation_conso_end' => $row['op_dateConso_end'],
            'operation_end_postale' => $row['op_datePoste_end'],
            'operation_gestion_end' => $row['op_stamp_end']
        );

        if ($oOperations->getOpDevisLang() == RLanguages::LANG_FRA) {
            $aData['num_tva'] = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_VAT_NUMBER);
        } else {
            $aData['num_tva'] = $oOperations->getClientFactureOptions()->getClFactTvaintra();
        }

        $this->_oPhoenixStatsXmlBuilder->addEntete($aData);


        $this->_oOperation = $oOperation;
    }

    protected function _initFromPropel(Operations $oOperation)
    {
        $this->_numOp = $oOperation->getOpNumber();

        $this->_oPhoenixStatsXmlBuilder = new Phoenix_Stats_Xml_Builder();

        $this->_opId = $oOperation->getOpId();

        $oUserDc = ($oOperation->getUserDC() != null ? $oOperation->getUserDC() : new Users());
        $oUserCp = ($oOperation->getUserCp() != null ? $oOperation->getUserCp() : new Users());


        $aData = array(
            'lang' => $oOperation->getOpDevisLang(),
            'contact_dc' => array('nom_contact' => $oUserDc->getUserNomPrenom(), 'email_contact' => $oUserDc->getUserMail(), 'tel_contact' => $oUserDc->getUserPhone(), 'fax_contact' => Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER)),
            'contact_cp' => array('nom_contact' => $oUserCp->getUserNomPrenom(), 'email_contact' => $oUserCp->getUserMail(), 'tel_contact' => $oUserCp->getUserPhone(), 'fax_contact' => Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER)),
            'nom_offre' => $oOperation->getOpLibelle(),
            'num_operation' => $oOperation->getOpNumber(),
            'operation_conso_start' => $oOperation->getOpDateconsoStart(),
            'operation_conso_end' => $oOperation->getOpDateconsoEnd(),
            'operation_end_postale' => $oOperation->getOpDateposteEnd(),
            'operation_gestion_end' => $oOperation->getOpStampEnd(),
            'date_stats' => $this->getDate()
        );

        $lang = $oOperation->getOpDevisLang();
        if (empty($lang) || $lang == RLanguages::LANG_FRA) {
            $aData['num_tva'] = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_VAT_NUMBER);
        } else {
            $aData['num_tva'] = $oOperation->getClientFactureOptions()->getClFactTvaintra();
        }

        $this->_oPhoenixStatsXmlBuilder->addEntete($aData);
        $this->_oOperation = $oOperation;
    }

    public function getNumOp()
    {
        return $this->_numOp;
    }

    public function getOpId()
    {
        return $this->_opId;
    }

    public function getDate()
    {
        return $this->_date;
    }

    /**
     *
     * @return Operations
     */
    public function getOperation()
    {
        return $this->_oOperation;
    }


    /**
     *
     * @return array
     */
    public function getIndicateurObjects()
    {

        if (! isset($this->_aIndciteurObjects)) {
            foreach ($this->_aClassIndicateurs as $sClassIndicateur) {
                $this->_aIndciteurObjects[] = new $sClassIndicateur($this);
            }
        }

        return $this->_aIndciteurObjects;
    }



    /**
     * retourne le flux xml
     * @return string
     */
    public function getXml()
    {

        if (! isset($this->_sXml)) {
            foreach ($this->getIndicateurObjects() as $sClassIndicateur) {
                if ($sClassIndicateur instanceof Data_Stat_Client_Indicateur_BilanFinancier && $this->getOperation()->getOperationsExt()->getOptStatHideBilanFinancier() == true) {
                    continue;
                }
                $oIndicateur = new $sClassIndicateur($this);
                $oIndicateur->addNodeXmlToDoc($this->_oPhoenixStatsXmlBuilder);
            }
            $this->_sXml = $this->_oPhoenixStatsXmlBuilder->getXml();
        }

        return $this->_sXml;
    }

    /**
     *
     * @return PHPExcel
     */
    public function getExcel()
    {
        if (! isset($this->_oPHPExcel)) {
            $this->_oPHPExcel = new PHPExcel();
            $this->_oPHPExcel->removeSheetByIndex();
            foreach ($this->getIndicateurObjects() as $sClassIndicateur) {
                $oIndicateur = new $sClassIndicateur($this);
                $oIndicateur->addToExcel($this->_oPHPExcel);
            }
        }

        return $this->_oPHPExcel;
    }

    /**
     * archivage du fichier excel pour opération concernée
     * @return \Files
     */
    public function makeExcelArchive()
    {
        $micro = microtime(true) - time();
        $filename = 'stat_' . $this->_numOp . '_' . date('Y-m-d_H-i-s-' . round($micro * 10000)) . '.xlsx';

        $config = Zend_Registry::get('config');
        $oPHPExcel_Writer_Excel2007 = new PHPExcel_Writer_Excel2007($this->getExcel());
        $directory = $config->my->fileupload->directory;
        $oPHPExcel_Writer_Excel2007->save($directory . '/' . $filename);

        $oFile = new Files();
        $oFile->setFileName($filename)
                ->setFileEntityName('operations')
                ->setFileCategoryId(RFileCategories::STAT_EXCEL)
                ->setFileEntityId($this->_opId)
                ->save();

        return $oFile;
    }

    /**
     * archivage du fichier xml dans dossier files pour l'opération concernée
     * @return \Files
     */
    public function makeXmlArchive()
    {

        $micro = microtime(true) - time();
        $filename = 'stat_' . $this->_numOp . '_' . date('Y-m-d_H-i-s-' . round($micro * 10000)) . '.xml';

        $config = Zend_Registry::get('config');
        $directory = $config->my->fileupload->directory;
        file_put_contents($directory . '/' . $filename, $this->getXml());


        $oFile = new Files();
        $oFile->setFileName($filename)
                ->setFileEntityName('operations')
                ->setFileCategoryId(RFileCategories::STAT_PDF)
                ->setFileEntityId($this->_opId)
                ->save();

        return $oFile;
    }

    /**
     *
     * @param string $sDest
     *  <br>I: send the file inline to the browser (default). The plug-in is used if available. The name given by name is used when one selects the "Save as" option on the link generating the PDF.
     *  <br>D: send to the browser and force a file download with the name given by name.
     *  <br>F: save to a local server file with the name given by name.
     *  <br>S: return the document as a string (name is ignored).
     *  <br>FI: equivalent to F + I option
     *  <br>FD: equivalent to F + D option
     *  <br>E: return the document as base64 mime multi-part email attachment (RFC 2045)
     */
    public function getPdf($sDest)
    {
        $oPdf = new Phoenix_PDFGen_Statistics();
        $oPdf->initializeFromXml($this->getXml(), array('title' =>'Statistiques'));
        $oPdf->generate();
        return $oPdf->Output('stats.pdf', $sDest);
    }

}
