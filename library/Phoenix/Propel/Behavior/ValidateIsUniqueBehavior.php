<?php

class ValidateIsUniqueBehavior extends Behavior
{

    public function objectMethods($oBuilder)
    {
        return $this->addValidateIsUnique();
    }

    private function addValidateIsUnique()
    {
        $aParameters = $this->getParameters();
        $aColumns = explode(',', $aParameters['columns']);
        $sScript = '
            protected function _validateIsUnique(){
                $oTableMap = $this->getPeer()->getTableMap();
                $sTableName = $oTableMap->getName();
                $aColumns = ' . var_export($aColumns, true).';
                $aPrimaryKeys = $oTableMap->getPrimaryKeyColumns();

                $bModified = false;
                $aModifiedColumns = $this->getModifiedColumns();
        		foreach($aColumns as $sColumn){
        			if(in_array($sTableName.\'.\'.$sColumn,$aModifiedColumns)){
        				$bModified = true;
        				continue;
        			}
        		}

                if(!$bModified){
                    return;
                }

                $oCriteria = new Criteria();

                foreach($aPrimaryKeys as $oColumn){
                    $sGetter = \'get\' . $oColumn->getPhpName();
                    $oCriteria->add($oColumn->getFullyQualifiedName(), $this->$sGetter(), Criteria::NOT_EQUAL);
                }

                // Add "actif" criteria if column exists
                if ($oTableMap->hasColumn(\'actif\')) {
                    $oCriteria->add(\'actif\', 1, Criteria::EQUAL);
                }

                foreach ($aColumns as $sColumn) {
                    $oColumn = $oTableMap->getColumn($sColumn);
                    $sGetter = \'get\' . $oColumn->getPhpName();
                    $oCriteria->add($oColumn->getFullyQualifiedName(), $this->$sGetter(), Criteria::EQUAL);
                }

                if(call_user_func(array($oTableMap->getClassName() . \'Peer\', \'doCount\'), $oCriteria)){
                    if(count($aColumns) === 1){
                        $this->addValidationFailed(\''.addslashes($aParameters['message']).'\', $aColumns[0]);
                    } else {
                        $this->addValidationFailed(\''.addslashes($aParameters['message']).'\', \'error\');
                    }
                }
            }
        ';
        return $sScript;
    }
}
