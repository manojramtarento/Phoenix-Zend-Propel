<?php

abstract class Test_PHPUnit_AbstractControllerTestCase extends Zend_Test_PHPUnit_ControllerTestCase
{

    /**
     * @var Test_PHPUnit_AbstractDataTest
     */
    protected $dataTest;

    /**
     * PHPUnit Set Up
     */
    public function setUp()
    {
        // Load application config
        $oConfig = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV, true);

        // Merge to test config
        $oConfig->merge(new Zend_Config_Ini(APPLICATION_PATH . '/../tests/phpunit/test-application.ini', APPLICATION_ENV, true));

        if (!isset($oConfig->loginTest)) {
            throw new \LogicException('Missing login test in config file');
        }

        // Initialize Application
        $this->bootstrap = new \Zend_Application(APPLICATION_ENV, $oConfig);
        $this->bootstrap->getBootstrap()->setCliEnabled(false);

        parent::setUp();

        $_SERVER['HTTP_HOST'] = 'unittest_host';
        $_SERVER['REQUEST_URI'] = '/';
        $_SERVER['QUERY_STRING'] = '';

        $this->dataTest = new Test_PHPUnit_DataTestFromConfig($oConfig->dataTest->toArray());
        $this->logIn($oConfig->loginTest);
    }

    /**
     * Get user groups
     *
     * @param  Users $oUser
     * @return array
     */
    protected function getUserGroups(Users $oUser)
    {
        $aGroupes = array();
        $oGroupes = $oUser->getLnkUsersAclGroupss();

        foreach ($oGroupes as $oGroupe) {
            $aGroupes[$oGroupe->getGroupId()] = $oGroupe->getAclGroups()->getGroupName();
        }
        return $aGroupes;
    }

    /**
     * Login
     *
     * @throws \LogicException
     */
    public function logIn(string $sUserLogin)
    {
        $oUser = UsersQuery::create()->findOneByUserLogin($sUserLogin);
        if (!$oUser instanceof Users) {
            throw new \LogicException('Login :  "' . $sUserLogin . '" not exist.');
        }

        $oAuthUser = new Phoenix_Auth_User_Human(array(
            'user_id' => $oUser->getUserId(),
            'user_login' => $oUser->getUserLogin(),
            'user_nom' => $oUser->getUserNom(),
            'user_prenom' => $oUser->getUserPrenom(),
            'user_mail' => $oUser->getUserMail(),
            'user_phone' => $oUser->getUserPhone(),
            'user_mobile' => $oUser->getUserMobile(),
            'groupes' => $this->getUserGroups($oUser),
        ));
        $oAuthUser->synchronizeUserData();

        // Store user data
        Zend_Auth::getInstance()->getStorage()->write($oAuthUser);
    }

    /**
     * get Zend Translate
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
