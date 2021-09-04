<?php


class ROperationTypeSubTplScenario extends BaseROperationTypeSubTplScenario {

    private $r_scenario_numero_back;

    /**
     *
     * @return boolean
     */
    protected function _triggerUpdateDependantreferences() {
        Propel::disableInstancePooling();
        $aROperationScenarii = ROperationTypeSubTplScenarioQuery::create()->filterByOstTplId($this->getOstTplId())->find();

        $this->getConnection()->beginTransaction();
        try {
            foreach ($aROperationScenarii as $oROperationScenarii) {
                $reference = $oROperationScenarii->getRScenarioReference();
                $pattern = '/[0-9]+/';
                $reference = preg_replace($pattern, '#${0}#', $reference);
                $aReplace['#' . $this->r_scenario_numero_back . '#'] = $this->getRScenarioNumero();
                $reference = strtr($reference, $aReplace);
                $reference = str_replace('#', '', $reference);

                ROperationTypeSubTplScenarioQuery::create()->filterByPrimaryKey($oROperationScenarii->getOstTplScenarioId())
                        ->update(array('RScenarioReference' => $reference));
            }

            $this->getConnection()->commit();


            ROperationTypeSubTplPrestationQuery::create()->filterByRScenarioNumero($this->r_scenario_numero_back)
                    ->filterByOstTplId($this->getOstTplId())
                    ->update(array('RScenarioNumero'=>$this->getRScenarioNumero()));


            return true;
        } catch (Exception $e) {
            $this->getConnection()->rollBack();
            $this->addValidationFailed($e->getMessage());
            return false;
        }
    }

    /**
     * maj des référence(s) du scénrio
     * le volume du scénario est maj selon les références des scénarios et l'expression mathématique
     * @param string | int $v
     */
    public function setRScenarioReference($v) {

        $v = str_replace(' ', '', $v);
        parent::setRScenarioReference($v);

        //vérification des caractères autorisés
        $pattern_valid = '/^[0-9-+*()\/]*$/';
        $result_op = preg_match($pattern_valid, $v);
        if ($result_op == 0) {
            $this->addValidationFailed('Expression mal formatée', 'oepration_scenarii.op_scenario_reference');
            return false;
        } elseif (!empty($v)) {

            $pattern_number = '/[0-9]+/';
            $result_number = preg_match_all($pattern_number, $v, $matches_number);

            $pattern_ouv = '/\(/';
            $result_ouv = preg_match_all($pattern_ouv, $v, $matches_ouv);

            $pattern_ferm = '/\)/';
            $result_ferm = preg_match_all($pattern_ferm, $v, $matches_ferm);

            if ($result_ouv != $result_ferm) {
                $this->addValidationFailed('Le nombre d\'accolades ouvrantes et fermantes ne correspond pas', 'operation_scenarii.op_scenario_reference');
                return false;
            } elseif ($result_number == 0) {
                $this->addValidationFailed('Il manque des nombres', 'operation_scenarii.op_scenario_reference');
                return false;
            } else {
                $references = $matches_number[0];
                $nbFound = ROperationTypeSubTplScenarioQuery::create()
                        ->filterByOstTplId($this->getOstTplId())
                        ->filterByRScenarioNumero($references)
                        ->count();
                if ($nbFound != count($references)) {
                    $this->addValidationFailed('Certaines références n\'existent pas', 'operation_scenarii.op_scenario_reference');
                    return false;
                }
            }
        }
    }

    /**
     * récupère le scénario suivant dans l'ordre de tri
     */
    public function getNextOperationScenario() {
        return ROperationTypeSubTplScenarioQuery::create()
                        ->filterByOstTplId($this->getOstTplId())
                        ->filterByRScenarioNumero($this->getRScenarioNumero() + 1)
                        ->findOne();
    }

    /**
     * récupère le scénario précédant dans l'ordre de tri
     */
    public function getPrecOperationScenario() {
        return ROperationTypeSubTplScenarioQuery::create()
                        ->filterByOstTplId($this->getOstTplId())
                        ->filterByRScenarioNumero($this->getRScenarioNumero() - 1)
                        ->findOne();
    }

    /**
     * dépile le numéro du scénario et maj des références des scénarios dépendant
     * => dépilage récursif
     */
    public function depile() {

        function recursDepile(ROperationTypeSubTplScenario $oTplScenarii) {
            $oTplScenariiNext = $oTplScenarii->getNextOperationScenario();

            $oTplScenarii->setRScenarioNumero($oTplScenarii->getRScenarioNumero() - 1);
            $oTplScenarii->save();

            if ($oTplScenariiNext != null) {
                recursDepile($oTplScenariiNext);
            }
        }

        recursDepile($this);
    }

