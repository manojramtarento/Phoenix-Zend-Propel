<?php

/**
 * This class has been made as a service to be used by the controller RlanguagesController
 * located in the administration module
 *
 * This class is used to manage languages data
 */
class Phoenix_Administration_RLanguages_Service_RLanguagesService
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
     * Builds and returns a paginator of filtered languages
     *
     * @param  integer $iPageNumber
     * @return \My_Paginator
     * @throws \InvalidArgumentException
     */
    public function getRLanguagesPaginator($iPageNumber)
    {
        if (!is_integer($iPageNumber)) {
            throw new \InvalidArgumentException('Argument "$iPageNumber" expects an integer, "' . (is_object($iPageNumber) ? get_class($iPageNumber) : gettype($iPageNumber)) . '" given');
        }

        $oZendDbSelect = $this->getZendDbSelect();
        $oZendDbSelect->from('r_languages')
                ->order('r_lang_code asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect);

        // Initiating paginator adapter
        $oPaginatorAdapter = new \Zend_Paginator_Adapter_DbSelect($oSearchEngine->getSelect());
        // Creating paginator
        $oPaginator = new \My_Paginator($oPaginatorAdapter);

        return $oPaginator->setCurrentPageNumber($iPageNumber)
                        ->setItemCountPerPage(self::NUMBER_OF_ELEMENTS_PER_PAGE);
    }

    /**
     * Gets a language instance by lang code
     *
     * @param  string $sRLangCode
     * @return \RLanguages
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getRLanguageByRLangCode($sRLangCode)
    {

        if (!is_string($sRLangCode)) {
            throw new \InvalidArgumentException('Argument "$sRLangCode" expects a string, "' . (is_object($sRLangCode) ? get_class($sRLangCode) : gettype($sRLangCode)) . '" given');
        }

        $oRLanguage = \RLanguagesQuery::create()->findPk($sRLangCode);

        if ($oRLanguage instanceof \RLanguages) {
            return $oRLanguage;
        }

        throw new \LogicException('No language has been found for the given language code : "' . $sRLangCode . '"');
    }

    /**
     * Updates/creates language data and returns the current object on success. On failure It returns
     * an array of validation errors
     *
     * @param  array $aRLanguageData
     * @return \Phoenix_Administration_RLanguages_Service_RLanguagesService | array
     */
    public function saveRLanguageData(array $aRLanguageData)
    {

        if (!empty($aRLanguageData['old_r_lang_code'])) {
            $oRLanguage = $this->getRLanguageByRLangCode($aRLanguageData['old_r_lang_code']);
        } else {
            $oRLanguage = new \RLanguages();
            if (RLanguagesQuery::create()->filterByRLangCode($aRLanguageData['r_lang_code'])->count()) {
                $oRLanguage->addValidationFailed($this->getZendTranslate()->translate('message_r_lang_code_duplicated'));
            }
            $oRLanguage->setRLangCode($aRLanguageData['r_lang_code']);
        }
        $oRLanguage->setRLangHasTraductionDevis((isset($aRLanguageData['r_lang_has_traduction_devis']) && $aRLanguageData['r_lang_has_traduction_devis'] === '1'));
        $oRLanguage->setRLangLibelle($aRLanguageData['r_lang_libelle']);
        if ($oRLanguage->validate()) {
            $oRLanguage->save();
            return $this;
        }
        return $oRLanguage->getValidationFailures();
    }

    /**
     * Delete a language record and returns true, or returns false in case It's impossible to delete the record
     *
     * @param  string $sRLangCode
     * @return boolean
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function deleteRLanguageRecord($sRLangCode)
    {

        if (!is_string($sRLangCode)) {
            throw new \InvalidArgumentException('Argument "$sRLangCode" expects a string, "' . (is_object($sRLangCode) ? get_class($sRLangCode) : gettype($sRLangCode)) . '" given');
        }

        $oRLanguage = $this->getRLanguageByRLangCode($sRLangCode);

        if ($oRLanguage->checkIfRLanguageCanBeSafelyDeleted()) {
            $oRLanguage->delete();
            return true;
        }
        return false;
    }

    /**
     * Builds a CSV export and send it to the user
     */
    public function buildExport()
    {

        $oTranslate = $this->getZendTranslate();
        $oZendDbSelect = $this->getZendDbSelect()
                ->order('r_lang_code asc');

        $oSearchEngine = $this->getMySearchEngine($oZendDbSelect);

        $aRetrievedData = array(
            'Code' => 'r_lang_code',
            $oTranslate->translate('label_code') => 'r_lang_code',
            $oTranslate->translate('label_language_label') => 'r_lang_libelle',
            $oTranslate->translate('label_has_quotation_translation') => 'r_lang_has_traduction_devis',
        );

        $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oSearchEngine->getSelect()->from('r_languages', $aRetrievedData)));
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
            'r_lang_code' => array('operator' => 'eql'),
            'r_lang_libelle' => array('operator' => 'like'),
        );

        $oSearchEngine->findWordOn($aSearchedFields);
        // Initiating a search engine for advanced researchs

        $aSearchedFields['r_lang_has_traduction_devis'] = array('operator' => 'eql');
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
     * @return \Phoenix_Administration_RLanguages_Service_RLanguagesService
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

        throw new \LogicException('undefinded Zend Translate object');
    }
}
