<?php

class Phoenix_Db_Adapter_Sqlsrv extends Zend_Db_Adapter_Sqlsrv
{
    const MAX_RECONNECT_COUNT = 5;

    /**
     * Default class name for a DB statement.
     *
     * @var string
     */
    protected $_defaultStmtClass = 'Phoenix_Db_Statement_Sqlsrv';

    public function query($sSql, $aBind = array())
    {
        return $this->faultTolerantCallback(array($this, 'parent::' . __FUNCTION__), func_get_args());
    }

    /**
     * @param callable $oCallback
     * @return mixed
     * @throws \Exception
     */
    public function faultTolerantCallback($oCallback, array $aArguments)
    {
        $iAttempt = 0;
        while (true) {
            try {
                return call_user_func_array($oCallback, $aArguments);
            } catch (\Exception $oException) {
                if ($this->validateReconnectAttempt($oException, $iAttempt)) {
                    $this->closeConnection();
                    $iAttempt++;
                } else {
                    $oReflectionObject = new \ReflectionObject($oException);
                    $oReflectionObjectProp = $oReflectionObject->getProperty('message');
                    $oReflectionObjectProp->setAccessible(true);
                    $oReflectionObjectProp->setValue($oException, $oException->getMessage() . ' - After '.$iAttempt.' attempts');
                    throw $oException;
                }
            }
        }
    }

    /**
     * @param \Exception $oException
     * @param $iAttempt
     * @return boolean
     */
    protected function validateReconnectAttempt(\Exception $oException, $iAttempt)
    {
        if (self::MAX_RECONNECT_COUNT && $iAttempt < self::MAX_RECONNECT_COUNT) {
            $aReconnectExceptions = $this->getReconnectExceptions();
            $sMessage = $oException->getMessage();
            if (! empty($aReconnectExceptions)) {
                foreach ($aReconnectExceptions as $sReconnectException) {
                    if (strpos($sMessage, $sReconnectException) !== false) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * @return array
     */
    public function getReconnectExceptions()
    {
        return array(
            'SQLSTATE[01002] Adaptive Server connection failed',
            'SQLSTATE[HY000]: General error: 20003 Adaptive Server connection timed out',
        );
    }
}
