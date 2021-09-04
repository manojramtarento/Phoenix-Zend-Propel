<?php



class Operation_ParamopController extends My_Controller_Action
{

    /**
     * mvc action
     */
    public function indexAction()
    {
        $this->view->operation = OperationsQuery::create()->findPk($this->getParam('op_id'));
    }

}
 