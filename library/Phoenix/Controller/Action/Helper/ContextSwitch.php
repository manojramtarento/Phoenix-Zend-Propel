<?php

class Phoenix_Controller_Action_Helper_ContextSwitch extends Zend_Controller_Action_Helper_ContextSwitch
{

    public function __construct($aOptions = null)
    {
        parent::__construct($aOptions);
        $this->addContexts(array(
            'csv' => array(
                'suffix' => 'json',
                'headers' => array('Content-Type' => 'application/csv; '),
                'callbacks' => array(
                    'init' => 'initCsvContext',
                    'post' => 'postCsvContext'
                )
            )
        ));
    }

    public function initCsvContext()
    {
        $oViewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        $oView = $oViewRenderer->view;
        if ($oView instanceof Zend_View_Interface) {
            $oViewRenderer->setNoRender(true);
        }
    }

    public function postCsvContext()
    {
        $oViewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        $oView = $oViewRenderer->view;
        if ($oView instanceof Zend_View_Interface) {
            if (method_exists($oView, 'getVars')) {
                $aVars = $oView->getVars();
                $aVars['filename'] = (isset($aVars['filename']) ? $aVars['filename'] : 'fichier.csv');
                header("Content-Transfer-Encoding: binary");
                header("Content-disposition: attachment; filename=" . $aVars['filename']);
                header("Content-Length: " . strlen($aVars['csv']));
                header("Pragma: no-cache");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Expires: 0");
                $this->getResponse()->setBody(utf8_decode($aVars['csv']));
            } else {
                require_once 'Zend/Controller/Action/Exception.php';
                throw new Zend_Controller_Action_Exception('View does not implement the getVars() method needed to encode the view into JSON');
            }
        }
    }

    /**
     * @param string $sMimeType
     * @param string $sContent
     * @param string $sFilename
     */
    public function initContextDownload($sMimeType, $sContent, $sFilename)
    {

        header("Content-Type: " . $sMimeType);
        header("Content-Transfer-Encoding: binary");
        header("Content-disposition: attachment; filename=" . $sFilename);
        header("Content-Length: " . strlen($sContent));
        header("Pragma: no-cache");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Expires: 0");

        $this->getResponse()->setBody($sContent);
    }

}
