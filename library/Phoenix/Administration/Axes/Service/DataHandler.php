<?php

/**
 * This class has been made as a service to be used by the controller axes administration
 * located in the administration module
 *
 * This class is used to retrieve axes data
 *
 * @author Amine JAAOUANI
 */
class Phoenix_Administration_Axes_Service_DataHandler
{

    /**
     *
     * @var array
     */
    protected $axesConfig;

    /**
     *
     * @var Zend_Translate
     */
    protected $translate;

    /**
     *
     * @var Zend_Db_Select
     */
    protected $dbAdapter;

    /**
     * Gets the property axesConfig value, Lazy loads it if undefined yet
     *
     * @return array
     * @throws \RuntimeException
     * @throws \LogicException
     */
    public function getAxesConfig()
    {
        if ($this->axesConfig === null) {
            $sAxesConfigFilePath = __DIR__ . DIRECTORY_SEPARATOR . '../configs/Axes.php';
            if (file_exists($sAxesConfigFilePath)) {
                if (false === is_readable($sAxesConfigFilePath)) {
                    throw new \RuntimeException('An error occured while reading axes configuration file "' . $sAxesConfigFilePath . '"');
                }
                if (false === ($aAxesConfig = include $sAxesConfigFilePath)) {
                    throw new \RuntimeException('An error occured while including axes configuration file "' . $sAxesConfigFilePath . '"');
                }
                if (!is_array($aAxesConfig)) {
                    throw new \LogicException('Axes config from configuration file "' . $sAxesConfigFilePath . '" expects an array, "' . gettype($aAxesConfig) . '" retrieved');
                }
            } else {
                throw new \LogicException('Axes configuration file "' . $sAxesConfigFilePath . '" does not exist');
            }
            $this->setAxesConfig($aAxesConfig);
        }

        if (is_array($this->axesConfig)) {
            return $this->axesConfig;
        }
        throw new \LogicException('Property "axesConfig" expects an array , "' . (is_object($this->axesConfig) ? get_class($this->axesConfig) : gettype($this->axesConfig)) . '" defined');
    }

    /**
     * Gets the property translate value, Lazy loads it if undefined yet
     *
     * @return \Zend_Translate
     * @throws \LogicException
     */
    public function getTranslate()
    {
        if ($this->translate === null) {
            if (\Zend_Registry::isRegistered('Zend_Translate')) {
                $this->setTranslate(\Zend_Registry::get('Zend_Translate'));
            } else {
                \Administration_Translator::initTranslator('fr_FR');
                $this->setTranslate(\Zend_Registry::get('Zend_Translate'));
            }
        }

        if ($this->translate instanceof \Zend_Translate) {
            return $this->translate;
        }
        throw new \LogicException('Property "translate" expects an instance of "Zend_Translate", "' . (is_object($this->translate) ? get_class($this->translate) : gettype($this->translate)) . '" defined');
    }

    /**
     * Gets the property dbAdapter value, Lazy loads it if undefined yet
     *
     * @return \Zend_Db_Select
     * @throws \LogicException
     */
    public function getDbAdapter()
    {
        if ($this->dbAdapter === null) {
            $oZendDbSelect = new \Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $this->setDbAdapter($oZendDbSelect);
        }

        if ($this->dbAdapter instanceof \Zend_Db_Select) {
            return $this->dbAdapter;
        }
        throw new \LogicException('Property "dbAdapter" expects an instance of "Zend_Db_Select", "' . (is_object($this->dbAdapter) ? get_class($this->dbAdapter) : gettype($this->dbAdapter)) . '" defined');
    }

    /**
     * Sets the property axesConfig value
     *
     * @param array $aAxesConfig
     */
    public function setAxesConfig(array $aAxesConfig)
    {
        $this->axesConfig = $aAxesConfig;
        return $this;
    }

    /**
     *
     * @param \Zend_Translate $oTranslate
     * @return \Phoenix_Administration_Axes_Service_DataFetcher
     */
    public function setTranslate(\Zend_Translate $oTranslate)
    {
        $this->translate = $oTranslate;
        return $this;
    }

    /**
     * @param \Zend_Db_Select $oAdapter
     * @return \Phoenix_Administration_Axes_Service_DataFetcher
     */
    public function setDbAdapter(\Zend_Db_Select $oAdapter)
    {
        $this->dbAdapter = $oAdapter;
        return $this;
    }

