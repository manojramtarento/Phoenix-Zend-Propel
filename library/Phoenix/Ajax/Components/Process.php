<?php

class Phoenix_Ajax_Components_Process
{

    /**
     * @var Phoenix_Ajax_Components_Process
     */
    protected static $instance = null;

    /**
     *
     * @return Phoenix_Ajax_Components_Process
     */
    public static function getInstance()
    {
        if (! isset(self::$instance)) {
            self::$instance = new Phoenix_Ajax_Components_Process();
        }
        return self::$instance;
    }

    /**
     * Processing for ajax request in javascript updateField component source, updates the value of a field in a model
     * Expected GET parameters: modelName, fieldName, fieldValue, PrimaryValue, PrimaryValue
     * @param array $aModelsEnabled : list of models accessible for modification
     * @param array $aParams
     * @param array $aOption [action, msg]
     * @return Phoenix_Ajax_Components_Response_UpdateField
     */
    public function updateField($aModelsEnabled = array(), $aParams = array(), $aOption = array())
    {
        try {
            $oZendControllerRequestHttp = new Zend_Controller_Request_Http();
            $aRequestParams = $oZendControllerRequestHttp->getParams();
            $sModelName = $aParams['modelName'] ?? $aRequestParams['modelName'];
            $sFieldName = $aParams['fieldName'] ?? $aRequestParams['fieldName'];
            $sFieldValue = $aParams['fieldValue'] ?? $aRequestParams['fieldValue'];
            $sFieldId = $aParams['fieldId'] ?? $aRequestParams['fieldId'];
            $sPrimaryValue = $aParams['primaryValue'] ?? $aRequestParams['primaryValue'];

            $sModelClassName = $sModelName;
            if (count($aModelsEnabled) > 0) {
                if (! in_array($sModelName, $aModelsEnabled)) {
                    return new Phoenix_Ajax_Components_Response_UpdateField(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, "Vous n'êtes pas autorisé à modifier cette donnée", $sFieldName, $sFieldId);
                }
            }

            if (! class_exists($sModelClassName)) {
                $sAction = Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS;
                $aMessages = 'La classe ' . $sModelClassName . " n'existe pas";
            } else {
                $sClassQuery = $sModelClassName . 'Query';

                $oModel = $sClassQuery::create()->findPk($sPrimaryValue);
                if (! isset($oModel)) {
                    return new Phoenix_Ajax_Components_Response_UpdateField(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, 'Aucun ' . $sModelClassName . ' instancié avec la pk ' . $sPrimaryValue, $sFieldName, $sFieldId, $sPrimaryValue);
                }

                $sSetter = 'set' . implode(array_map('ucfirst', explode('_', $sFieldName)));
                $oModel->$sSetter($sFieldValue);

                if ($oModel->validate()) {
                    $sAction = Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA;
                    $aMessages = 'maj ok';
                    $oModel->save();
                } else {
                    $sAction = Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS;
                    $aFailures = $oModel->getValidationFailures();
                    $aFailures = My_Propel_Failures::getInstance()->validationFailuresToArray($aFailures);
                    $aMessages = $aFailures;
                }
            }
        } catch (Exception $oException) {
            $sAction = Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS;
            $aMessages = $oException->getMessage();
        }

        if (isset($aOption['action'])) {
            $sAction = $aOption['action'];
        }
        if (isset($aOption['msg'])) {
            if (is_array($aMessages)) {
                $aMessages[] = $aOption['msg'];
            } else {
                $aMessages = $aOption['msg'];
            }
        }

        return new Phoenix_Ajax_Components_Response_UpdateField($sAction, $aMessages, $sFieldName, $sFieldValue, $sFieldId, $sPrimaryValue);
    }

