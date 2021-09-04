<?php

/**
 * This class has been made as a service to be used by the controller RcurrenciesController
 * located in the administration module
 *
 * This class is used to manage currencies data
 */
class Phoenix_Administration_RCurrencies_Service_RCurrenciesService
{

    /**
     * @var integer
     */
    const NUMBER_OF_ELEMENTS_PER_PAGE = 50;

    /**
     * @var \Zend_Db_Select
     */
    protected $zendDbSelect;

    /**
     * Builds and returns a paginator of filtered currencies
     *
     * @param  integer $iPageNumber
     * @return \My_Paginator
     * @throws \InvalidArgumentException
     */
    public function getRCurrenciesPaginator($iPageNumber)
    {
        if (!is_integer($iPageNumber)) {
            throw new \InvalidArgumentException('Argument "$iPageNumber" expects an integer, "' . (is_object($iPageNumber) ? get_class($iPageNumber) : gettype($iPageNumber)) . '" given');
        }

        $oZendDbSelect = $this->getZendDbSelect();
        $oZendDbSelect->from('r_currencies')
                ->order('r_currency_id asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect);

        // Initiating paginator adapter
        $oPaginatorAdapter = new \Zend_Paginator_Adapter_DbSelect($oSearchEngine->getSelect());
        // Creating paginator
        $oPaginator = new \My_Paginator($oPaginatorAdapter);

        return $oPaginator->setCurrentPageNumber($iPageNumber)
                        ->setItemCountPerPage(self::NUMBER_OF_ELEMENTS_PER_PAGE);
    }

    /**
     * Gets a currency instance by currency id
     *
     * @param  integer $iRCurrencyId
     * @return \RCurrency
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getRCurrencyByRCurrencyId($iRCurrencyId)
    {
        if (!is_integer($iRCurrencyId)) {
            throw new \InvalidArgumentException('Argument "$iRCurrencyId" expects an integer, "' . (is_object($iRCurrencyId) ? get_class($iRCurrencyId) : gettype($iRCurrencyId)) . '" given');
        }

        $oRCurrency = \RCurrenciesQuery::create()->findPk($iRCurrencyId);

        if (!$oRCurrency instanceof \RCurrencies) {
            throw new \LogicException('No currency has been found for the given currency id : "' . $iRCurrencyId . '"');
        }

        return $oRCurrency;
    }

    /**
     * Updates/creates currency data and returns the current object on success. On failure It returns
     * an array of validation errors
     *
     * @param  array $aCurrencyData
     * @return array
     */
    public function saveRCurrencyData(array $aCurrencyData)
    {

        if ($aCurrencyData['r_currency_id']) {
            $oRCurrency = $this->getRCurrencyByRCurrencyId((int) $aCurrencyData['r_currency_id']);
        } else {
            $oRCurrency = new \RCurrencies();
        }

        $oRCurrency->setRCurrencyActif(0);
        $oRCurrency->fromArray($aCurrencyData, \BasePeer::TYPE_FIELDNAME);
        if ($oRCurrency->validate()) {
            $oRCurrency->save();
            return array();
        }
        return $oRCurrency->getValidationFailures();
    }

    /**
     * Delete a currency record and returns true, or returns false in case It's impossible to delete the record
     *
     * @param  integer $iRCurrencyId
     * @return boolean
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function deleteRCurrencyRecord($iRCurrencyId)
    {
        if (!is_integer($iRCurrencyId)) {
            throw new \InvalidArgumentException('Argument "$iRCurrencyId" expects an integer, "' . (is_object($iRCurrencyId) ? get_class($iRCurrencyId) : gettype($iRCurrencyId)) . '" given');
        }

        $oRCurrency = $this->getRCurrencyByRCurrencyId($iRCurrencyId);

        if ($oRCurrency->checkIfRCurrencyCanBeSafelyDeleted()) {
            $oRCurrency->delete();
            return true;
        }
        return false;
    }

    /**
     * Builds a CSV export
     */
    public function buildExport()
    {

        $oTranslate = $this->getZendTranslate();
        $oZendDbSelect = $this->getZendDbSelect()
                ->order('r_currency_id asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect);

        $aRetrievedData = array(
            'Id' => 'r_currency_id',
            $oTranslate->translate('label_currency_code') => 'r_currency_iso_code',
            $oTranslate->translate('label_currency_label') => 'r_currency_label',
            $oTranslate->translate('label_actif') => 'r_currency_actif',
        );

        $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oSearchEngine->getSelect()->from('r_currencies', $aRetrievedData)));
        $sFileName = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();

        if (false === file_put_contents($sFileName, $oExport->make())) {
            throw new \RuntimeException('An error occurred while writing data into file "' . $sFileName . '"');
        }
        return $sFileName;
    }

    /**
     * Builds and retruns a My_Search_Engine instance
     *
     * @param  \Zend_Db_Select $oZendDbSelect
     * @return \My_Search_Engine
     */
    protected function getMySearchEngine(\Zend_Db_Select $oZendDbSelect)
    {
        // Initiating a search engine for quick researchs
        $oSearchEngine = new \My_Search_Engine($oZendDbSelect);

        $aSearchedFields = array(
            'r_currency_id' => array('operator' => 'eql'),
            'r_currency_iso_code' => array('operator' => 'eql'),
            'r_currency_label' => array('operator' => 'like'),
        );

        $oSearchEngine->findWordOn($aSearchedFields);
        // Initiating a search engine for advanced researchs

        $aSearchedFields['r_currency_actif'] = array('operator' => 'eql');
        $oSearchEngine->findByFields($aSearchedFields);

        $oSearchEngine->makeOrderBy();
        return $oSearchEngine;
    }

    /**
     * Gets the zendDbSelect property value
     *
     * @return \Zend_Db_Select
     * @throws \LogicException
     */
    public function getZendDbSelect()
    {
        // Lazy load if not defiend
        if ($this->zendDbSelect === null) {
            $this->zendDbSelect = new \Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        }
        if ($this->zendDbSelect instanceof \Zend_Db_Select) {
            return $this->zendDbSelect;
        }
        throw new \LogicException('Property "zendDbSelect" expects an instance of \Zend_Db_Select, "' . (is_object($this->zendDbSelect) ? get_class($this->zendDbSelect) : gettype($this->zendDbSelect)) . '" defined');
    }

    /**
     * Sets the zendDbSelect property value
     *
     * @param  \Zend_Db_Select $oZendDbSelect
     * @return \Phoenix_Administration_RCurrencies_Service_RCurrenciesService
     */
    public function setZendDbSelect(\Zend_Db_Select $oZendDbSelect)
    {
        $this->zendDbSelect = $oZendDbSelect;
        return $this;
    }

    /**
     * Gets Zend Translate instance
     *
     * @return \Zend_Registry
     * @throws \LogicExcpetion
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicExcpetion('undefinded Zend Translate object');
    }
}
