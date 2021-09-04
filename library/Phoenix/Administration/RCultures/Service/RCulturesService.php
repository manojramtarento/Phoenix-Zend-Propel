<?php

/**
 * This class is used to manage cultures data
 */
class Phoenix_Administration_RCultures_Service_RCulturesService
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
    public function getRCulturesPaginator($iPageNumber)
    {
        if (!is_integer($iPageNumber)) {
            throw new \InvalidArgumentException('Argument "$iPageNumber" expects an integer, "' . (is_object($iPageNumber) ? get_class($iPageNumber) : gettype($iPageNumber)) . '" given');
        }

        $oZendDbSelect = $this->getZendDbSelect();
        $oZendDbSelect->from('r_cultures')
                ->joinLeft('r_languages', 'r_languages.r_lang_code = r_cultures.r_culture_language_code')
                ->order('r_culture_id asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect);

        // Initiating paginator adapter
        $oPaginatorAdapter = new \Zend_Paginator_Adapter_DbSelect($oSearchEngine->getSelect());
        // Creating paginator
        $oPaginator = new \My_Paginator($oPaginatorAdapter);

        return $oPaginator->setCurrentPageNumber($iPageNumber)
                        ->setItemCountPerPage(self::NUMBER_OF_ELEMENTS_PER_PAGE);
    }

    /**
     * @param integer $iRCultureId
     * @return \RCultures
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getRCultureByRCultureId($iRCultureId)
    {
        if (!is_integer($iRCultureId)) {
            throw new \InvalidArgumentException('Argument "$iRCultureId" expects an integer, "' . (is_object($iRCultureId) ? get_class($iRCultureId) : gettype($iRCultureId)) . '" given');
        }
        $oRCulture = \RCulturesQuery::create()->findPk($iRCultureId);

        if (!$oRCulture instanceof \RCultures) {
            throw new \LogicException('No culture has been found for the given culture id : "' . $iRCultureId . '"');
        }

        return $oRCulture;
    }

    /**
     * Updates/creates culture data and returns the current object on success. On failure It returns
     * an array of validation errors
     *
     * @param  array $aCultureData
     * @return array
     */
    public function saveRCultureData(array $aCultureData)
    {
        $oRCulture = empty($aCultureData['r_culture_id']) ? new \RCultures() : $this->getRCultureByRCultureId((int) $aCultureData['r_culture_id']);

        // Initialize active with 0 if not posted in data form
        $oRCulture->setRCultureActif(0);

        $oRCulture->fromArray($aCultureData, \BasePeer::TYPE_FIELDNAME);
        if ($oRCulture->validate()) {
            $oRCulture->save();
            return array();
        }
        return $oRCulture->getValidationFailures();
    }

    /**
     * Delete a culture record and returns true, or returns false in case It's impossible to delete the record
     *
     * @param  integer $iRCultureId
     * @return boolean
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function deleteRCultureRecord($iRCultureId)
    {
        if (!is_integer($iRCultureId)) {
            throw new \InvalidArgumentException('Argument "$iRCultureId" expects an integer, "' . (is_object($iRCultureId) ? get_class($iRCultureId) : gettype($iRCultureId)) . '" given');
        }
        $oRCulture = $this->getRCultureByRCultureId($iRCultureId);
        if ($oRCulture->checkIfRCultureCanBeSafelyDeleted()) {
            $oRCulture->delete();
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

        $aRetrievedData = array(
            'Id' => 'r_culture_id',
            $oTranslate->translate('label_culture_code') => 'r_culture_code',
            $oTranslate->translate('label_culture_label') => 'r_culture_label',
            $oTranslate->translate('label_language_culture') => 'r_languages.r_lang_libelle',
            $oTranslate->translate('label_actif') => 'r_culture_actif',
        );

        $oZendDbSelect = $this->getZendDbSelect()->from('r_cultures', $aRetrievedData)
                ->joinLeft('r_languages', 'r_languages.r_lang_code = r_cultures.r_culture_language_code', array())
                ->order('r_culture_id asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect);

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
    protected function getMySearchEngine(\Zend_Db_Select $oZendDbSelect)
    {
        // Initiating a search engine for quick researchs
        $oSearchEngine = new \My_Search_Engine($oZendDbSelect);

        $aSearchedFields = array(
            'r_culture_code' => array('operator' => 'eql'),
            'r_culture_label' => array('operator' => 'like'),
        );

        $oSearchEngine->findWordOn($aSearchedFields);
        // Initiating a search engine for advanced researchs

        $aSearchedFields['r_culture_actif'] = array('operator' => 'eql');
        $aSearchedFields['r_culture_language_code'] = array('operator' => 'eql');
        $aSearchedFields['r_culture_id'] = array('operator' => 'eql');
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
     * @return \Phoenix_Administration_RCultures_Service_RCulturesService
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
