<?php

class Phoenix_Auth_User
{
    /**
     * @var array
     */
    protected static $mvcAclFonctionalities;

    /**
     * @var Phoenix_Auth_Engine_EngineInterface
     */
    protected static $authenticationEngine;

    public static function getAuthenticationEngine() : Phoenix_Auth_Engine_EngineInterface
    {
        if (self::$authenticationEngine) {
            return self::$authenticationEngine;
        }
        // Check if authentiocation works with LDAP or not
        $oConfig = Zend_Registry::get('config');
        return self::$authenticationEngine = isset($oConfig->ldap) ? new Phoenix_Auth_Engine_Ldap() : new Phoenix_Auth_Engine_Database();
    }

    /**
     * Retrieves users data from AD and authenticates users
     *
     * @param string $sLogin
     * @param string $sPassword
     * @return null|\Phoenix_Auth_User_Abstract
     */
    public static function authenticate(string $sLogin, string $sPassword)
    {
        
        // Initialize authentication object
        $oZendAuth = Zend_Auth::getInstance();

        // Retrieve authentication engine
        $oAuthenticationEngine = self::getAuthenticationEngine();

        $oAdapter = $oAuthenticationEngine->getAuthenticationAdapter($sLogin, $sPassword);

        $oZendAuthResult = $oZendAuth->authenticate($oAdapter);

        // If authentication succeeds from AD
        if ($oZendAuth->hasIdentity()) {
            // Search and retrieves user data based on user login
            $oAuthUser = $oAuthenticationEngine->getAuthenticatedUser($oZendAuth);
 			if($oAuthUser instanceof Phoenix_Auth_User_Human){
				// Store authenticated user object
            	self::storeAuthenticatedUser($oAuthUser);
			}
            return $oAuthUser;
        }
        // Authentication failed
        try {
            $oRequest = Zend_Controller_Front::getInstance()->getRequest();
            Phoenix_Logger::getInstanceAuthentication()->setActionName($oRequest->getServer('HTTP_HOST') . $oRequest->getRequestUri())->log('login renseigné:' . $sLogin . ' // ' . print_r($oZendAuthResult, true));
        } catch (\Exception $oException) {
            Phoenix_Logger::getInstanceErreur()->logError($oException->getMessage(), 'E_ERROR', $oException->getCode());
        }
		
        return null;
    }

    /**
     * Store authenticated user object
     *
     * @param Phoenix_Auth_User_Abstract $oAuthUser
     * @return void
     */
    public static function storeAuthenticatedUser(Phoenix_Auth_User_Abstract $oAuthUser)
    {
        Zend_Auth::getInstance()->getStorage()->write($oAuthUser);
    }

    /**
     * Refresh authenticated user object
     */
    public static function refreshAuthenticatedUser()
    {
        $oAuthUser = self::getInstance();
        if ($oAuthUser) {
            // Search and retrieves user data based on user login
            $oAuthUser->setUser(UsersQuery::create()->findOneByUserLogin($oAuthUser->getLogin()));

            // Store authenticated user object
            self::storeAuthenticatedUser($oAuthUser);
        }
    }


    /**
     * Load default user for mode CLI
     */
    public static function loadUserCli()
    {
        $aData = array(
            'user_id' => '0',
            'login' => '',
            'nom' => 'userCli',
            'prenom' => 'userCli',
            'mail' => '',
            'phone' => '',
            'mobile' => '',
        );

        // Save user_id  recorder in database into user object
        $oAuthUser = new Phoenix_Auth_User_Cli($aData);
        // Persist user object
        Zend_Auth::getInstance()->getStorage()->write($oAuthUser);
        return $oAuthUser;
    }

    /**
     * Check if a module/controller/action route is allowed to user
     * @param string $sModule
     * @param string $sController
     * @param string $sAction
     * @return boolean
     */
    public static function mvcActionIsAllowed($sModule, $sController, $sAction)
    {
        if (self::$mvcAclFonctionalities === null) {
            self::$mvcAclFonctionalities = array();
            $oQuery = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()->from('View_Acl_Module_Controller_Action')->query();

            while ($aData = $oQuery->fetch(Zend_Db::FETCH_ASSOC)) {
                self::$mvcAclFonctionalities[$aData['module_name']][$aData['controller_name']][$aData['action_name']] = $aData['fonc_id'];
            }
        }

        return isset(self::$mvcAclFonctionalities[$sModule][$sController][$sAction]) && ($oPhoenixAuthUser = self::getInstance()) && $oPhoenixAuthUser->isAllowed(self::$mvcAclFonctionalities[$sModule][$sController][$sAction]) !== false;
    }

    /**
     * Retrieves the authenticated AD user object
     *
     * @return \Phoenix_Auth_User_Abstract
     */
    public static function getInstance()
    {
        $oUser = Zend_Auth::getInstance()->getStorage()->read();
        if (! $oUser) {
            return $oUser;
        }
        if ($oUser instanceof \Phoenix_Auth_User_Abstract) {
            return $oUser;
        }
        // Clean session
        self::logout();
        throw new \UnexpectedValueException('User session data expects an instance of "\Phoenix_Auth_User_Abstract", "' . (is_object($oUser) ? get_class($oUser) : gettype($oUser)) . '" retrieved');
    }

    /**
     * Log out user
     */
    public static function logout()
    {
        Zend_Auth::getInstance()->clearIdentity();
        Zend_Session::destroy();
    }
}