    /**
     * Gets the available axes configuration with translated names
     *
     * @return array
     */
    public function getAxesConfigWithTranslatedNames()
    {
        $aAxesConfig = $this->getAxesConfig();
        $aAxesNames = array();
        foreach ($aAxesConfig as $sAxeIdentfier => $aAxe) {
            if (isset($aAxe['axe_name'])) {
                $aAxesNames[$this->getTranslate()->translate($aAxe['axe_name'])] = array('value' => $sAxeIdentfier);
            }
        }

        return $aAxesNames;
    }

    /**
     * Gets the list of fields to select from the axe table, the labels of fields are translated
     *
     * @param  array $aFieldsToTranslate
     * @return array
     */
    public function getTranslatedFieldsToSelect(array $aFieldsToTranslate)
    {
        $aTranslatedFields = array();
        foreach ($aFieldsToTranslate as $sKey => $aField) {
            $aTranslatedFields[$this->getTranslate()->translate($sKey)] = $aField;
        }

        return $aTranslatedFields;
    }

    /**
     * Retrieves axes data, table name, and data header
     *
     * @param  string $sAxesIdentifiant
     * @return array
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function retrieveAxesData($sAxesIdentifiant)
    {

        if (!is_string($sAxesIdentifiant)) {
            throw new \InvalidArgumentException('Argument "$sAxesIdentifiant" expects a string, "' . gettype($sAxesIdentifiant) . '" given');
        }

        $aAxesConfig = $this->getAxesConfig();

        if (!isset($aAxesConfig[$sAxesIdentifiant])) {
            throw new \LogicException('The requested axe identifiant "' . $sAxesIdentifiant . '" could not be found whithin the axes configuration : ' . print_r($aAxesConfig, true));
        }

        if (empty($aAxesConfig[$sAxesIdentifiant]['axe_table_name'])) {
            throw new \LogicException('The "axe_table_name" key is undefined for the requested axes config "' . print_r($aAxesConfig[$sAxesIdentifiant], true));
        }

        if (empty($aAxesConfig[$sAxesIdentifiant]['fields_to_select'])) {
            throw new \LogicException('The "fields_to_select" key is not set for the requested axes config "' . print_r($aAxesConfig[$sAxesIdentifiant], true));
        }

        $aTranslatedFieldsToSelect = $this->getTranslatedFieldsToSelect($aAxesConfig[$sAxesIdentifiant]['fields_to_select']);

        $oSelect = $this->getDbAdapter()->from($aAxesConfig[$sAxesIdentifiant]['axe_table_name'], $aTranslatedFieldsToSelect);

        if (isset($aAxesConfig[$sAxesIdentifiant]['additional_fields_by_joins'])) {
            // Adding one or multiple joins to the same object $oSelect
            $aAdditionalFieldsToSelectLabels = $this->addAddtionnalFieldsByJoins($oSelect, $aAxesConfig[$sAxesIdentifiant]['additional_fields_by_joins']);
        }

        // Decorating $oSelect with My_Search_Engine in order to be able to sort result by fields
        $oMySearchEngine = new My_Search_Engine($oSelect);
        $oMySearchEngine->makeOrderBy();
        $aAxeData = $oMySearchEngine->getSelect()->query()->fetchAll();

        // Building the data result header
        $aAxesDataHeader = array_keys($aTranslatedFieldsToSelect);

        if (isset($aAdditionalFieldsToSelectLabels)) {
            $aAxesDataHeader = array_merge($aAxesDataHeader, $aAdditionalFieldsToSelectLabels);
        }

        return array('axe_data' => $aAxeData,
            'axe_data_header' => array_combine($aAxesDataHeader, $aAxesDataHeader),
            'axe_data_table_name' => $aAxesConfig[$sAxesIdentifiant]['axe_table_name']);
    }

    /**
     *
     * @param string $sAxeDataTable
     * @param string $sAxeDataElement
     * @return array
     * @throws \InvalidArgumentException
     */
    public function deleteAxeData($sAxeDataTable, $sAxeDataElement)
    {
        if (!is_string($sAxeDataTable)) {
            throw new \InvalidArgumentException('Argument "$sAxeDataTable" expects a string, "' . gettype($sAxeDataTable) . '" given');
        }
        if (!is_string($sAxeDataElement)) {
            throw new \InvalidArgumentException('Argument "$sAxeDataElement" expects a string, "' . gettype($sAxeDataElement) . '" given');
        }

        $oAxeObject = $this->getRelatedAxeObject($sAxeDataTable, $sAxeDataElement);
        $sClassToInvoke = $this->getTableAssociatedClassName($sAxeDataTable);

        if ($oAxeObject instanceof $sClassToInvoke) {
            if ($oAxeObject->delete()) {
                return array('is_processed' => true, 'message' => 'La section a été supprimée avec succès');
            } else {
                $oPropelFailures = new My_Propel_Failures();
                $aValidationFailures = $oPropelFailures->validationFailuresToSimpleArray($oAxeObject->getValidationFailures());
                return array('is_processed' => false, 'message' => $aValidationFailures);
            }
        }

        return array('is_processed' => false, 'message' => array('Une erreur est survenue lors de la suppression de la section, assurez vous que la section est toujours présente'));
    }

