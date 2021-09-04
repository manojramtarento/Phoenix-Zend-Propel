<?php

/**
 * DataTest: this class contain the function for recuperation the data for test in php unit
 *
 * @author BIYA Reda <mbiya@neo-data.ma>
 */
abstract class Test_PHPUnit_AbstractDataTest
{

    /**
     * This property for the key of data testing
     *
     * @var array
     */
    protected $dataKeys;

    /**
     * Get Data Keys
     *
     * @return array
     * @throws \LogicException
     */
    public function getDataKeys()
    {
        if (is_array($this->dataKeys)) {
            return $this->dataKeys;
        }
        throw new \LogicException('Property "dataKeys" expects a array, "' . gettype($this->dataKeys) . '" defined');
    }

    /**
     * Set Data Keys
     *
     * @param  array $aDataKeys
     * @return \Test_PHPUnit_AbstractDataTest
     */
    public function setDataKeys(array $aDataKeys)
    {
        $this->dataKeys = $aDataKeys;
        return $this;
    }

    /**
     * Return value of key
     *
     * @param  string $sKeyFieldId
     * @return string
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getKeysValue($sKeyFieldId)
    {
        $aDataKeys = $this->getDataKeys();

        $aDataKeys = array_merge($aDataKeys['fieldTableValue'], $aDataKeys['reportingConfig'], $aDataKeys['valueTestInsert']);

        if (!is_string($sKeyFieldId)) {
            throw new \InvalidArgumentException('Parameter "$sKeyFieldId" expects a string, "' . gettype($sKeyFieldId) . '" given');
        }

        if (!isset($aDataKeys[$sKeyFieldId])) {
            throw new \LogicException('Key "' . $sKeyFieldId . '" not found in "dataKeys"');
        }

        return $aDataKeys[$sKeyFieldId];
    }

    /**
     * Get Object propel by id
     *
     * @param  string $sClassName
     * @param  string $sKeyFieldId
     * @return BaseObject
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getObjectDataByClass($sClassName, $sKeyFieldId)
    {
        $aDataKeys = $this->getDataKeys();
        $aDataKeys = $aDataKeys['fieldTableValue'];

        if (!is_string($sClassName)) {
            throw new \InvalidArgumentException('Parameter "$sClassName" expects a string, "' . gettype($sClassName) . '" given');
        }

        if (!is_string($sKeyFieldId)) {
            throw new \InvalidArgumentException('Parameter "$sKeyFieldId" expects a string, "' . gettype($sKeyFieldId) . '" given');
        }

        $sClassName = $sClassName . 'Query';

        if (!class_exists($sClassName)) {
            throw new \LogicException('Class "' . $sClassName . '" does not exist');
        }

        if (!isset($aDataKeys[$sKeyFieldId])) {
            throw new \LogicException('Key "' . $sKeyFieldId . '" not found in "dataKeys"');
        }

        return $sClassName::create()->findPK($aDataKeys[$sKeyFieldId]);
    }

    /**
     * @return \Operations
     */
    public function getOperationWithAcceptedStatus()
    {
        return \OperationsQuery::create()->findOneByOpStatusId(\Operations::STATUS_ACCEPTE);
    }

    /**
     * Save New Facture and return id
     *
     * @return int
     */
    public function createFactureTest()
    {
        $oContacts = $this->getObjectDataByClass('Contacts', 'cl_id');
        $oFacture = new Factures();
        $oFacture->setOpId($this->getKeysValue('op_id'));
        $oFacture->setRFactTypeId($this->getKeysValue('r_fact_type_id'));
        $oFacture->setFactStatusId(RFactureStatuts::CREATED);
        $oFacture->setCtId($this->getKeysValue('ct_id'));
        $oFacture->setFactDestinataire($this->getObjectDataByClass('Clients', 'cl_id')->getClLibelle());
        $oFacture->setFactAttention($oContacts->getCtNomPrenom());
        $oFacture->setFactAdresse1($oContacts->getClientSites()->getClSiteAddr1());
        $oFacture->setFactAdresse2($oContacts->getClientSites()->getClSiteAddr2());
        $oFacture->setFactAdresse3($oContacts->getClientSites()->getClSiteAddr3());
        $oFacture->setFactCodePostal($oContacts->getClientSites()->getClSiteZipcode());
        $oFacture->setFactVille($oContacts->getClientSites()->getClSiteTown());
        $oFacture->setFactPays($oContacts->getClientSites()->getClSiteCountry());
        $oFacture->setClId($this->getKeysValue('cl_id'));

        $oFacture->save();

        return $oFacture->getFactId();
    }

    /**
     * Create new Template rubrique
     *
     * @return int
     */
    public function createRubriqueTemplate()
    {
        $oROperationTypeSubTplRubrique = new ROperationTypeSubTplRubrique();
        $oROperationTypeSubTplRubrique->setOstTplId($this->getKeysValue('ost_tpl_id'));
        $oROperationTypeSubTplRubrique->setRRubriqueId($this->getKeysValue('r_rub_id'));
        $oROperationTypeSubTplRubrique->save();

        return $oROperationTypeSubTplRubrique->getOstTplRubriqueId();
    }

