<?php

/**
 * Skeleton subclass for representing a row from the 'settings' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class Settings extends BaseSettings
{
    const SETTING_KEY_APPLICATION_LOGO = 'applicationLogo';
    const SETTING_KEY_COMPANY_LOGO = 'companyLogo';
    const SETTING_KEY_PDF_HEADER_LOGO = 'pdfHeaderLogo';
    const SETTING_KEY_COMPANY_NAME = 'companyName';
    const SETTING_KEY_COMPANY_STATUTES = 'companyStatutes';
    const SETTING_KEY_COMPANY_VAT_NUMBER = 'companyVatNumber';
    const SETTING_KEY_COMPANY_TERMS_OF_SALE = 'companyTermsOfSale';
    const SETTING_KEY_COMPANY_TERMS_OF_SALE_URL = 'companyTermsOfSaleUrl';
    const SETTING_KEY_COMPANY_TERMS_OF_SALE_LAST_UPDATE = 'companyTermsOfSaleLastUpdate';
    const SETTING_KEY_GLOBAL_BUDGET_TERMS_OF_SALE = 'globalBudgetTermsOfSale';
    const SETTING_KEY_COMPANY_RIB_BANK_CODE = 'companyRibBankCode';
    const SETTING_KEY_COMPANY_RIB_SORT_CODE = 'companyRibSortCode';
    const SETTING_KEY_COMPANY_RIB_ACCOUNT_NUMBER = 'companyRibAccountNumber';
    const SETTING_KEY_COMPANY_RIB_KEY = 'companyRibKey';
    const SETTING_KEY_COMPANY_RIB_BANK_NAME = 'companyRibBankName';
    const SETTING_KEY_COMPANY_BIC_CODE = 'companyBicCode';
    const SETTING_KEY_COMPANY_IBAN = 'companyIban';
    const SETTING_KEY_COMPANY_ACCOUNT_HOLDER = 'companyAccountHolder';
    const SETTING_KEY_COMPANY_BANK_ADDRESS = 'companyBankAddress';
    const SETTING_KEY_COMPANY_INVOICE_MISSED_DEADLINE = 'companyInvoiceMissedDeadline';
    const SETTING_KEY_COMPANY_REIMBURSEMENT_INSTRUCTION = 'companyReimbursementInstruction';
    const SETTING_KEY_COMPANY_WEBSITE = 'companyWebsite';
    const SETTING_KEY_COMPANY_ADDRESS = 'companyAddress';
    const SETTING_KEY_COMPANY_PHONE_NUMBER = 'companyPhoneNumber';
    const SETTING_KEY_COMPANY_FAX_NUMBER = 'companyFaxNumber';
    const SETTING_KEY_ACCOUNTS_DEPARTMENT_PHONE_NUMBER = 'accountsDepartmentPhoneNumber';
    const SETTING_KEY_ACCOUNTS_DEPARTMENT_FAX_NUMBER = 'accountsDepartmentFaxNumber';
    const SETTING_KEY_FINANCIAL_ADMINISTRATIVE_DIVISION_SIGNATURE = 'financialAdministrativeDivisionSignature';
    const SETTING_KEY_EMAIL_APPLICATION = 'emailApplication';
    const SETTING_KEY_EMAIL_CONTACT = 'emailContact';
    const SETTING_KEY_EMAIL_FINANCIAL_ADMINISTRATIVE_DIVISION = 'emailFinancialAdministrativeDivision';
    const SETTING_KEY_EMAIL_LOGISTIC_DEPARTMENT = 'emailLogisticDepartment';
    const SETTING_KEY_EMAIL_INVOICING_DEPARTMENT = 'emailInvoicingDepartment';
    const SETTING_KEY_EMAIL_PAID_INVOICES = 'emailPaidInvoices';
    const SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR = 'externalConnectionArthur';
    const SETTING_KEY_EXTERNAL_CONNECTION_COMPIL = 'externalConnectionCompil';
    const SETTING_KEY_OPERATION_NUMBER_FORMAT = 'operationNumberFormat';
    const SETTING_KEY_TPL_QUOTATION_MAIL_SUBJECT = 'tplQuotationMailSubject';
    const SETTING_KEY_TPL_QUOTATION_MAIL_BODY = 'tplQuotationMailBody';
    const SETTING_KEY_TPL_INVOICE_MAIL_SUBJECT = 'tplInvoiceMailSubject';
    const SETTING_KEY_TPL_INVOICE_MAIL_BODY = 'tplInvoiceMailBody';

    /**
     * @var array
     */
    protected static $settings = array();

    /**
     * @param string $sSettingKey
     * @param string $sLocale
     * @return string
     * @throws \LogicException
     */
    public static function getSettingValueBySettingKey(string $sSettingKey, string $sLocale = RLanguages::LOCALE_FR) : string
    {
        if (isset(self::$settings[$sSettingKey][$sLocale])) {
            return self::$settings[$sSettingKey][$sLocale];
        }
        
        $oSetting = SettingsQuery::create()->useOrganisationsQuery()->endUse()->filterBySettingOrganisationId(Zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())->findOneBySettingKey($sSettingKey);
        if (! $oSetting) {
            throw new \LogicException('Setting "'.$sSettingKey.'" does not exist');
        }

        if ($sLocale === RLanguages::LOCALE_FR) {
            self::$settings[$sSettingKey][$sLocale] = $oSetting->getSettingValue();
        } else {
            self::$settings[$sSettingKey][$sLocale] = I18nQuery::create()->findDataTranslations('settings', 'setting_value', $oSetting->getSettingId(), $sLocale);
        }

        return self::$settings[$sSettingKey][$sLocale];
    }

} // Settings
