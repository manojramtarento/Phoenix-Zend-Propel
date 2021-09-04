<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductionController
 *
 * @author info20
 */
class Operation_ProductionController extends My_Controller_Action{
	
	/**
	 * affichage de la page
	 */
	public function indexAction(){
		$aParams = $this->_request->getParams();
		$operation = OperationsQuery::create()->filterByPrimaryKey($aParams['op_id'])
				->findOne();

		$this->view->operation = $operation;

	}
	
	
	/**
	 * maj valeurs de champs d'une opération
	 */
	public function updatefieldAction() {
		if ($this->_request->isXmlHttpRequest()) {
			$response = $this->_helper->AjaxComponents()->updateField(array('Operations'));
			$this->_helper->Json($response);
		}
	}
	
	
}

?>