    /**
     * Get Operation Prime
     *
     * @return int
     */
    public function createOperationPrime()
    {
        $oOperationPrimes = new OperationPrimes();
        $oOperationPrimes->setOpId($this->getKeysValue('op_id'));
        $oOperationPrimes->setOpPrimeLibelle($this->getKeysValue('op_prime_libelle'));
        $oOperationPrimes->setOpPrimeNumero($this->getKeysValue('op_prime_numero'));
        $oOperationPrimes->save();

        return $oOperationPrimes->getOpPrimeId();
    }

    /**
     * Create new Operation Scenarii
     *
     * @param  int $iOpRPrimeId
     * @return int
     * @throws \InvalidArgumentException
     */
    public function createOperationScenarii($iOpRPrimeId = 0)
    {
        if (!is_int($iOpRPrimeId)) {
            throw new \InvalidArgumentException('Parameter "$iOpRPrimeId" expects a int, "' . gettype($iOpRPrimeId) . '" given');
        }

        $oOperationScenarii = new OperationScenarii();
        $oOperationScenarii->setOpId($this->getKeysValue('op_id'));
        $oOperationScenarii->setOpRScenarioId($this->getKeysValue('r_scenario_id'));
        $oOperationScenarii->setOpRPrimeId($iOpRPrimeId);
        $oOperationScenarii->setOpScenarioNumero('');
        $oOperationScenarii->save();

        return $oOperationScenarii->getOpScenarioId();
    }

    /**
     * Creation new Operation Prestation
     *
     * @param  int $iOperationRubriqueId
     * @return int
     * @throws \InvalidArgumentException
     */
    public function createOperationPrestation($iOperationRubriqueId = 0)
    {
        if (!is_int($iOperationRubriqueId)) {
            throw new \InvalidArgumentException('Parameter "$iOperationRubriqueId" expects a int, "' . gettype($iOperationRubriqueId) . '" given');
        }

        $oOperationPrestation = new OperationPrestations();
        $oOperationPrestation->setOpId($this->getKeysValue('op_id'));
        $oOperationPrestation->setOpRPrestId($this->getKeysValue('r_prestation_id'));
        $oOperationPrestation->setOpPrestRubriId($iOperationRubriqueId);
        $oOperationPrestation->setOpPrestOff(true);
        $oOperationPrestation->setOpPrestNpr(true);
        $oOperationPrestation->setOpPrestNpa(true);
        $oOperationPrestation->setOpAdf(true);
        $oOperationPrestation->setOpPrestIsMajFromCompiluo(false);
        $oOperationPrestation->save();
        return $oOperationPrestation->getOpPrestId();
    }

    /**
     * Create new Operation Rubrique Id
     *
     * @return int
     */
    public function createOperationRubrique()
    {
        $OperationRubriques = new OperationRubriques();
        $OperationRubriques->setOpId($this->getKeysValue('op_id'))
                ->setOpRRubriqueId($this->getKeysValue('r_rub_id'))
                ->setOpRubriqueLibelle('')
                ->setRTvaTypeId($this->getKeysValue('r_tva_id'))
                ->setRRubTypeId($this->getKeysValue('rubrique_type_id'));

        $OperationRubriques->save();

        return $OperationRubriques->getOpRubriqueId();
    }

    /**
     * Create new Client Site
     *
     * @return int
     */
    public function createClientSite()
    {
        $oClientSite = new ClientSites();
        $oClientSite->setClId($this->getKeysValue('cl_id'));
        $oClientSite->setClSiteLibelle($this->getKeysValue('cl_site_libelle'));
        $oClientSite->setClSiteAddr1($this->getKeysValue('cl_site_addr_1'));
        $oClientSite->setClSiteZipcode($this->getKeysValue('cl_site_zipcode'));
        $oClientSite->setClSiteTown($this->getKeysValue('cl_site_town'));
        $oClientSite->setClSiteCountryId($this->getKeysValue('r_country_id'));
        $oClientSite->setClSiteIsForLog(true);
        $oClientSite->setClSiteIsForLog(true);
        $oClientSite->save();

        return $oClientSite->getClSiteId();
    }

    /**
     * Create new Plan Facture Details
     *
     * @return int
     */
    public function createPlanFactureDetails()
    {
        $oPlanFacturationDetails = new PlanFacturationDetails();
        $oPlanFacturationDetails->setOpId($this->getKeysValue('op_id'));
        $oPlanFacturationDetails->setPfdTypeFactId($this->getKeysValue('r_fact_type_id'));
        $oPlanFacturationDetails->setPfdDatePlanif(date('Y-m-d H:i:s', strtotime('-2 days')));
        $oPlanFacturationDetails->save();
        return $oPlanFacturationDetails->getPfdId();
    }
}
