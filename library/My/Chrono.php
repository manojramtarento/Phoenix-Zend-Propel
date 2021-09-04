<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author info20
 */
class My_Chrono {

    /**
     * les chronomêtres
     * @var array 
     */
    static private $_aChronos = array();

    /**
     * lance un chronomêtre
     * @param string $sName nom du chronomêtre
     */
    static function initChrono($sName='1') {
        self::$_aChronos[$sName] = new Chrono($sName);
    }

    /**
     * récupère un chronomêtre
     * @param string  $sName
     * @param string $sName 
     * @return Chrono | null  
     */
    static function getChrono($sName='1') {
        if (self::$_aChronos[$sName] != null)
            return self::$_aChronos[$sName];
        else
            return null;
    }

    /**
     * récupère le temps écoulé
     * @param string $sName
     * @return int 
     */
    static function getTime($sName='1') {
        if (self::getChrono($sName) != null){
            $oChrono=self::$_aChronos[$sName]->getTime();
            return $oChrono;
        }
        else
            return 0;
    }


}

class Chrono {

    private $_iMicrotimeStart;
    public $sName;

    public function __construct($sName) {
        $this->sName = $sName;
        $this->_iMicrotimeStart = microtime(true);
    }

    public function getTime() {
        return (microtime(true) - $this->_iMicrotimeStart);
    }

}

?>
