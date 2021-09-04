<?php

class My_File_Transfer
{

    protected static $instance = null;
    protected static $fileTransferAdapterHttp=null;


    /**
     * @return My_File_Transfer
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new My_File_Transfer();
        }
        return self::$instance;
    }

    /**
     * @return Zend_File_Transfer_Adapter_Http
     */
    private function getZendFileTransferAdapterHttp()
    {
        if (self::$fileTransferAdapterHttp == null) {
            self::$fileTransferAdapterHttp = new Zend_File_Transfer_Adapter_Http();
        }
        return self::$fileTransferAdapterHttp;
    }

    /**
     * Reception of an uploaded file
     * @return string path + name of uploaded file
     * @throws Exception
     */
    public function receive()
    {
        $sFilename='';
        $oAdapter = $this->getZendFileTransferAdapterHttp();
        if ($oAdapter->isUploaded()) {
            $oConfig = Zend_Registry::get('config');
            $sDirectory = $oConfig->my->fileupload->directory;
            $oAdapter->setDestination($sDirectory);
            $aFilename = explode('.', basename($oAdapter->getFileName()));
            $iMicro = microtime(true)-time();

            $sFilename = $aFilename[0] . '_' . date('Y-m-d_H-i-s-'.round($iMicro*10000)) . '.' . $aFilename[count($aFilename)-1];

            $oAdapter->addFilter('Rename', array('target' => $sDirectory . '/' . $sFilename));
            if (! $oAdapter->receive()) {
                $aMessages = $oAdapter->getMessages();
                throw new Exception(implode("\n", $aMessages));
            }
        }
        return $sFilename;
    }

    /**
     * Has a file been uploaded
     * @return boolean
     */
    public function isUploaded()
    {
        return $this->getZendFileTransferAdapterHttp()->isUploaded();
    }


    /**
     * Returns error messages
     * @return array
     */
    public function getMessages()
    {
        return $this->getZendFileTransferAdapterHttp()->getMessages();
    }

    /**
     * Send a file
     * @param string $sFilePath
     * @throws Exception
     */
    public function send($sFilePath)
    {

        $oViewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        $oView = $oViewRenderer->view;

        Zend_Layout::getMvcInstance()->disableLayout();

        if ($oView instanceof Zend_View_Interface) {
            $oViewRenderer->setNoRender(true);
        }

        if (file_exists($sFilePath)) {
            if (! headers_sent()) {
                header('Content-Type: application/force-download; name="' . basename($sFilePath) . '"');
                header("Content-Transfer-Encoding: binary");
                header('Content-disposition: attachment; filename="' . basename($sFilePath) . '"');
                header("Content-Length: " . filesize($sFilePath));
                header("Pragma: no-cache");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Expires: 0");
            }

            $oZendControllerActionHelperActionStack = new Zend_Controller_Action_Helper_ActionStack();
            $oZendControllerActionHelperActionStack->getResponse()->setBody(file_get_contents($sFilePath));
        } else {
            throw new Exception('Le fichier ' . basename($sFilePath) . ' n\'existe pas');
        }
    }

    /**
     * Deleting a file
     * @param string $sFilePath
     */
    public function remove($sFilePath)
    {
        if (file_exists($sFilePath)) {
            unlink($sFilePath);
        }
    }

}