    /**
     * Generic processing for autocomplete based on data stored in a table
     * @param string $sModelName : name of the model on which to search for data
     * @param array $aSearchedFields : searched fields
     * @param array $aMappedFields : response based on model field values (id=>field name, value=>field names separated by a dot)
     * @return Phoenix_Ajax_Components_Response
     */
    public function autocomplete($sModelName, $aSearchedFields, $aMappedFields, $sWhere = null)
    {
        $oControllerActionHelperGetPostCleaned = new Phoenix_Controller_Action_Helper_GetPostCleaned();
        $aParams = $oControllerActionHelperGetPostCleaned->direct();

        $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()->from($sModelName);
        foreach ($aSearchedFields as $sFieldName) {
            $oSelect->orWhere($sFieldName . ' like ?', '%' . trim($aParams['term']) . '%');
        }
        if (isset($sWhere)) {
            $oSelect->where($sWhere);
        }

        $aResults = $oSelect->query()->fetchAll(PDO::FETCH_ASSOC);
        $iIterator = 0;
        $aJson = array();
        foreach ($aResults as $aResult) {
            $aJson[$iIterator]['id'] = $aResult[$aMappedFields['id']];
            $aValues = explode('.', $aMappedFields['value']);
            $aJson[$iIterator]['value'] = '';
            foreach ($aValues as $sValue) {
                $aJson[$iIterator]['value'] .= $aResult[$sValue] . ' ';
            }
            $iIterator++;
        }

        return new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aJson);
    }
    
    
    /**
     * Generic processing for autocompleteWithColumns based on data stored in a table
     * @param string $sModelName : name of the model on which to search for data
     * @param array $aSearchedFields : searched fields
     * @param array $aMappedFields : response based on model field values (id=>field name, value=>field names separated by a dot, Attrtibutes=> field name which you
     *  want to use as attributes seprated by comma )
     * @return Phoenix_Ajax_Components_Response
     */
    public function autocompleteWithAttributes(string $sModelName, array $aSearchedFields, array $aMappedFields, string $sWhere = null)  : Phoenix_Ajax_Components_Response
    {
        $oControllerActionHelperGetPostCleaned = new Phoenix_Controller_Action_Helper_GetPostCleaned();
        $aParams = $oControllerActionHelperGetPostCleaned->direct();

        $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()->from($sModelName);
        foreach ($aSearchedFields as $sFieldName) {
            $oSelect->orWhere($sFieldName . ' like ?', '%' . trim($aParams['term']) . '%');
        }
        if (isset($sWhere)) {
            $oSelect->where($sWhere);
        }

        $aResults = $oSelect->query()->fetchAll(PDO::FETCH_ASSOC);
        $iIterator = 0;
        $aJson = array();
        foreach ($aResults as $aResult) {
            $aJson[$iIterator]['id'] = $aResult[$aMappedFields['id']];
            $aValues = explode('.', $aMappedFields['value']);
            $aJson[$iIterator]['value'] = '';
            foreach ($aValues as $sValue) {
                $aJson[$iIterator]['value'] .= $aResult[$sValue] . ' ';
            }
            
            if (isset($aMappedFields['Attrtibutes'])) {
                $aAttribute = explode(',', $aMappedFields['Attrtibutes']);
                foreach ($aAttribute as $sAttribute) {
                     $sAttribute = trim($sAttribute);
                    $aJson[$iIterator][$sAttribute] = (isset($aResult[$sAttribute]))? $aResult[$sAttribute] : "";
                }
            }
            $iIterator++;
        }

        return new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aJson);
    }


    /**
     * Retrieval of transactions associated with a given customer
     * @param array $aMappedFields : Response based on model field values
     * @return Phoenix_Ajax_Components_Response
     */
    public function autocompleteClientOperations($aMappedFields, $sWhere = null)
    {
        $oControllerActionHelperGetPostCleaned = new Phoenix_Controller_Action_Helper_GetPostCleaned();
        $aParams = $oControllerActionHelperGetPostCleaned->direct();

        // Table names have lowercase names mysql is case sensitive
        $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()->from('operations');
        $oSelect->where('op_number like ? or op_libelle like ?', '%' . trim($aParams['term']) . '%');
        if (isset($sWhere)) {
            $oSelect->where($sWhere);
        }

        $aResults = $oSelect->query()->fetchAll(PDO::FETCH_ASSOC);

        $iIterator = 0;
        $aJson = array();
        foreach ($aResults as $aResult) {
            $aJson[$iIterator]['id'] = $aResult[$aMappedFields['id']];
            $aValues = explode('.', $aMappedFields['value']);
            $aJson[$iIterator]['value'] = '';
            foreach ($aValues as $sValue) {
                $aJson[$iIterator]['value'] .= $aResult[$sValue] . ' ';
            }
            $iIterator++;
        }
        return new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aJson);
    }

    /**
     * @param string $sClientId
     * @param array $aMappedFields
     * @return string
     */
    public function autocompletePrestationWithNegoce($sClientId, $aMappedFields)
    {
        $oClient = ClientsQuery::create()->findPk($sClientId);
        $oZendControllerRequestHttp = new Zend_Controller_Request_Http();
        $sTerm = $oZendControllerRequestHttp->getParam('term');

        $aPrestations = $oClient->getReferenceServicesWithNegoce(true, array('r_prestation_id' => $sTerm, 'r_p_libelle' => $sTerm, 'or' => true), false);

        $iIterator = 0;
        $aJson = array();
        foreach ($aPrestations as $aResult) {
            $aJson[$iIterator]['id'] = $aResult[$aMappedFields['id']];
            $aValues = explode('.', $aMappedFields['value']);
            $aJson[$iIterator]['value'] = '';
            foreach ($aValues as $sValue) {
                $aJson[$iIterator]['value'] .= $aResult[$sValue] . ' ';
            }
            $iIterator++;
        }


        return new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aJson);
    }
}
