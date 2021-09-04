<?php

/**
 * This class has been made as a service to be used by the controller Rcountriescallingcodes
 * located in the administration module
 *
 * This class is used to manage countries calling codes data
 */
class Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService
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
     * Builds and returns a paginator of country calling codes
     *
     * @param  integer $iPageNumber
     * @return \My_Paginator
     * @throws \InvalidArgumentException
     */
    public function getRCountriesCallingCodesPaginator($iPageNumber)
    {
        if (!is_integer($iPageNumber)) {
            throw new \InvalidArgumentException('Argument "$iPageNumber" expects an integer, "' . (is_object($iPageNumber) ? get_class($iPageNumber) : gettype($iPageNumber)) . '" given');
        }

        $oZendDbSelect = $this->getZendDbSelect();
        $oZendDbSelect->from('r_countries_calling_codes')
                ->order('r_country_calling_code_id asc');

        // Initiating paginator adapter
        $oPaginatorAdapter = new \Zend_Paginator_Adapter_DbSelect($this->getMySearchEngine($oZendDbSelect)->getSelect());
        // Creating paginator
        $oPaginator = new \My_Paginator($oPaginatorAdapter);

        return $oPaginator->setCurrentPageNumber($iPageNumber)
                        ->setItemCountPerPage(self::NUMBER_OF_ELEMENTS_PER_PAGE);
    }

    /**
     * Gets a country calling code instance by r country calling id
     *
     * @param  integer $iRCountryCallingcodeId
     * @return \RCountriesCallingCodes
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getRCountryCallingCodeByRCountryCallingCodeId($iRCountryCallingcodeId)
    {
        if (!is_integer($iRCountryCallingcodeId)) {
            throw new \InvalidArgumentException('Argument "$iRCountryCallingcodeId" expects an integer, "' . (is_object($iRCountryCallingcodeId) ? get_class($iRCountryCallingcodeId) : gettype($iRCountryCallingcodeId)) . '" given');
        }

        $oRCountryCallingCode = \RCountriesCallingCodesQuery::create()->findPk($iRCountryCallingcodeId);

        if (!$oRCountryCallingCode instanceof \RCountriesCallingCodes) {
            throw new \LogicException('No Country calling code has been found for the given country call id : "' . $iRCountryCallingcodeId . '"');
        }

        return $oRCountryCallingCode;
    }

    /**
     * Updates country calling code data and returns the current object on success. On failure It returns
     * an array of validation errors
     *
     * @param  array $aCountryCallingCodeData
     * @return \Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService |array
     */
    public function saveRCountryCallingCodeData(array $aCountryCallingCodeData)
    {
        if ($aCountryCallingCodeData['r_country_calling_code_id']) {
            $oRCountryCallingCode = $this->getRCountryCallingCodeByRCountryCallingCodeId((int) $aCountryCallingCodeData['r_country_calling_code_id']);
        } else {
            $oRCountryCallingCode = new \RCountriesCallingCodes();
        }
        $oRCountryCallingCode->setRCountryCallingCodeActif(0);
        $oRCountryCallingCode->fromArray($aCountryCallingCodeData, \BasePeer::TYPE_FIELDNAME);
        if ($oRCountryCallingCode->validate()) {
            $oRCountryCallingCode->save();
            return array();
        }
        return $oRCountryCallingCode->getValidationFailures();
    }

    /**
     * Delete a country calling code record and returns true, or returns false in case It's impossible to delete the record
     *
     * @param  integer $iRCountryCallingcodeId
     * @return boolean
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function deleteRCountryCallingCodeRecord($iRCountryCallingcodeId)
    {
        if (!is_integer($iRCountryCallingcodeId)) {
            throw new \InvalidArgumentException('Argument "$iRCountryCallingcodeId" expects an integer, "' . (is_object($iRCountryCallingcodeId) ? get_class($iRCountryCallingcodeId) : gettype($iRCountryCallingcodeId)) . '" given');
        }

        $oRCountryCallingCode = $this->getRCountryCallingCodeByRCountryCallingCodeId($iRCountryCallingcodeId);

        if ($oRCountryCallingCode->checkIfRCountryCallingCodeCanBeSafelyDeleted()) {
            $oRCountryCallingCode->delete();
            return true;
        }
        return false;
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
     * Builds a CSV export
     *
     * @return string
     * @throws \RuntimeException
     */
    public function buildExport()
    {

        $oTranslate = $this->getZendTranslate();
        $oZendDbSelect = $this->getZendDbSelect()
                ->order('r_country_calling_code_id asc');

        $aRetrievedData = array(
            'Id' => 'r_country_calling_code_id',
            $oTranslate->translate('label_country_calling_code') => 'r_country_calling_code',
            $oTranslate->translate('label_actif') => 'r_country_calling_code_actif',
        );

        $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($this->getMySearchEngine($oZendDbSelect)->getSelect()->from('r_countries_calling_codes', $aRetrievedData)));
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
        $oSearchEngine->findWordOn(
            array(
                    'r_country_calling_code' => array('operator' => 'like'),
                )
        );

        $oSearchEngine->makeOrderBy();
        return $oSearchEngine;
    }

    /**
     * Sets the zendDbSelect property value
     *
     * @param  \Zend_Db_Select $oZendDbSelect
     * @return \Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService
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