    /**
     * suppression du scénario
     * => maj à 0 des volumes des prestations associées
     * =>
     * @param PropelPDO $con
     */
    public function delete(PropelPDO $con = null) {

        $oCopy = $this;

        // déférencement du scénario dans prestations associées
        BaseROperationTypeSubTplPrestationQuery::create()
                ->filterByOstTplId($oCopy->getOstTplId())
                ->filterByRScenarioNumero($oCopy->getRScenarioNumero())
                ->update(array('RScenarioNumero' => 0));

        // modification des scénarios qui y faisait référence
        $oScenarios = ROperationTypeSubTplScenarioQuery::create()->findByOstTplId($this->getOstTplId());
        foreach ($oScenarios as &$oChild) {
            $old_reference = $oChild->getRScenarioReference();
            $new_reference = Phoenix_Utils_Scenario::removeNumeroInMathExpr($this->getRScenarioNumero(), $old_reference);

            if ($old_reference != $new_reference) {
                $oChild->setRScenarioReference($new_reference);
                $oChild->save();
            }
        }

        parent::delete($con);

        // dépilage des numéros de références pour les scénarios suivant
        $nextScenatio = $oCopy->getNextOperationScenario();
        if ($nextScenatio != null) {
            $nextScenatio->depile();
        }

        return true;
    }

    /**
     * maj de la position du scenrario
     * @param int $newNumero
     */
    public function updatePosition($newNumero) {

        $con = $this->getConnection();
        $con->beginTransaction();

        try {

            function recursEmpile(ROperationTypeSubTplScenario $oOperationScenarii, $stopPosition) {
                if ($oOperationScenarii->getRScenarioNumero() != ($stopPosition - 1)) {
                    $oOperationScenariiPrec = $oOperationScenarii->getPrecOperationScenario();
                    $oOperationScenarii->setRScenarioNumero($oOperationScenarii->getRScenarioNumero() + 1);
                    $oOperationScenarii->save();
                    if ($oOperationScenariiPrec != null) {
                        recursEmpile($oOperationScenariiPrec, $stopPosition);
                    }
                }
            }

            function recursDepile(ROperationTypeSubTplScenario $oOperationScenarii, $stopPosition) {
                if ($oOperationScenarii->getRScenarioNumero() != $stopPosition + 1) {
                    $oOperationScenariiNext = $oOperationScenarii->getNextOperationScenario();
                    $oOperationScenarii->setRScenarioNumero($oOperationScenarii->getRScenarioNumero() - 1);
                    $oOperationScenarii->save();
                    if ($oOperationScenariiNext != null) {
                        recursDepile($oOperationScenariiNext, $stopPosition);
                    }
                }
            }

            $oldNumero = $this->getRScenarioNumero();

            //maj temporaire du numéro lors du dépilage dépilage pour présever unicité de l'index
            $this->setRScenarioNumero(0);
            $this->save();


            if ($oldNumero > $newNumero) {
                $lastOperationToEmpile = ROperationTypeSubTplScenarioQuery::create()
                                ->filterByOstTplId($this->getOstTplId())
                                ->filterByRScenarioNumero($oldNumero - 1)->findOne();
                recursEmpile($lastOperationToEmpile, $newNumero);
            }
            if ($oldNumero < $newNumero) {
                $nextOperation = ROperationTypeSubTplScenarioQuery::create()
                                ->filterByOstTplId($this->getOstTplId())
                                ->filterByRScenarioNumero($oldNumero + 1)->findOne();
                if ($nextOperation != null) {
                    recursDepile($nextOperation, $newNumero);
                }
            }


            $this->setRScenarioNumero($newNumero);
            $this->save();
            $con->commit();
            return true;
        } catch (Exception $ex) {
            $con->rollBack();
            $this->addValidationFailed($ex->getMessage());
            return false;
        }
    }

    /**
     * Set the value of [r_scenario_numero] column.
     *
     * @param      int $v new value
     * @return   ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setRScenarioNumero($v) {
        $this->r_scenario_numero_back = $this->getRScenarioNumero();
        parent::setRScenarioNumero($v);
    }

    /**
     *
     * @param PropelPDO $con
     */
    public function save(PropelPDO $con = null) {

        $aModifiedColumns = $this->getModifiedColumns();

        $bIsNew = $this->isNew();
        if ($bIsNew) {
            //incrémentation du numero
            $nbScenario = BaseROperationTypeSubTplScenarioQuery::create()->filterByOstTplId($this->getOstTplId())->count();
            $nbScenario++;
            $this->setRScenarioNumero($nbScenario);
        }


        $this->getConnection()->beginTransaction();
        $bCommit = true;
        if (parent::save($con)) {

            foreach ($aModifiedColumns as $modifiedColumn) {
                switch ($modifiedColumn) {
                    case 'r_operation_type_sub_tpl_scenario.r_scenario_numero':
                        $bCommit = $this->_triggerUpdateDependantreferences();
                        break;
                }
            }
        }
        $bCommit ? $this->getConnection()->commit() : $this->getConnection()->rollBack();
    }

}
