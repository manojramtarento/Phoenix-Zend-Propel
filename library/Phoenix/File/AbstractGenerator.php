<?php

abstract class Phoenix_File_AbstractGenerator
{

    /**
     * @var array
     */
    protected static $instances = array();

    /**
     * @var Zend_Translate
     */
    protected $translate;

    final private function __construct()
    {
    }
    final private function __clone()
    {
    }
    final private function __wakeup()
    {
    }

    /**
     * @return Phoenix_File_AbstractGenerator
     */
    final public static function getInstance() : Phoenix_File_AbstractGenerator
    {
        $sClassName = get_called_class();
        self::$instances[$sClassName] = self::$instances[$sClassName] ?? new static();
        return self::$instances[$sClassName];
    }

    /**
     * @param string $sFileName
     * @param array|\Traversable $aData
     * @param boolean $bFormatForExcel, default true
     * @return string
     * @throws \InvalidArgumentException
     */
    protected function generateCsvFileFromData(string $sFileName, $aData, $bFormatForExcel = true) : string
    {
        if (! $aData instanceof \Traversable && ! is_array($aData)) {
            throw new \InvalidArgumentException('Argument "$aData" expects an instance of "\Traversable" or an array, "'.(is_object($aData)?get_class($aData):gettype($aData)).'" given');
        }

        $rOuputHandle = fopen($sTmpFilePath = $this->getTmpDirectoryPath().DIRECTORY_SEPARATOR.$sFileName, 'w');
        $iIterator = 0;
        foreach ($aData as $aData) {
            $iIterator++;
            // Add utf8 bom & header
            if ($iIterator === 1) {
                if ($bFormatForExcel) {
                    fwrite($rOuputHandle, chr(239) . chr(187) . chr(191));
                }
                fputcsv($rOuputHandle, array_keys($aData), ';');
            }
            // Filter data to be weel displayed in Excel
            if ($bFormatForExcel) {
                $aData = array_map(function ($sData) {
                    if (is_float($sData) || (is_numeric($sData) && strpos($sData, '.') !== false)) {
                        $sData = number_format($sData, 2, ',', ' ');
                    }
                    return $sData;
                }, $aData);
            }
            // Write line
            fputcsv($rOuputHandle, $aData, ';');
        }
        fclose($rOuputHandle);
        return $sTmpFilePath;
    }

    /**
     * @param string $sFilePath
     * @param array $aEmails
     * @param string $sSubject
     * @param string $sBody
     * @param string $sMimeType
     */
    protected function sendFileByEmail(string $sFilePath, array $aEmails, string $sSubject, string $sBody = null, $bCompress = true, $sMimeType = null)
    {
        $sCompanyName = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME);
        $sBody = $sBody?:$this->getTranslate()->translate(
            'Bonjour,' . PHP_EOL . PHP_EOL .
            'Vous trouverez les informations attendues en PJ à cet email.' . PHP_EOL . PHP_EOL .
            'En vous souhaitant bonne réception,' . PHP_EOL . PHP_EOL . 'L\'équipe '.$sCompanyName
        );

        $sFileName = basename($sFilePath);
        if ($bCompress) {
            $sFileName .= '.zip';
            $sFileContent = $this->compressFile($sFilePath);
            $sMimeType = 'application/octet-stream';
        } else {
            $sFileContent = file_get_contents($sFileContent);
            $rFinfo = finfo_open(FILEINFO_MIME_TYPE);
            $sMimeType = finfo_file($rFinfo, $sFilePath);
            finfo_close($rFinfo);
        }

        Phoenix_MailSender::sendMail(
            $sSubject,
            $sBody,
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_APPLICATION),
            $sCompanyName,
            array('to' => $aEmails),
            array(array('name' => $sFileName,'content' => $sFileContent,'mimeType' => $sMimeType))
        );
    }

    /**
     * @param string $sFilePath
     * @return string
     * @throws \RuntimeException
     */
    protected function compressFile(string $sFilePath) : string
    {
        // Compress file
        $sZipFilePath = tempnam(sys_get_temp_dir(), uniqid());
        $oZip = new \ZipArchive();
        if (! $oZip->open($sZipFilePath, \ZipArchive::CREATE)) {
            throw new \RuntimeException('Error occured while creating archive "'.$sZipFilePath.'"');
        }
        $oZip->addFile($sFilePath, basename($sFilePath));
        $oZip->close();
        $sZipContent = file_get_contents($sZipFilePath);
        unlink($sZipFilePath);
        return $sZipContent;
    }

    /**
     * Return translator, lazy load if undefined
     *
     * @return Zend_Translate
     * @throws \LogicException
     */
    protected function getTranslate() : Zend_Translate
    {
        // Lazy load translator if undefined
        if ($this->translate === null) {
            if (! Zend_Registry::isRegistered('Zend_Translate')) {
                throw new \LogicException('"Zend_Translate" must be defined in Registry');
            }
            $this->translate = Zend_Registry::get('Zend_Translate');
        }

        if ($this->translate instanceof \Zend_Translate) {
            return $this->translate;
        }
        throw new \LogicException('Property "translate" expects an instance of "\Zend_Translate", "' . (is_object($this->translate) ? get_class($this->translate) : gettype($this->translate)) . '" defined');
    }

    /**
     * @return string
     */
    protected function getTmpDirectoryPath() : string
    {
        return My_Env::getInstance()->getConfig()->path->tmp;
    }

    /**
     * @param string $sFilePath
     * @param string $sFileName : (optionnal) display nmae
     * @throws \InvalidArgumentException
     */
    protected function streamFileFromFilePath(string $sFilePath, string $sFileName = null)
    {
        if (! file_exists($sFilePath)) {
            throw new \InvalidArgumentException('Argument "$sFilePath" "'.$sFilePath.'" does not exist');
        }
        $this->streamFileFromFileContent(file_get_contents($sFilePath), $sFileName ?: basename($sFilePath));
    }

    protected function disableRendering()
    {
        Zend_Layout::getMvcInstance()->disableLayout();
        $oViewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        if ($oViewRenderer->view instanceof Zend_View_Interface) {
            $oViewRenderer->setNoRender(true);
        }
    }

    /**
     * @param string $sFileContent
     * @param string $sFileName
     */
    protected function streamFileFromFileContent(string $sFileContent, string $sFileName)
    {
        $this->disableRendering();
        if (! headers_sent()) {
            $sFileName =  str_replace('"', '\"', $sFileName);

            header('Content-Type: application/force-download; name="' . $sFileName . '"');
            header("Content-Transfer-Encoding: binary");
            header('Content-disposition: attachment; filename="' . $sFileName . '"');
            header("Content-Length: " . strlen($sFileContent));
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Expires: 0");
        }
        $oZendControllerActionHelperActionStack = new Zend_Controller_Action_Helper_ActionStack();
        $oZendControllerActionHelperActionStack->getResponse()->setBody($sFileContent);
    }

}
