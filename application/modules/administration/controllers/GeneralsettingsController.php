<?php

class Administration_GeneralsettingsController extends My_Controller_Action
{
    /**
     * Index action
     */
    public function indexAction()
    {
    }

    /**
     * Update settings action
     */
    public function updatesettingsAction()
    {
        if (! $this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $aParams = $this->_request->getPost();

        foreach ($aParams as $sSettingKey => $aSettings) {
            $oSetting = SettingsQuery::create()->useOrganisationsQuery()->endUse()->filterBySettingOrganisationId(zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())->findOneBySettingKey($sSettingKey);
            if (! $oSetting) {
                throw new \LogicException('Setting "'.$sSettingKey.'" does not exist');
            }
            foreach ($aSettings as $sLocale => $sSettingValue) {
                // Specific settings validation
                switch ($sSettingKey) {
                    case Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR:
                        if ($sSettingValue && ! Phoenix_Db_Adapters::getInstance()->hasArthurDbConfiguration()) {
                            $this->_helper->FlashMessenger($this->view->translate('La configuration de la base de données Arthur n\'est pas définie'), 'error');
                            return $this->_helper->Redirector('index', null, null);
                        }
                        break;
                    case Settings::SETTING_KEY_EXTERNAL_CONNECTION_COMPIL:
                        if ($sSettingValue && ! Phoenix_Db_Adapters::getInstance()->hasCompilDbConfiguration()) {
                            $this->_helper->FlashMessenger($this->view->translate('La configuration de la base de données Compil UO/Data n\'est pas définie'), 'error');
                            return $this->_helper->Redirector('index', null, null);
                        }
                        break;
                }

                $aErrors = null;
                if ($sLocale === RLanguages::LOCALE_FR) {
                    $oSetting->setSettingValue($sSettingValue);
                    if ($oSetting->validate()) {
                        $oSetting->save();
                    } else {
                        $aErrors = $oSetting->getValidationFailures();
                    }
                } else {
                    $oI18n = I18nQuery::create()->saveDataTranslations('settings', 'setting_value', $oSetting->getSettingId(), $sSettingValue, $sLocale);
                    $aErrors = $oI18n->getValidationFailures();
                }
                if ($aErrors) {
                    $this->_helper->PropelFailures()->registerErrors($aErrors);
                    $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
                    $this->_helper->FlashMessenger($aErrors, 'error');
                    return $this->_helper->Redirector('index', null, null);
                }
            }
        }

        $this->_helper->Redirector('index', null, null);
    }

    /**
     * Upload action
     */
    public function uploadAction()
    {
        $oFileTransfer = new Zend_File_Transfer();

        $aErrors = array();
        foreach ($oFileTransfer->getFileInfo() as $sFile => $aFileInfos) {
            // File uploaded?
            if (! $oFileTransfer->isUploaded($sFile)) {
                 $aErrors[] = 'error_file_is_not_uploaded';
                continue;
            }

            // Are the validators OK?
            if (! $oFileTransfer->isValid($sFile)) {
                $aErrors[] = 'error_file_is_not_valid';
                continue;
            }

            $aFilePart = explode('_', rtrim($sFile, '_'), 2);
            $sSettingKey = current($aFilePart);
            $sLocale = $aFilePart[1];

            $oSetting = SettingsQuery::create()->useOrganisationsQuery()->endUse()->filterBySettingOrganisationId(zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())->findOneBySettingKey($sSettingKey);
            if (! $oSetting) {
                throw new \LogicException('Setting "'.$sSettingKey.'" does not exist');
            }

            $sSettingValue = 'data:'.$oFileTransfer->getMimeType($sFile).';base64,'.base64_encode(file_get_contents($aFileInfos['tmp_name']));

            if ($sLocale === RLanguages::LOCALE_FR) {
                $oSetting->setSettingValue($sSettingValue);
                $oSetting->save();
            } else {
                I18nQuery::create()->saveDataTranslations('settings', 'setting_value', $oSetting->getSettingId(), $sSettingValue, $sLocale);
            }
        }

        if ($aErrors) {
            $this->_helper->FlashMessenger($aErrors, 'error');
        }

        $this->_helper->Redirector('index', null, null);
    }
}
