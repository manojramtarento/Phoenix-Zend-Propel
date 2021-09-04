<?php

require_once 'util/PropelPHPParser.php';

class AddErrorBehavior extends Behavior
{
    public function objectMethods($oBuilder)
    {
        $sScript.=$this->addAddValidationFailure();
        $sScript.=$this->addPreValidate();
        return $sScript;
    }

    public function objectAttributes($oBuilder)
    {
        $sScript = 'private $aCheckFunctions=array();';

        return $sScript;
    }

    public function addAddValidationFailure()
    {
        $sScript =
        "
/**
*
* @param string \$message
* @param string \$colName
* @param string \$validator
*/
public function addValidationFailed( \$message, \$colName='error', \$validator=null){
    \$this->validationFailures[\$colName][]=new ValidationFailed(\$colName, \$message, \$validator);
}
";
        return $sScript;
    }


    public function addPreValidate()
    {
        $sScript =
        "
/**
*
* @param string \$colName
* @param string \$message
* @param string \$validator
*/
protected function preValidate(){

    \$oReflectionClass=new ReflectionClass(\$this);
    \$aMethods=\$oReflectionClass->getMethods();
    foreach(\$aMethods as \$method){
        if(strpos( \$method->name,'_validateIs')!==false){
            \$this->{\$method->name}();
        }
    }
}
";
        return $sScript;
    }

    public function objectFilter(&$sScript)
    {
        $sNewValidate = "

    /**
    *
    * @param array \$columns
    * @return boolean
    */
    public function validate(\$columns = null)
    {
        \$this->preValidate();

        \$res = \$this->doValidate(\$columns);

        if(is_array(\$res)){
            \$this->validationFailures = array_merge(\$res,\$this->validationFailures);
        }

        if(count(\$this->validationFailures)>0){
            return false;
        }else{
            return true;
        }
    }
    ";

        $oTable = $this->getTable();
        $sNewValidate = sprintf($sNewValidate, $oTable->getName(), $oTable->getPhpName(), $oTable->getPhpName());

        $oParser = new PropelPHPParser($sScript, true);
        $oParser->replaceMethod('validate', $sNewValidate);
        $sScript = $oParser->getCode();
    }

}
