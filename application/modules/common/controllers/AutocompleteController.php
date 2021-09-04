<?php

class Common_AutocompleteController extends My_Controller_Action
{

    /**
     * Ajax function : listing of users in json for autocomplete
     */
    public function userAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocomplete('users', array('user_nom', 'user_prenom'), array('value' => 'user_nom.user_prenom', 'id' => 'user_id'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of the operations attached to a client given in json for autocomplete
     */
    public function clientoperationAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();
            $sQuery = (isset($aParams['cl_id']) && $aParams['cl_id']) ? 'op_cl_id = ' . $aParams['cl_id'] : null;
            $oResponse = $this->_helper->AjaxComponents()->autocompleteClientOperations(array('value' => 'op_number.op_libelle', 'id' => 'op_id'), ($sQuery) ? $sQuery : null);
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of operations in json for autocomplete
     */
    public function operationAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocomplete('operations', array('op_number', 'op_libelle'), array('value' => 'op_number.op_libelle', 'id' => 'op_id'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of customers in json for autocomplete
     */
    public function clientAction()
    {
		
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocompleteWithAttributes('clients', array('cl_id', 'cl_libelle','cl_ct_gestion'), array('value' => 'cl_libelle', 'id' => 'cl_id' ,'Attrtibutes' => 'cl_ct_gestion' ), 'actif=1');
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of contacts in json for autocomplete
     */
    public function contactAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocomplete('contacts', array('ct_lastname', 'ct_firstname'), array('value' => 'ct_lastname.ct_firstname', 'id' => 'ct_id'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : Listing of countries in json for autocomplete
     */
    public function countryAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocomplete('r_countries', array('r_country_name', 'r_country_id'), array('value' => 'r_country_name', 'id' => 'r_country_id'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of services in json for autocomplete
     */
    public function prestationAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocomplete('r_prestations', array('r_prestation_id', 'r_p_libelle'), array('value' => 'r_prestation_id.r_p_libelle', 'id' => 'r_prestation_id'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of clients services negotiated in json for autocomplete
     */
    public function prestationclientwithnegoceAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();
            $oResponse = $this->_helper->AjaxComponents()->autocompletePrestationWithNegoce($aParams['cl_id'], array('value' => 'r_prestation_id.r_p_libelle', 'id' => 'r_prestation_id'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of sections in json for autocomplete
     */
    public function rubriqueAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocomplete('r_rubriques', array('r_rub_id', 'r_rub_libelle'), array('value' => 'r_rub_id.r_rub_libelle', 'id' => 'r_rub_id'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Ajax function : listing of AD groups in json for autocomplete
     */
    public function groupadAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->autocomplete('acl_groups', array('group_name'), array('value' => 'group_name', 'id' => 'group_id'));
            $this->_helper->Json($oResponse);
        }
    }
}
