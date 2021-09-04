<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CSV
 *
 * @author info20
 */
class My_Data_Export_CSV
{

    /**
     * nom des colones
     * @var array
     */
    protected $_aFieldNames = array();
    protected $_aData = array();
    protected $_adapter;
    protected $oFormatter;

    /**
     *
     */
    public function __construct(My_Data_Export_Source_Adapter_Interface $adapter)
    {
        $this->_adapter = $adapter;
        $this->_init();
    }

    private function _init()
    {
        // $this->_aData = $this->_adapter->getData();
        $this->_aHeaders = $this->_adapter->getFieldHeaders();
    }

    /**
     *
     * @param My_Data_Formatter $oFormatter
     */
    public function setFormatter(My_Data_Formatter $oFormatter)
    {
        $this->oFormatter = $oFormatter;
    }

    /**
     *
     * @return My_Data_Formatter $oFormatter
     */
    private function getFormatter()
    {
        return $this->oFormatter;
    }

    /**
     *
     * @param array $aHeaders
     */
    public function setHeaders($aHeaders)
    {
        $this->_aHeaders = $aHeaders;
    }

    /**
     *
     * @return array $aHeaders
     */
    public function getHeaders()
    {
        return $this->_aHeaders;
    }

    /**
     *
     * @return string chaîne au format csv
     */
    public function make()
    {
        $bZendTranslate = false;
        // checking if the Trnslate object exists, of so, instanciate the object
        if (class_exists('Zend_Registry') && Zend_Registry::isRegistered('Zend_Translate')) {
            $oZendTranslate = Zend_Registry::get('Zend_Translate');
            $bZendTranslate = true;
        }

        $sLigneCsv = '';
        // écriture des en-têtes de colonne
        if (is_array($this->_aHeaders) && count($this->_aHeaders) > 0) {
            // if($oZendTranslate instanceof() )
            foreach ($this->_aHeaders as $mField) {
                $sLigneCsv.= ($bZendTranslate) ? $oZendTranslate->translate($mField) . ';' : $mField . ';';
            }
        }
        $sLigneCsv = substr($sLigneCsv, 0, -1) . PHP_EOL;

        // écriture des lignes
        if (is_array($this->_aHeaders)) {
            $aHeaders = array_keys($this->_aHeaders);
            $i = 1;
            while ($aData = $this->_adapter->fetchRow()) {
                foreach ($aHeaders as $index) {
                    if (isset($aData[$index])) {
                        if ($this->getFormatter() instanceof My_Data_Formatter) {
                            $sLigneCsv.='"' . $this->getFormatter()->format($index, $aData[$index]) . '";';
                        } else {
                            $sLigneCsv.='"' . $aData[$index] . '";';
                        }
                    } else {
                        $sLigneCsv.=';';
                    }
                }
                $sLigneCsv = substr($sLigneCsv, 0, -1) . PHP_EOL;
            }

            $sLigneCsv = mb_convert_encoding($sLigneCsv, "CP1252", mb_detect_encoding($sLigneCsv));
        }
        return $sLigneCsv;
    }

    /**
     *
     * @param string $filename
     */
    public function makeFile($filename)
    {

        $handle = fopen($filename, 'w');

        $sLigneCsv = '';

        if (is_array($this->_aHeaders) && count($this->_aHeaders) > 0) {
            foreach ($this->_aHeaders as $mField) {
                $sLigneCsv.=$mField . ';';
            }
        }
        $sLigneCsv = substr($sLigneCsv, 0, -1) . PHP_EOL;
        fwrite($handle, $sLigneCsv);


        if (is_array($this->_aHeaders)) {
            $aHeaders = array_keys($this->_aHeaders);
            $i = 1;
            while ($aData = $this->_adapter->fetchRow()) {
                $sLigneCsv = '';


                foreach ($aHeaders as $index) {
                    if (isset($aData[$index])) {
                        $sLigneCsv.='"' . $aData[$index] . '";';
                    } else {
                        $sLigneCsv.=';';
                    }
                }

                $sLigneCsv = substr($sLigneCsv, 0, -1) . PHP_EOL;
                fwrite($handle, mb_convert_encoding($sLigneCsv, "CP1252", mb_detect_encoding($sLigneCsv)));
            }
        }

        fclose($handle);
    }
}
