<?php

/**
 *
 */
class Administration_AclController extends My_Controller_Action
{

    /**
     * Default action
     */
    public function indexAction()
    {

    }

    /**
     * Lists available roles and ressources
     *
     * @throws \LogicException
     */
    public function aclAction()
    {
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (!$this->_request->isXmlHttpRequest()) {
            throw new \LogicException('acl Action is only accessible through AJAX');
        }

        $aParams = $this->_request->getParams();

        if (!isset($aParams['int_cont_id'])) {
            throw new \LogicException('int_cont_id was not found in POST parameters');
        }

        $this->_helper->layout->disableLayout();

        $aFeatures = AclFonctionnalitesQuery::create()->findByIntContId($aParams['int_cont_id']);
        $aLnkAclGroupsFonctionnalites = LnkAclGroupsFonctionnalitesQuery::create()
                ->useAclFonctionnalitesQuery()->filterByIntContId($aParams['int_cont_id'])->endUse()
                ->find();
        $aAcl = array();

        foreach ($aLnkAclGroupsFonctionnalites as $oLnkAclGroupFonctionnality) {
            $aAcl[$oLnkAclGroupFonctionnality->getLnkAclGroupsFonctionnaliteFoncId()][$oLnkAclGroupFonctionnality->getLnkAclGroupsFonctionnaliteGroupId()] = true;
        }


        $this->view->acl = $aAcl;
        $this->view->roles = AclGroupsQuery::create()->filterByGroupOrganisationId(Zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())->find();
        $this->view->features = $aFeatures;
    }

    /**
     * Allow or Deny access for a role to a feature
     *
     * @throws \LogicException
     */
    public function updateaclAction()
    {
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (!$this->_request->isXmlHttpRequest()) {
            throw new \LogicException('updateacl Action is only accessible through AJAX');
        }

        $aParams = $this->_request->getParams();

        if (!isset($aParams['fonc_id'])) {
            throw new \LogicException('fonc_id was not found in POST parameters');
        }

        if (!isset($aParams['group_id'])) {
            throw new \LogicException('group_id was not found in POST parameters');
        }

        if (!isset($aParams['value'])) {
            throw new \LogicException('value was not found in POST parameters');
        }


        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        if ((boolean) $aParams['value']) {
            $oLnkAclGroupsFonctionnalites = new LnkAclGroupsFonctionnalites();
            $oLnkAclGroupsFonctionnalites->setLnkAclGroupsFonctionnaliteFoncId($aParams['fonc_id'])
                    ->setLnkAclGroupsFonctionnaliteGroupId($aParams['group_id'])
                    ->save();
        } else {
            LnkAclGroupsFonctionnalitesQuery::create()->filterByLnkAclGroupsFonctionnaliteFoncId($aParams['fonc_id'])
                    ->filterByLnkAclGroupsFonctionnaliteGroupId($aParams['group_id'])
                    ->delete();
        }
    }
}
