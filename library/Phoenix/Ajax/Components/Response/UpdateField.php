<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fieldupdate
 *
 * @author info20
 */
class Phoenix_Ajax_Components_Response_UpdateField extends Phoenix_Ajax_Components_Response {

    var $fieldName;

    /**
     *
     * @param type $iAction type de traitement à exploiter côté client
     * @param type $mMsg message de retour
     * @param type $sFieldName 
     */
    function __construct($iAction, $mMsg, $sFieldName, $fieldValue, $fieldId, $primaryValue) {
        parent::__construct($iAction, $mMsg);
        $this->fieldName = $sFieldName;
        $this->fieldId = $fieldId;
        $this->primaryValue = $primaryValue;
        $this->fieldValue = $fieldValue;
    }

}

?>