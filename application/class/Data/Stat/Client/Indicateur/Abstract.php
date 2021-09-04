<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compil
 *
 * @author info20
 */
abstract class Data_Stat_Client_Indicateur_Abstract
{

    /**
     *
     * @var Data_Stat_Client_Abstract 
     */
    protected $_oStatClient;
    static protected $_aRefIndicateur;

    abstract function getIndicateurId();

    abstract function getTitle();

    abstract function getData($output = 'pdf');

    abstract public function addNodeXmlToDoc(Phoenix_Stats_Xml_Builder &$oPhoenix_Stats_Xml_Builder);

    /**
     * 
     * @param integer $id
     * @return type
     */
    protected function getRefIndicateur($id = null, $field = null)
    {

        if (!isset(self::$_aRefIndicateur)) {

            self::$_aRefIndicateur = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter()->select()
                            ->from('r_indicateur')
                            ->query()->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);

            self::$_aRefIndicateur = array_map('reset', self::$_aRefIndicateur);
        }

        if (isset($id, $field)) {
            return self::$_aRefIndicateur[$id][$field];
        } elseif (isset($id)) {
            return self::$_aRefIndicateur[$id];
        } else {
            return self::$_aRefIndicateur;
        }
    }

    /**
     * retourne le libéllé de la prime
     * @param integer|string $numPrime
     * @return string
     */
    protected function _getPrimeLibelle($numPrime)
    {
        static $_aPrime;

        if (!isset($_aPrime[$this->getStatClientInstance()->getOpId()])) {
            $_aPrime[$this->getStatClientInstance()->getOpId()] = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()
                    ->select()->from('operation_primes', array('op_prime_numero', 'op_prime_libelle'))
                    ->where('op_id=?', $this->getStatClientInstance()->getOpId())
//					->assemble();
//			echo $_aPrime;
                    ->query()
                    ->fetchAll(PDO::FETCH_KEY_PAIR);
        }
//print_r($_aPrime);echo $numPrime;
        if (isset($numPrime) && isset($_aPrime[$this->getStatClientInstance()->getOpId()][$numPrime])) {
            return $_aPrime[$this->getStatClientInstance()->getOpId()][$numPrime];
        } else {
            return $_aPrime[$this->getStatClientInstance()->getOpId()];
        }
    }

    /**
     * 
     * @param Data_Stat_Client_Abstract $oStatClient
     */
    public function __construct(& $oStatClient)
    {
        $this->_oStatClient = $oStatClient;
    }

    /**
     * 
     * @return Data_Stat_Client_Abstract
     */
    public function getStatClientInstance()
    {
        return $this->_oStatClient;
    }

    public function getTitleExcel()
    {

        return str_replace('/', '', substr($this->getTitle(), 0, 31));
    }
    
    public function addToExcel(PHPExcel &$oPHPExcel)
    {
        $aData = $this->getData();
        $sheet = $oPHPExcel->createSheet();
        $sheet->setTitle($this->getTitleExcel());
        $line = 1;
        foreach ($aData as $x => $y) {
            $sheet->setCellValueByColumnAndRow(0, $line, $x);
            $sheet->setCellValueByColumnAndRow(1, $line, $y);
            $line++;
        }
    }
}

?>