    /**
     * Converts a given table name to the associated class name
     *
     * @param  string $sTableName
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getTableAssociatedClassName($sTableName)
    {
        if (!is_string($sTableName)) {
            throw new \InvalidArgumentException('Argument "$sTableName" expects a string, "' . gettype($sTableName) . '" given');
        }

        $aAxeConfig = $this->getAxeConfigByTableName($sTableName);
        if (isset($aAxeConfig['axe_mapped_class_name'])) {
            return $aAxeConfig['axe_mapped_class_name'];
        }

        throw new \LogicException('The "axe_mapped_class_name" key is undefined for the requested axes config "' . print_r($aAxeConfig, true));
    }

    /**
     *
     * @param string $sAxeDataTable
     * @param string $sAxeDataElement
     * @return \BaseObject
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getRelatedAxeObject($sAxeDataTable, $sAxeDataElement)
    {
        if (!is_string($sAxeDataTable)) {
            throw new \InvalidArgumentException('Argument "$sAxeDataTable" expects a string, "' . gettype($sAxeDataTable) . '" given');
        }
        if (!is_string($sAxeDataElement)) {
            throw new \InvalidArgumentException('Argument "$sAxeDataElement" expects a string, "' . gettype($sAxeDataElement) . '" given');
        }

        $sClassToInvoke = $this->getTableAssociatedClassName($sAxeDataTable);
        $sClassQuery = $sClassToInvoke . 'Query';
        if (!class_exists($sClassToInvoke)) {
            throw new \LogicException('The computed class name :"' . $sClassToInvoke . '" from the given table name "' . $sAxeDataTable . '", could not be found');
        }

        $oAxeObject = $sClassQuery::create()->findPk($sAxeDataElement);
        return $oAxeObject;
    }

    /**
     *
     * @param array $aAxeConfig
     * @param array|NULL $aAxeData
     * @return array
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getAxeFormFields(array $aAxeConfig, $aAxeData = null)
    {
        if (!is_array($aAxeData) && !is_null($aAxeData)) {
            throw new \InvalidArgumentException('Argument "$aAxeData" expects either an array or NULL, "' . gettype($aAxeData) . '" given');
        }

        if (!isset($aAxeConfig['fields_classes'])) {
            throw new \LogicException('Axe argument expected to have a "field_classes" attribute, "' . print_r($aAxeConfig, true) . '" given');
        }

        $aAxeFormFields = array();

        foreach ($aAxeConfig['fields_classes'] as $sKey => $sConfig) {
            $aAxesFields = array('field_id' => 'id_' . $sKey, 'field_type' => $sConfig, 'field_name' => $sKey);
            if ($aAxeData && isset($aAxeData[$sKey])) {
                $aAxesFields['field_value'] = $aAxeData[$sKey];
            }
            $aAxeFormFields[] = $aAxesFields;
        }

        if (isset($aAxeConfig['additional_inputs'])) {
            $aAxeFormFields['additional_inputs'] = $this->getAddtitionalFieldsInputs($aAxeConfig['additional_inputs'], $aAxeData);
        }
        return $aAxeFormFields;
    }

    /**
     *
     * @param string $sTableName
     * @return array
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getAxeConfigByTableName($sTableName)
    {
        if (!is_string($sTableName)) {
            throw new \InvalidArgumentException('Argument "$sTableName" expects a string, "' . gettype($sTableName) . '" given');
        }
        $aAxeConfigs = $this->getAxesConfig();
        foreach ($aAxeConfigs as $aAxeConfig) {
            if (isset($aAxeConfig['axe_table_name']) && $aAxeConfig['axe_table_name'] === $sTableName) {
                return $aAxeConfig;
            }
        }

        throw new \LogicException('No configuration has been found for the given table name "' . $sTableName . '"');
    }

    /**
     * Adds one or multiple joins to the $oSelect object
     *
     * @param  Zend_Db_Select $oSelect
     * @param  array $aJoinSettings
     * @return array
     * @throws \LogicException
     * @throws \DomainException
     */
    public function addAddtionnalFieldsByJoins(Zend_Db_Select $oSelect, array $aJoinSettings)
    {

        $aFieldsToSelectLabels = array();
        foreach ($aJoinSettings as $aJoinSetting) {
            if (!isset($aJoinSetting['table_to_join_with'])) {
                throw new \LogicException('Parameter "table_to_join_with" is expected, but was not found in given join setting : "' . print_r($aJoinSetting, true));
            }

            if (!is_array($aJoinSetting['table_to_join_with'])) {
                throw new \LogicException('Parameter "table_to_join_with" expects an array, "' . (is_object($aJoinSetting['table_to_join_with']) ? get_class($aJoinSetting['table_to_join_with']) : gettype($aJoinSetting['table_to_join_with'])) . '" given');
            }

            if (!isset($aJoinSetting['join_condition'])) {
                throw new \LogicException('Parameter "join_condition" is expected, but was not found in the given join setting : "' . print_r($aJoinSetting, true));
            }

            if (!is_string($aJoinSetting['join_condition'])) {
                throw new \LogicException('Parameter "join_condition" expects a string, "' . (is_object($aJoinSetting['join_condition']) ? get_class($aJoinSetting['join_condition']) : gettype($aJoinSetting['join_condition'])) . '" given');
            }

            if (!isset($aJoinSetting['fields_to_select'])) {
                throw new \LogicException('Parameter "fields_to_select" is expected, but was not found in given join setting : "' . print_r($aJoinSetting, true));
            }

            if (!is_array($aJoinSetting['fields_to_select'])) {
                throw new \LogicException('Parameter "fields_to_select" expects an array, "' . (is_object($aJoinSetting['fields_to_select']) ? get_class($aJoinSetting['fields_to_select']) : gettype($aJoinSetting['fields_to_select'])) . '" given');
            }

            if (!isset($aJoinSetting['join_type'])) {
                throw new \LogicException('Parameter "join_type" is expected, but was not found in the given join setting : "' . print_r($aJoinSetting, true));
            }

            if (!is_string($aJoinSetting['join_type'])) {
                throw new \LogicException('Parameter "join_type" expects a string, "' . (is_object($aJoinSetting['join_type']) ? get_class($aJoinSetting['join_type']) : gettype($aJoinSetting['join_type'])) . '" given');
            }

            // Translating aliases
            $aTranslatedAliasFieldsToSelect = array();
            foreach ($aJoinSetting['fields_to_select'] as $sTranslatedFieldAlias => $sFieldToSelect) {
                $aTranslatedAliasFieldsToSelect[$this->getTranslate()->translate($sTranslatedFieldAlias)] = $sFieldToSelect;
            }

            $aFieldsToSelectLabels = array_merge($aFieldsToSelectLabels, array_keys($aTranslatedAliasFieldsToSelect));

            switch ($aJoinSetting['join_type']) {
                case Zend_Db_Select::LEFT_JOIN:
                    $oSelect->joinLeft($aJoinSetting['table_to_join_with'], $aJoinSetting['join_condition'], $aTranslatedAliasFieldsToSelect);
                    break;
                case Zend_Db_Select::RIGHT_JOIN:
                    $oSelect->joinRight($aJoinSetting['table_to_join_with'], $aJoinSetting['join_condition'], $aTranslatedAliasFieldsToSelect);
                    break;
                case Zend_Db_Select::INNER_JOIN:
                    $oSelect->joinInner($aJoinSetting['table_to_join_with'], $aJoinSetting['join_condition'], $aTranslatedAliasFieldsToSelect);
                    break;
                default:
                    throw new \DomainException('The supplied "join_type" : "' . $aJoinSetting['join_type'] . '" is not supported"');
            }
        }

        return $aFieldsToSelectLabels;
    }

