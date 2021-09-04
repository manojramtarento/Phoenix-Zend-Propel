<?php

abstract class Data_Doc_Writer_Excel {

    /**
     *
     * @var PHPExcel
     */
    protected $_oPHPExcel;

    /**
     * @param Data_Doc_Reader $oPhoenix_Doc_Reader
     * @param array $aParams
     *    - lang : langue à utiliser
     */
    public function __construct(Data_Doc_Reader $oPhoenix_Doc_Reader,$aParams=array()) {
        $this->_oPHPExcel = new PHPExcel();
        $this->_oPHPExcel->removeSheetByIndex();

        $this->structure = $oPhoenix_Doc_Reader->getStruct();

        $this->__initLanguage($this->structure['lang']);
        $this->_init($aParams);
    }

    /**
     *
     * @param array $config
     *    - lang : langue à utiliser
     */
    protected function _init($config){
        if (isset($this->structure['lang'])) {
            $lang = $this->structure['lang'];
        } elseif (array_key_exists('lang', $config)) {
            $lang = $config['lang'];
        }
        $this->__initLanguage($lang);
    }

    /**
     * @param string $lang
     */
    private function __initLanguage($lang) {
        $this->_translations = Phoenix_Translation_Files::getPdf($lang);
    }


    /**
     *
     * @return PHPExcel
     */
    public function getExcel() {
        return $this->_oPHPExcel;
    }

}
