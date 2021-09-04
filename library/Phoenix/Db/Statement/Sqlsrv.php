<?php

class Phoenix_Db_Statement_Sqlsrv extends Zend_Db_Statement_Sqlsrv
{
    /**
     * Executes a prepared statement.
     *
     * @param array $aParams OPTIONAL Values to bind to parameter placeholders.
     * @return bool
     */
    public function _execute(array $aParams = null)
    {
        return $this->_adapter->faultTolerantCallback(array($this, 'parent::' . __FUNCTION__), func_get_args());
    }
}
