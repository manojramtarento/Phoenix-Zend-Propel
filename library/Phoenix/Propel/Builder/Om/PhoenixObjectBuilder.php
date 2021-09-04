<?php

require_once 'builder/om/PHP5ObjectBuilder.php';
class PhoenixObjectBuilder extends PHP5ObjectBuilder
{

    /**
     * Adds setter method for "normal" columns.
     *
     * @param string &$sScript : The script will be modified in this method.
     * @param Column $oColumn : The current column.
     *
     * @see parent::addDefaultMutator()
     */
    protected function addDefaultMutator(& $sScript, Column  $oColumn)
    {

        // Perform type-casting to ensure that we can use type-sensitive checking in mutators.

        if ($oColumn->isPhpPrimitiveType() && ! $oColumn->isTextType() && in_array($sPhpType = $oColumn->getPhpType(), array('float','int'))) {
            $sColumnName = strtolower($oColumn->getName());
            $this->addMutatorOpen($sScript, $oColumn);
            $sScript .= '
                if ($v === \'\'){
                    $v = null;
                }
                elseif ($v !== null){
            ';

            if ($sPhpType === 'float') {
                $sScript .= '
                    if(is_string($v)){
                        $v = str_replace(
                            array(\' \',\',\'),
                            array(\'\',\'.\'),
                            $v
                        );
                    }
                ';
            }
            $sScript .= '
                    if(is_numeric($v)) {
                        $v = (' .  $oColumn->getPhpType() . ') $v;
                    }
                }
                if ($this->'.$sColumnName.' !== $v) {
                    $this->'.$sColumnName.' = $v;
                    $this->modifiedColumns[] = ' . $this->getColumnConstant($oColumn) . ';
                }
            ';
            $this->addMutatorClose($sScript, $oColumn);
        } else {
            parent::addDefaultMutator($sScript, $oColumn);
        }
    }
}
