<?php
/**
 * Extended Zend_Db_Adapter_Pdo_Mysql - try to reconnect if mysq gone away
 */
class Phoenix_Db_Adapter_Pdo_Mysql extends Zend_Db_Adapter_Pdo_Mysql
{

    const MAX_RECONNECT_COUNT = 5;

    /**
    * Default class name for a DB statement.
    *
    * @var string
    */
    protected $_defaultStmtClass = 'Phoenix_Db_Statement_Pdo';

    public function query($sSql, $aBind = array())
    {
        return $this->faultTolerantCallback(array($this, 'parent::' . __FUNCTION__), func_get_args());
    }

    protected function _connect()
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
            'SQLSTATE[HY000]: General error: 2006 MySQL server has gone away',
            'PDOStatement::execute(): MySQL server has gone away'
        );
    }
}
