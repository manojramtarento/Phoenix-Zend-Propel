<?php

class Phoenix_ExternalConnection_Uo
{

    /**
     * @var Phoenix_ExternalConnection_Uo
     */
    protected static $instance = null;


    /**
     * @return Phoenix_ExternalConnection_Arthur
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Retrieve the total quantities of stock states
     * @param array $aOperationIds
     * @return array
     */
    public function getTotalQuantitiesOfStockStatesByOperationId(string $sOperationId) : array
    {
        $oZendDbSelect = new Zend_Db_Select($this->getCompilUoAdapter());
        $oZendDbSelect->from('View_Stock_Etat', array(
            'total_qte_entree' => 'sum(qte_entree)',
            'total_qte_sortie' => 'sum(qte_sortie)',
            'total_qte_stock' => 'sum(qte_stock)',
        ));
        $oZendDbSelect->where('data_compil_op_id=?', $sOperationId);
        return $oZendDbSelect->query()->fetch(Zend_Db::FETCH_ASSOC);
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     */
    public function getCompilUoAdapter() : Zend_Db_Adapter_Abstract
    {
        return Phoenix_Db_Adapters::getInstance()->getCompilUoAdapter();
    }
}
