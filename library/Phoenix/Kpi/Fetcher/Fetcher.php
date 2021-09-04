<?php

/**
 * Description of KpiFetcherMysql
 *
 * @author NABIL NIZAR
 */
class Phoenix_Kpi_Fetcher_Fetcher implements Phoenix_Kpi_Fetcher_FetcherInterface
{

    /**
     * @var Zend_Db_Select
     */
    protected $dbSelect;

    /**
     * @return Zend_Db_Select
     * @throws \LogicException
     */
    public function getDbSelect()
    {
        if ($this->dbSelect === null) {
            $this->dbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        }
        if ($this->dbSelect instanceof Zend_Db_Select) {
            return $this->dbSelect;
        }
        throw new \LogicException('Property "dbSelect" expects an instance of "\Zend_Db_Select" or a null value, "' . (is_object($this->dbSelect) ? get_class($this->dbSelect) : gettype($this->dbSelect)) . '" defined');
    }

    /**
     * @param Zend_Db_Select $oDbSelect
     * @return \Phoenix_Kpi_Fetcher_Fetcher
     */
    public function setDbSelect(Zend_Db_Select $oDbSelect)
    {
        $this->dbSelect = $oDbSelect;
        return $this;
    }

    /**
     * @param array $aConfig
     * @param array $aCriteria
     * @return array
     * @throws \InvalidArgumentException
     */
    public function retrieveData(array $aConfig, array $aCriteria)
    {
        if (!isset($aConfig['query'])) {
            throw new \InvalidArgumentException('Key "query" does not exists for the given array "' . print_r($aConfig, true) . '"');
        }

        if (!isset($aConfig['filters'])) {
            throw new \InvalidArgumentException('Key "filters" does not exists for the given array "' . print_r($aConfig, true) . '"');
        }

        $sQuery = $aConfig['query'];

        foreach ($aConfig['filters'] as $sKey => $sValue) {
            if (!empty($aCriteria[$sKey])) {
                $sValue = str_replace('{' . $sKey . '}', ((is_array($aCriteria[$sKey])) ? implode(',', $aCriteria[$sKey]) : $aCriteria[$sKey]), $sValue);
                $sQuery = str_replace('{' . $sKey . '}', $sValue, $sQuery);
            } elseif (!strpos($sValue, '}')) {
                $sQuery = str_replace('{' . $sKey . '}', $sValue, $sQuery);
            } else {
                $sQuery = str_replace('{' . $sKey . '}', '', $sQuery);
            }
        }

        return $this->getDbSelect()->getAdapter()->query($sQuery)->fetchAll();
    }
}
