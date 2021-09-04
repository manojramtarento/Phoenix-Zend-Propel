<?php

class Phoenix_Acl_Session {

	/**
	 * récupère l'ACL, une instance de Zend_Auth stockée en SESSION avec durée de vie limitée
	 * @return Zend_Acl
	 */
    public static function getInstance(){

        $config = Zend_Registry::get('config');
        $oZend_Session_Namespace = new Zend_Session_Namespace('Phoenix_Acl_Session');
		
        if(!isset($oZend_Session_Namespace->instance)){
			//définition de la duréee de vie de l'instance de Zend_Auth stockée en session
            $oZend_Session_Namespace->setExpirationSeconds($config->my->acl->session->lifetime);

            $oPhoenix_Acl_Loader = new Phoenix_Acl_Loader();
            $oZend_Session_Namespace->instance = $oPhoenix_Acl_Loader->getAcl();
          
        }

        return $oZend_Session_Namespace->instance;
    }
    
}
