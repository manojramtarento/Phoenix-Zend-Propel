<?php

class Phoenix_TemplateManager_Quotation extends Phoenix_TemplateManager_AbstractOperation
{
   

    protected function initializeView() : Zend_View
    {
        $oView = parent::initializeView();

        // Retrieve operation
        $oOperation = $this->getOperation();

        // Retrieves the latest quotation
        $oQuotation = $oOperation->getFileDevisLastVersion();
        if (! $oQuotation instanceof Files) {
            throw new \LogicException('No quotation has been generated for current operation');
        }

        $oView->assign('devis_version', $oQuotation->getFileVersion());

        // Retrieves the sales director
        $oUserDC = $oOperation->getUserDC();
        if (! $oUserDC instanceof Users) {
            throw new \LogicException('Operation does not have sales director');
        }

        $oView->assign('sales_director_name', $oUserDC->getUserPrenomNom());
        $oView->assign('sales_director_phone_number', $oUserDC->getUserPhone());
        $oView->assign('sales_director_mobile_phone_number', $oUserDC->getUserMobile());
        $oView->assign('sales_director_fax_number', Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER));

        if ($oUserDC->getUserId() == Phoenix_Auth_User::getInstance()->getUserId()) {
            $oView->assign('signature', $oUserDC->getSignature());
        } else {
            $oView->assign('signature', Phoenix_Auth_User::getInstance()->getUserModel()->getSignature(array('disable_function' => true)));
        }

        return $oView;
    }

}
