<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Phoenix_Translation_Files {

    static private $_instancePdf;

    
    /**
     * 
     * @param string $lang (fra | eng ]
     * @param string $section
     * @param string $label
     * @return array
     */
    public static function getPdf($lang='fra',$section=null,$label=null) {

        if (!isset(self::$_instancePdf[$lang])) {
            $file = ROOT_PATH.'/resources/pdfgen/' . $lang . '.ini';

            // Check if file exists
            if (!file_exists($file)) {
                $file = ROOT_PATH.'/resources/pdfgen/FRA.ini';
            }

            // Read file
            self::$_instancePdf[$lang] = parse_ini_file($file, true);
        }
        
        if(isset($section) && isset($label)){
            return self::$_instancePdf[$lang][$section][$label];
        }elseif(isset($section)){
            return self::$_instancePdf[$lang][$section];
        }else{
            return self::$_instancePdf[$lang];
        }
        
    }

}
?>