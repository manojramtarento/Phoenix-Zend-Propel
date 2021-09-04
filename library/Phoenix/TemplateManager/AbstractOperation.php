<?php

abstract class Phoenix_TemplateManager_AbstractOperation
{

    /**
     * Operation to use for rendering
     *
     * @var \Operations
     */
    protected $operation;


    /**
     * Render template from setting
     *
     * @param string $sSettingKey
     * @param string $sLocale
     * @return string
     */
    public function renderTemplateFromSetting(string $sSettingKey, string $sLocale = null) : string
    {
        // Prepare content
        if ($sLocale === null) {
            $sLocale = Zend_Registry::get('Zend_Translate')->getLocale();
        }
        $sTemplateContent = Settings::getSettingValueBySettingKey($sSettingKey, $sLocale);


        $sTemplateContent = preg_replace('/{{\s*(Settings::.*?)\s*}}/', '<?php echo $this->getSettingValue($1,\'' . $sLocale . '\') ?>', $sTemplateContent);
        $sTemplateContent = preg_replace('/{{\s*(.*?)\s*}}/', '<?php echo $this->$1; ?>', $sTemplateContent);
        // Retrieve view instance
        $oView = $this->initializeView();
        
        // Render content
        $sTmpFilepath = tempnam(sys_get_temp_dir(), uniqid($sSettingKey));
        $rFileHandle = fopen($sTmpFilepath, "w");
        fwrite($rFileHandle, $sTemplateContent);
        fclose($rFileHandle);
        $oView->setScriptPath(dirname($sTmpFilepath));
        $sTemplateContent = $oView->render(basename($sTmpFilepath));
        unlink($sTmpFilepath);
        return $sTemplateContent;
    }

    /**
     * Initialize a view object with current operation data
     *
     * @return Zend_View
     */
    protected function initializeView() : Zend_View
    {
        $oView = clone Zend_Controller_Front::getInstance()->getParam('bootstrap')->getPluginResource('view')->getView();

        $oOperation = $this->getOperation();
        $oView->assign('operation_number', $oOperation->getOpNumber());
        $oView->assign('operation_label', $oOperation->getOpLibelle());
        $oView->assign('client_label', $oOperation->getClients()->getClLibelle());
        return $oView;
    }

    /**
     * Return current operation
     *
     * @return \Operations
     */
    public function getOperation() : \Operations
    {
        return $this->operation;
    }

    /**
     * Set operation to use for rendering
     *
     * @param \Operations $oOperation
     * @return Phoenix_TemplateManager_AbstractOperation
     */
    public function setOperation(\Operations $oOperation) : Phoenix_TemplateManager_AbstractOperation
    {
        $this->operation = $oOperation;
        return $this;
    }
}
