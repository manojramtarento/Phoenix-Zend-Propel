<?php

/**
 * Skeleton subclass for representing a row from the 'r_operation_type_sub_tpl_prime' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationTypeSubTplPrime extends BaseROperationTypeSubTplPrime
{

    /**
     * @var \Zend_Translate
     */
    protected $zendTranslate;

    /**
     * @param PropelPDO $oPropelPdo
     */
    public function save(PropelPDO $oPropelPdo = null)
    {

        if ($this->isNew()) {
            //inscrémentation du numéro d'opération
            $nbScenario = BaseROperationTypeSubTplPrimeQuery::create()->filterByOstTplId($this->getOstTplId())->count();
            $nbScenario++;
            $this->setOstTplPrimeNumero($nbScenario);
        }

        parent::save($oPropelPdo);
    }

    /**
     * @return boolean
     */
    protected function _validateIsNewReward()
    {
        if ($this->isNew() && !$this->getOstTplRewardType()) {
            $this->addValidationFailed($this->getZendTranslate()->translate('message_reward_template_validation_failure_type_is_required'));
            return false;
        }
        return true;
    }

    /**
     * @param PropelPDO $con
     * @return boolean
     */
    public function delete(PropelPDO $con = null)
    {
        if (!$this->isDeleted()) {
            parent::delete($con);

            //dépilage des numéros de primes
            $con = $this->getConnection();
            $sql = "update r_operation_type_sub_tpl_prime
					set ost_tpl_prime_numero=ost_tpl_prime_numero-1
					where ost_tpl_prime_numero > '" . $this->getOstTplPrimeNumero() . "'
					AND ost_tpl_id='" . $this->getOstTplId() . "'";

            $con->exec($sql);

            // déférencement de la prime dans les prestations
            ROperationTypeSubTplPrestationQuery::create()->filterByRPrimeNumero($this->getOstTplPrimeNumero())
                    ->filterByOstTplId($this->getOstTplId())
                    ->update(array('RPrimeNumero' => null));

            // déférencement de la prime dans les scenarii
            ROperationTypeSubTplScenarioQuery::create()->filterByRPrimeNumero($this->getOstTplPrimeNumero())
                    ->filterByOstTplId($this->getOstTplId())
                    ->update(array('RPrimeNumero' => null));

            return true;
        }
    }

    /**
     * @return \Zend_Translate
     * @throws \LogicExcpetion
     * @throws \LogicException
     */
    public function getZendTranslate()
    {
        // Lazy load if not defined
        if ($this->zendTranslate === null) {
            if (!Zend_Registry::isRegistered('Zend_Translate')) {
                throw new \LogicExcpetion('Zend Translate object was not found in registry');
            }
            $this->zendTranslate = Zend_Registry::get('Zend_Translate');
        }
        if ($this->zendTranslate instanceof \Zend_Translate) {
            return $this->zendTranslate;
        }
        throw new \LogicException('Property "zendTranslate" expects an insance of \Zend_Translate, "' . (is_object($this->zendTranslate) ? get_class($this->zendTranslate) : gettype($this->zendTranslate)) . '" defined');
    }
}

// ROperationTypeSubTplPrime
