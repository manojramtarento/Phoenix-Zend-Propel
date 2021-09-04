<?php

class Phoenix_Db_Adapters
{
    const ADAPTER_ARTHUR_CONSOS = 'arthur_consos';
    const ADAPTER_ARTHUR_PARAM = 'arthur_param';
    const ADAPTER_COMPIL_DATA = 'compildata';
    const ADAPTER_COMPIL_UO = 'compiluo';

    /**
     * @var array
     */
    protected static $adapters = array();

    /**
     * @var Phoenix_Db_Adapters
     */
    protected static $instance = null;


    /**
     * @return Phoenix_Db_Adapters
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Phoenix_Db_Adapters();
        }

        return self::$instance;
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     */
    public function getPhoenixAdapter()
    {
         return Zend_Db_Table::getDefaultAdapter();
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     * @throws \LogicException
     */
    public function getArthurConsos()
    {
        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            throw new \LogicException('External connection "Arthur" is disabled');
        }
        return $this->getDbAdapterByName(self::ADAPTER_ARTHUR_CONSOS);
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     * @throws \LogicException
     */
    public function getArthurParam()
    {
        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            throw new \LogicException('External connection "Arthur" is disabled');
        }
        return $this->getDbAdapterByName(self::ADAPTER_ARTHUR_PARAM);
    }

    /**
     * @return boolean
     */
    public function hasArthurDbConfiguration()
    {
        return $this->dbAdapterConfigExists(self::ADAPTER_ARTHUR_CONSOS) && $this->dbAdapterConfigExists(self::ADAPTER_ARTHUR_PARAM);
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     * @throws \LogicException
     */
    public function getCompiluoAdapter()
    {
        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_COMPIL)) {
            throw new \LogicException('External connection "Compil UO/Data" is disabled');
        }
        return $this->getDbAdapterByName(self::ADAPTER_COMPIL_UO);
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     * @throws \LogicException
     */
    public function getCompilDataAdapter()
    {
        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_COMPIL)) {
            throw new \LogicException('External connection "Compil UO/Data" is disabled');
        }
        return $this->getDbAdapterByName(self::ADAPTER_COMPIL_DATA);
    }

    /**
     * @return boolean
     */
    public function hasCompilDbConfiguration()
    {
        return $this->dbAdapterConfigExists(self::ADAPTER_COMPIL_DATA) && $this->dbAdapterConfigExists(self::ADAPTER_COMPIL_UO);
    }

    /**
     * @param string $sAdapterName
      * @return boolean
     */
    protected function dbAdapterConfigExists($sAdapterName)
    {
        return ! empty(My_Env::getInstance()->getConfig()->$sAdapterName->db);
    }

    /**
     * @param string $sAdapterName
     * @return Zend_Db_Adapter_Abstract
     * @throws \LogicException
     */
    protected function getDbAdapterByName($sAdapterName)
    {
        if (! isset(self::$adapters[$sAdapterName])) {
            // Retrieve adapater config
            if (empty(My_Env::getInstance()->getConfig()->$sAdapterName->db)) {
                throw new \LogicException('Configuration ['.$sAdapterName.'][db] is undefined');
            }
            $oAdapterConfig = My_Env::getInstance()->getConfig()->$sAdapterName->db;
            // Force adapter namespace
            $oAdapterConfig->params->adapterNamespace = 'Phoenix_Db_Adapter';
            self::$adapters[$sAdapterName] = Zend_db::factory($oAdapterConfig);
        }

        return self::$adapters[$sAdapterName];
    }
}
