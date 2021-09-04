<?php

/**
 * This class is used to manage countries data
 */
class Phoenix_Administration_RCountries_Service_RCountriesService
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
     * Builds and returns a paginator of filtered cultres
     *
     * @param  integer $iPageNumber
     * @return \My_Paginator
     * @throws \InvalidArgumentException
     */
    public function getRCountriesPaginator($iPageNumber, array $aParams)
    {
        if (! is_integer($iPageNumber)) {
            throw new \InvalidArgumentException('Argument "$iPageNumber" expects an integer, "' . (is_object($iPageNumber) ? get_class($iPageNumber) : gettype($iPageNumber)) . '" given');
        }

        $oZendDbSelect = $this->getZendDbSelect();
        $oZendDbSelect->from('r_countries', array(
                    'r_countries.*',
                    'r_currencies.*',
                    'r_countries_calling_codes.*',
                    'cultures' => new Zend_Db_Expr('(SELECT GROUP_CONCAT(r_culture_code SEPARATOR \',\')
                                                        FROM r_cultures
                                                            INNER JOIN lnk_r_country_r_cultures lnk ON lnk.lnk_r_country_r_culture_r_culture_id = r_cultures.r_culture_id
                                                        WHERE lnk_r_country_r_culture_r_country_id = r_country_id)'),
                    'languages' => new Zend_Db_Expr('(
                                                        SELECT GROUP_CONCAT(distinct(r_lang_libelle) SEPARATOR \',\')
                                                            FROM r_cultures
                                                            INNER JOIN lnk_r_country_r_cultures lnk ON lnk.lnk_r_country_r_culture_r_culture_id = r_cultures.r_culture_id
                                                            INNER JOIN r_languages lang ON lang.r_lang_code = r_cultures.r_culture_language_code
                                                        WHERE lnk_r_country_r_culture_r_country_id = r_country_id)'),
                ))
                ->joinLeft('r_currencies', 'r_currencies.r_currency_id = r_countries.r_country_r_currency_id')
                ->joinLeft('r_countries_calling_codes', 'r_countries_calling_codes.r_country_calling_code_id = r_countries.r_country_r_country_calling_code_id')
                ->order('r_country_id asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect, $aParams);

        // Initiating paginator adapter
        $oPaginatorAdapter = new \Zend_Paginator_Adapter_DbSelect($oSearchEngine->getSelect());
        // Creating paginator
        $oPaginator = new \My_Paginator($oPaginatorAdapter);

        return $oPaginator->setCurrentPageNumber($iPageNumber)
                        ->setItemCountPerPage(self::NUMBER_OF_ELEMENTS_PER_PAGE);
    }

    /**
     * @param integer $iRCountryId
     * @return \RCountries
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getRCountryByRCountryId($iRCountryId)
    {
        if (! is_integer($iRCountryId)) {
            throw new \InvalidArgumentException('Argument "$iRCountryId" expects an integer, "' . (is_object($iRCountryId) ? get_class($iRCountryId) : gettype($iRCountryId)) . '" given');
        }
        $oRCountry = \RCountriesQuery::create()->findPk($iRCountryId);

        if (! $oRCountry instanceof \RCountries) {
            throw new \LogicException('No country has been found for the given country id : "' . $iRCountryId . '"');
        }

        return $oRCountry;
    }

    /**
     * Updates/creates country data and returns the current object on success. On failure It returns
     * an array of validation errors
     *
     * @param  array $aCountryData
     * @return array
     * @throws \LogicException
     */
    public function saveRCountryData(array $aCountryData)
    {
        $oRCountry = empty($aCountryData['r_country_id']) ? new \RCountries() : $this->getRCountryByRCountryId((int) $aCountryData['r_country_id']);

        // Initialize active with 0 if not posted in data form
        $oRCountry->setRCountryActif(0);

        $oRCountry->fromArray($aCountryData, \BasePeer::TYPE_FIELDNAME);
        if ($oRCountry->validate()) {
            $oRCountry->save();

            // Delete existing country culture
            $oRCountry->getLnkRCountryRCulturess()->delete();
            // Save cultures
            if (! empty($aCountryData['r_country_culture_id'])) {
                // Add countries culture
                foreach ($aCountryData['r_country_culture_id'] as $iRCultureId) {
                    $oRCulture = \RCulturesQuery::create()->findOneByRCultureId($iRCultureId);
                    if (! $oRCulture instanceof \RCultures) {
                        throw new \LogicException('The culture id "' . $iRCultureId . '" was not found.');
                    }
                    $oLnkRCountryRculture = new \LnkRCountryRCultures();
                    $oLnkRCountryRculture->setLnkRCountryRCultureRCultureId($oRCulture->getRCultureId())
                            ->setRCountries($oRCountry)
                            ->save();
                }
            }
            return array();
        }
        return $oRCountry->getValidationFailures();
    }

    /**
     * Delete a country record and returns true, or returns false in case It's impossible to delete the record
     *
     * @param  integer $iRCountryId
     * @return boolean
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function deleteRCountryRecord($iRCountryId)
    {
        if (! is_integer($iRCountryId)) {
            throw new \InvalidArgumentException('Argument "$iRCountryId" expects an integer, "' . (is_object($iRCountryId) ? get_class($iRCountryId) : gettype($iRCountryId)) . '" given');
        }
        $oRCountry = $this->getRCountryByRCountryId($iRCountryId);
        if ($oRCountry->checkIfRCountryCanBeSafelyDeleted()) {
            $oRCountry->delete();
            return true;
        }
        return false;
    }

    /**
     * Builds a CSV export
     */
    public function buildExport(array $aParams)
    {

        $oTranslate = $this->getZendTranslate();

        $oZendDbSelect = $this->getZendDbSelect()->from('r_countries', array(
                    'Id' => 'r_countries.r_country_id',
                    $oTranslate->translate('label_country_code') => 'r_countries.r_country_code',
                    $oTranslate->translate('label_country_label') => 'r_countries.r_country_name',
                    $oTranslate->translate('label_country_currency_label') => 'r_currencies.r_currency_label',
                    $oTranslate->translate('label_country_calling_label') => 'r_countries_calling_codes.r_country_calling_code',
                    $oTranslate->translate('label_country_culture') => new Zend_Db_Expr('(SELECT GROUP_CONCAT(r_culture_code SEPARATOR \',\')
                                                        FROM r_cultures
                                                            INNER JOIN lnk_r_country_r_cultures lnk ON lnk.lnk_r_country_r_culture_r_culture_id = r_cultures.r_culture_id
                                                        WHERE lnk_r_country_r_culture_r_country_id = r_country_id)'),
                    $oTranslate->translate('label_country_languages') => new Zend_Db_Expr('(
                                                        SELECT GROUP_CONCAT(distinct(r_lang_libelle) SEPARATOR \',\')
                                                            FROM r_cultures
                                                            INNER JOIN lnk_r_country_r_cultures lnk ON lnk.lnk_r_country_r_culture_r_culture_id = r_cultures.r_culture_id
                                                            INNER JOIN r_languages lang ON lang.r_lang_code = r_cultures.r_culture_language_code
                                                        WHERE lnk_r_country_r_culture_r_country_id = r_country_id)'),
                    $oTranslate->translate('label_actif') => 'r_country_actif',
                ))
                ->joinLeft('r_currencies', 'r_currencies.r_currency_id = r_countries.r_country_r_currency_id', array())
                ->joinLeft('r_countries_calling_codes', 'r_countries_calling_codes.r_country_calling_code_id = r_countries.r_country_r_country_calling_code_id', array())
                ->order('r_countries.r_country_id asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect, $aParams);

        $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oSearchEngine->getSelect()));
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
    protected function getMySearchEngine(\Zend_Db_Select $oZendDbSelect, array $aParams)
    {
        // Initiating a search engine for quick researchs
        $oSearchEngine = new \My_Search_Engine($oZendDbSelect);

        $aSearchedFields = array(
            'r_country_code' => array('operator' => 'eql'),
            'r_country_name' => array('operator' => 'like'),
        );

        $oSearchEngine->findWordOn($aSearchedFields);
        // Initiating a search engine for advanced researchs
        $aSearchedFields['r_country_actif'] = array('operator' => 'eql');
        $aSearchedFields['r_country_id'] = array('operator' => 'eql');
        $aSearchedFields['r_country_r_currency_id'] = array('operator' => 'eql');
        $aSearchedFields['r_country_r_country_calling_code_id'] = array('operator' => 'eql');

        //Search by culture or languae
        if (! empty($aParams['find_r_country_culture_id']) || ! empty($aParams['find_r_country_language_code'])) {
            $oZendDbSelectCulture = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $oZendDbSelectCulture->from('lnk_r_country_r_cultures', 'lnk_r_country_r_culture_r_country_id');

            if (! empty($aParams['find_r_country_culture_id'])) {
                $oZendDbSelectCulture->where('lnk_r_country_r_culture_r_culture_id = ?', $aParams['find_r_country_culture_id']);
            }
            if (! empty($aParams['find_r_country_language_code'])) {
                $oZendDbSelectCulture
                        ->joinLeft('r_cultures', 'r_cultures.r_culture_id = lnk_r_country_r_cultures.lnk_r_country_r_culture_r_culture_id', array())
                        ->where('r_culture_language_code = ?', $aParams['find_r_country_language_code']);
            }
            $aSearchedFields['r_country_id'] = array('operator' => 'in', 'value' => $oZendDbSelectCulture);
        }

        $oSearchEngine->findByFields($aSearchedFields);

        $oSearchEngine->makeOrderBy();
        return $oSearchEngine;
    }

    /**
     * @return array
     */
    public function getRCulturesList()
    {
        $aRCulturesList = array();

        $oRCultures = \RCulturesQuery::create()
                ->orderBy('RCultureCode', \Criteria::ASC)
                ->find();

        foreach ($oRCultures as $oRculture) {
            $aRCulturesList[] = array(
                'label' => $oRculture->getRCultureCode(),
                'value' => $oRculture->getRCultureId(),
            );
        }
        return $aRCulturesList;
    }

    /**
     * @param array $aRCulturesId
     * @return array
     */
    public function getLanguagesLabelsByRCulturesIds(array $aRCulturesId)
    {
        return \RLanguagesQuery::create()
                        ->select('RLangLibelle')
                        ->distinct()
                        ->useRCulturesQuery('cultures', 'INNER JOIN')
                        ->filterByRCultureId($aRCulturesId)
                        ->enduse()
                        ->find()
                        ->toArray();
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
     * @return \Phoenix_Administration_RCountries_Service_RCountriesService
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
