<?php

class Phoenix_Router_Cli extends Zend_Controller_Router_Abstract
{

    public function route(Zend_Controller_Request_Abstract $oDispatcher)
    {

        $oOptions = new Zend_Console_Getopt(array());
        $aArguments = $oOptions->getRemainingArgs();

        if ($aArguments) {
            if (count($aArguments) >= 2) {
                $sControllerName = array_shift($aArguments);
                $sActionName = array_shift($aArguments);
                
                $oDispatcher->setModuleName('cron');
                $oDispatcher->setControllerName($sControllerName);
                $oDispatcher->setActionName($sActionName);

                if (! empty($aArguments)) {
                    $aParams = array();
                    foreach ($aArguments as $sParam) {
                        if (strstr($sParam, ':')) {
                            list($sKey, $sValue) = explode(':', $sParam);
                            $aParams[$sKey]=$sValue;
                        }
                    }
                    $oDispatcher->setParams($aParams);
                }
                
                unset($_SERVER['argv'][1]);
                return $oDispatcher;
            }

            echo "Invalid command.\n";
            exit(0);
        }

        echo "No command given.\n";
        exit(0);
    }
    
    public function assemble($aUserParams, $sName = null, $bReset = false, $bEncode = true)
    {
    }
}