    /**
     *
     * @param array $aAdditionalFieldsSettings
     * @param array $aAxeData
     * @return array
     * @throws \InvalidArgumentException
     * @throws \LogicException
     * @throws \DomainException
     */
    public function getAddtitionalFieldsInputs(array $aAdditionalFieldsSettings, array $aAxeData = null)
    {

        $aAdditionalFieldsInput = array();
        foreach ($aAdditionalFieldsSettings as $aAdditionalFieldSetting) {
            $sDefaultValue = '';

            if (!isset($aAdditionalFieldSetting['field_label'])) {
                throw new \LogicException('Parameter "field_label" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
            }

            if (!is_string($aAdditionalFieldSetting['field_label'])) {
                throw new \LogicException('Parameter "field_label" expects an array, "' . (is_object($aAdditionalFieldSetting['field_label']) ? get_class($aAdditionalFieldSetting['field_label']) : gettype($aAdditionalFieldSetting['field_label'])) . '" given');
            }
            if (!isset($aAdditionalFieldSetting['field_type'])) {
                throw new \LogicException('Parameter "field_type" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
            }

            if (!is_string($aAdditionalFieldSetting['field_type'])) {
                throw new \LogicException('Parameter "field_type" expects a string, "' . (is_object($aAdditionalFieldSetting['field_type']) ? get_class($aAdditionalFieldSetting['field_type']) : gettype($aAdditionalFieldSetting['field_type'])) . '" given');
            }

            if (!isset($aAdditionalFieldSetting['field_setting'])) {
                throw new \LogicException('Parameter "field_setting" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
            }

            if (!is_array($aAdditionalFieldSetting['field_setting'])) {
                throw new \LogicException('Parameter "field_setting" expects an array, "' . (is_object($aAdditionalFieldSetting['field_setting']) ? get_class($aAdditionalFieldSetting['field_setting']) : gettype($aAdditionalFieldSetting['field_setting'])) . '" given');
            }

            if (isset($aAdditionalFieldSetting['default_value'])) {
                if (!is_scalar($aAdditionalFieldSetting['default_value'])) {
                    throw new \LogicException('Parameter "default_value" expects a scalar, "' . ( is_object($aAdditionalFieldSetting['default_value']) ? get_class($aAdditionalFieldSetting['default_value']) : gettype($aAdditionalFieldSetting['default_value'])) . '" given');
                }
                $sDefaultValue = $aAdditionalFieldSetting['default_value'];
            }

            switch ($aAdditionalFieldSetting['field_type']) {
                case 'select_from_table':
                    $aParameters = array();


                    if (!isset($aAdditionalFieldSetting['field_setting']['table_to_select_from'])) {
                        throw new \LogicException('Parameter "table_to_select_from" is expected in field_setting, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting['field_setting'], true));
                    }

                    if (!is_string($aAdditionalFieldSetting['field_setting']['table_to_select_from'])) {
                        throw new \LogicException('Parameter "table_to_select_from" expects a string, "' . (is_object($aAdditionalFieldSetting['field_setting']['table_to_select_from']) ? get_class($aAdditionalFieldSetting['field_setting']['table_to_select_from']) : gettype($aAdditionalFieldSetting['field_setting']['table_to_select_from'])) . '" given');
                    }

                    if (!isset($aAdditionalFieldSetting['field_setting']['attributes'])) {
                        throw new \LogicException('Parameter "attributes" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
                    }

                    if (!is_array($aAdditionalFieldSetting['field_setting']['attributes'])) {
                        throw new \LogicException('Parameter "attributes" expects an array, "' . (is_object($aAdditionalFieldSetting['field_setting']['attributes']) ? get_class($aAdditionalFieldSetting['field_setting']['attributes']) : gettype($aAdditionalFieldSetting['field_setting']['attributes'])) . '" given');
                    }

                    if (!isset($aAdditionalFieldSetting['field_setting']['attributes']['name'])) {
                        throw new \LogicException('Parameter "name" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
                    }

                    if (!is_string($aAdditionalFieldSetting['field_setting']['attributes']['name'])) {
                        throw new \LogicException('Parameter "name" expects a string, "' . (is_object($aAdditionalFieldSetting['field_setting']['attributes']['name']) ? get_class($aAdditionalFieldSetting['field_setting']['attributes']['name']) : gettype($aAdditionalFieldSetting['field_setting']['attributes']['name'])) . '" given');
                    }

                    if (!isset($aAdditionalFieldSetting['field_setting']['option_mapper'])) {
                        throw new \LogicException('Parameter "option_mapper" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
                    }

                    if (!is_array($aAdditionalFieldSetting['field_setting']['option_mapper'])) {
                        throw new \LogicException('Parameter "option_mapper" expects an array, "' . (is_object($aAdditionalFieldSetting['field_setting']['option_mapper']) ? get_class($aAdditionalFieldSetting['field_setting']['option_mapper']) : gettype($aAdditionalFieldSetting['field_setting']['option_mapper'])) . '" given');
                    }

                    if (!isset($aAdditionalFieldSetting['field_setting']['option_mapper']['name'])) {
                        throw new \LogicException('Parameter "name" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
                    }

                    if (!is_string($aAdditionalFieldSetting['field_setting']['option_mapper']['name'])) {
                        throw new \LogicException('Parameter "name" expects a string, "' . (is_object($aAdditionalFieldSetting['field_setting']['option_mapper']['name']) ? get_class($aAdditionalFieldSetting['field_setting']['option_mapper']['name']) : gettype($aAdditionalFieldSetting['field_setting']['option_mapper']['name'])) . '" given');
                    }

                    if (!isset($aAdditionalFieldSetting['field_setting']['option_mapper']['value'])) {
                        throw new \LogicException('Parameter "value" is expected, but was not found in given field setting : "' . print_r($aAdditionalFieldSetting, true));
                    }

                    if (!is_string($aAdditionalFieldSetting['field_setting']['option_mapper']['value'])) {
                        throw new \LogicException('Parameter "value" expects a string, "' . (is_object($aAdditionalFieldSetting['field_setting']['option_mapper']['value']) ? get_class($aAdditionalFieldSetting['field_setting']['option_mapper']['value']) : gettype($aAdditionalFieldSetting['field_setting']['option_mapper']['value'])) . '" given');
                    }

                    if (isset($aAdditionalFieldSetting['field_setting']['parameters'])) {
                        if (!is_array($aAdditionalFieldSetting['field_setting']['parameters'])) {
                            throw new \LogicException('Parameter "parameters" expects an array, "' . (is_object($aAdditionalFieldSetting['field_setting']['parameters']) ? get_class($aAdditionalFieldSetting['field_setting']['parameters']) : gettype($aAdditionalFieldSetting['field_setting']['parameters'])) . '" given');
                        }
                        $aParameters = $aAdditionalFieldSetting['field_setting']['parameters'];
                    }

                    // Computing input value
                    $sSetValue = ($aAxeData && isset($aAxeData[$aAdditionalFieldSetting['field_setting']['attributes']['name']])) ? $aAxeData[$aAdditionalFieldSetting['field_setting']['attributes']['name']] : $sDefaultValue;

                    $aAdditionalFieldSetting['field_setting']['attributes']['value'] = $sSetValue;

                    $aAdditionalFieldsInput[] = array('field_label' => $aAdditionalFieldSetting['field_label'], 'field_render' => Phoenix_View_Helper_Html::selectFromTable(
                        $aAdditionalFieldSetting['field_setting']['table_to_select_from'],
                        $aAdditionalFieldSetting['field_setting']['attributes'],
                        $aAdditionalFieldSetting['field_setting']['option_mapper'],
                        $aParameters
                    ));

                    break;
                default:
                    throw new \DomainException('The supplied "field_type" : "' . $aAdditionalFieldSetting['field_type'] . '" is not supported"');
            }
        }

        return $aAdditionalFieldsInput;
    }
}
