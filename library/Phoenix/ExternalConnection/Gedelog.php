<?php

class Phoenix_ExternalConnection_Gedelog
{
    /**
     * @var Zend_Soap_Client
     */
    protected $soapClient;

    /**
     * @var Phoenix_Log
     */
    protected $logger;

    /**
     * @var Phoenix_ExternalConnection_Arthur
     */
    protected static $instance = null;

    /**
     * Constructor
     */
    protected function __construct()
    {
    }

    /**
     * @return Phoenix_ExternalConnection_Arthur
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Retrieve the operation warehouse, registered as an option
     *
     * @param Operations $oOperation
     * @return null|LnkOperationOption
     */
    public function getWarehouseOperationOption(Operations $oOperation)
    {
        return LnkOperationOptionQuery::create()->filterByOpId($oOperation->getOpid())
            ->filterByOpOptId(ROperationOptions::getOptEntrepot())
            ->filterByIsLinked(1)
            ->findOne();
    }

    /**
     * Check if operation is ok to be synchronized with gedelog
     * @param Operations $oOperation
     * @return array : errors in operation data
     */
    public function validateOperation(Operations $oOperation) : array
    {
        $aErrors = array();

        // Retrieve translator
        $oTranslator = Zend_Registry::get('Zend_Translate');

        // Check if operation has a warehouse, registered as an option
        if (! $this->getWarehouseOperationOption($oOperation)) {
            $aErrors[] = $oTranslator->translate('error_no_warehouse_selected');
        }

        if ($oOperation->isPushedToGedelog()) {
            $aErrors[] = $oTranslator->translate('error_operation_has_already_been_pushed_into_gedelog');
        }
        if (! in_array($oOperation->getOpStatusId(), array(Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE))) {
            $aErrors[] = $oTranslator->translate('error_operation_not_accepted_balanced');
        }
        if (! $oOperation->hasOption(array(ROperationOptions::OPT_WMS_GEDELOG))) {
            $aErrors[] = $oTranslator->translate('error_gedelog_warehouse_not_selected_in_options');
        }
        if (! $oOperation->hasPrimesReal()) {
            $aErrors[] = $oTranslator->translate('error_physical_rewards_must_exist');
        }
        if ($oOperation->getClSiteIdForLog() == null) {
            $aErrors[] = $oTranslator->translate('error_gedelog_customer_address_not_customer_site');
        }

        // Validate physical rewards
        foreach ($oOperation->getInvalidRewards() as $sError => $aRewardsLabels) {
            $aErrors[] = sprintf($oTranslator->translate($sError), join(',', $aRewardsLabels));
        }

        return $aErrors;
    }


    /**
     * Initialize operation in gedelog
     * @param Operations $oOperation
     * @return Operations
     * @throws LogicException
     */
    public function initOperation(Operations $oOperation) : int
    {
        if ($aErrors = $this->validateOperation($oOperation)) {
            throw new \LogicException(join('; ', $aErrors));
        }

        $oLogger = $this->getLogger();
        $oLogger->setActionName('initOperation');
        $oLogger->log('------ Configure operation ' . $oOperation->getOpNumber() . ' ------');

        $sGedelogOrderId = $this->saveCommettant($oOperation);
        $sGedelogWarehouseId = $this->saveEntite($oOperation, $sGedelogOrderId);
        $sGedelogOperationId = $this->saveOperation($oOperation, $sGedelogOrderId);
        $sGedelogSupplierId = $this->saveFournisseur($oOperation, $sGedelogOrderId);

        // Retrieve rewards
        $oCriteria = new Criteria();
        $oCriteria->add('operation_primes.operation_prime_r_reward_type_id', \RRewardTypes::REWARD_TYPE_PHYSIC, Criteria::EQUAL);
        $oCriteria->add('operation_primes.operation_prime_r_reward_transporter_id', null, Criteria::ISNOTNULL);
        $oCriteria->add('operation_primes.operation_prime_r_reward_expedition_mode_id', 1, Criteria::EQUAL);
        $oCriteria->add('operation_primes.gdl_art_id', null, Criteria::ISNULL);

        $aPrimes = $oOperation->getOperationPrimess($oCriteria);
        $this->saveArticles($oOperation, $aPrimes, $sGedelogSupplierId, $sGedelogOperationId, $oOperation->getOpStampStart('Y-m-d'), $sGedelogOrderId, $sGedelogWarehouseId);

        // We make sure everything is ok
        if ($oOperation->isPushedToGedelog()) {
            return $oOperation->getOperationsExt()
                ->setOptSyncGedelogUserId(Phoenix_Auth_User::getInstance()->getUserId())
                ->setOptSyncGedelogDate(date('Ymd H:i:s'))
                ->save();
        }
        throw new LogicException('The operation has not been properly pushed in GEDELOG');
    }

    /**
     * Registration of the customer as a customer in Gedelog, a customer is created by warehouse
     *
     * @param Operations $oOperation
     * @return int
     * @throws Exception
     */
    public function saveCommettant(Operations $oOperation) : int
    {
        $oLogger = $this->getLogger();
        $oLogger->setActionName('saveCommettant');
        $oLogger->log('--- fonction saveCommettant, num op:' . $oOperation->getOpNumber());

        $oGedelogOperationParams = GedelogOperationParamsQuery::create()
            ->findPk($oOperation->getPrimaryKey());

        if ($oGedelogOperationParams == null) {
            $oGedelogOperationParams = new GedelogOperationParams();
            $oGedelogOperationParams->setOpId($oOperation->getOpId());
        }

        $oLogger->log("récupération de l'entrepôt de l'opération, enregistré en tant qu'option");
        // Retrieve the operation warehouse, registered as an option
        $oLnkOperationOption = $this->getWarehouseOperationOption($oOperation);

        if ($oLnkOperationOption == null) {
            $oLogger->log("Il n'y a pas d'entrepôt CS sélectionné");
            throw new Exception("Il n'y a pas d'entrepôt CS sélectionné");
        } else {
            $oLogger->log("recherche d'un commettant existant");
            $iOperationOptionId = $oLnkOperationOption->getOpOptId();
            $oGedelogCommettant = GedelogCommettantsQuery::create()->filterByClId($oOperation->getOpClId())
                ->filterBySiteOptionId($iOperationOptionId)
                ->findOne();

            if ($oGedelogCommettant == null) {
                $oLogger->log("il n'y a pas de commettant existant: création sur gedlog");

                $sGedelogCustomerId = $this->soapCall('saveCommettant', array(
                    'comt_libelle' => 'PROMO ' . $oOperation->getClients()->getClLibelle(),
                    'comt_valid_opt' => 0,
                    'site_id' => ($iOperationOptionId == ROperationOptions::OPT_ENTREPOT_ERAGNY ? 2 : 1)
                ));

                $oLogger->log("référencement du commettant dans phoenix");
                $oLogger->log($oOperation->getOpClId() . ' ' . $iOperationOptionId . ' ' . $sGedelogCustomerId);
                $oGedelogCommettant = new GedelogCommettants();
                $oGedelogCommettant->setClId($oOperation->getOpClId())
                    ->setSiteOptionId($iOperationOptionId)
                    ->setGdlComtId($sGedelogCustomerId)
                    ->save();
            } else {
                $oLogger->log("commetant trouvé : " . $oGedelogCommettant->getGdlComtId());
            }

            $oGedelogOperationParams->setGdlComtId($oGedelogCommettant->getGdlComtId())->save();

            return $oGedelogCommettant->getGdlComtId();
        }
    }

    /**
     * @param Operations $oOperation
     * @return int
     * @throws \LogicException
     * @throws \UnexpectedValueException
     */
    public function saveEntite(Operations $oOperation, $sOrderId) : int
    {
        $oLogger = $this->getLogger();

        $oLogger->setActionName('saveEntite');
        $oLogger->log('--- fonction saveEntite, num op:' . $oOperation->getOpNumber());

        $oGedelogOperationParams = GedelogOperationParamsQuery::create()->findPk($oOperation->getPrimaryKey());

        if ($oGedelogOperationParams == null) {
            $oGedelogOperationParams = new GedelogOperationParams();
            $oGedelogOperationParams->setOpId($oOperation->getOpId());
        }

        $oLogger->log("récupération de l'entrepôt de l'opération, enregistré en tant qu'option");

        // Retrieve the operation warehouse, registered as an option
        $oLnkOperationOption = $this->getWarehouseOperationOption($oOperation);

        if ($oOperation->getClientSiteForLog() == null) {
            $oLogger->log($sError = 'There is no client site attached to the operation', Zend_Log::WARN);
            throw new \LogicException($sError);
        }
        if ($oLnkOperationOption == null) {
            $oLogger->log($sError = 'There is no CS warehouse selected');
            throw new \LogicException($sError);
        }
        $oLogger->log("recherche d'une entité existante");

        $iOperationOptionId = $oLnkOperationOption->getOpOptId();
        $oGedelogEntites = GedelogEntitesQuery::create()->filterBySiteOptionId($iOperationOptionId)
            ->filterByClSiteId($oOperation->getClientSiteForLog()->getClSiteId())
            ->findOne();

        if ($oGedelogEntites) {
            $oLogger->log("entité trouvée : " . $oGedelogEntites->getGdlEntId());
        } else {
            $oLogger->log("il n'y a pas d'entité existante : création sur gedlog");
            $sGedelogWarehouseId = $this->soapCall('saveEntite', array(
                'comt_id' => $sOrderId,
                'ent_libelle' => 'PROMO ' . htmlentities($oOperation->getClients()->getClLibelle()),
                'ent_raison' => htmlentities($oOperation->getClients()->getClLibelle()),
                'ent_addr1' => htmlentities($oOperation->getClientSiteForLog()->getClSiteAddr1()),
                'ent_cp' => $oOperation->getClientSiteForLog()->getClSiteZipcode(),
                'ent_ville' => htmlentities($oOperation->getClientSiteForLog()->getClSiteTown()),
                'ent_pays' => $oOperation->getClientSiteForLog()->getClSiteCountry(),
                'ent_valid_opt' => 0,
                'ent_post_comments' => "Créé par Phoenix le " . date('dmY')
            ));

            if (! $sGedelogWarehouseId) {
                $oLogger->log('Gedelog warehouse id is empty');
                throw new \UnexpectedValueException('Gedelog warehouse id is empty');
            }


            $oLogger->log("ClSiteId : " . $oOperation->getClientSiteForLog()->getClSiteId());
            $oLogger->log("SiteOptionId : " . $iOperationOptionId);
            $oLogger->log("GdlEntId : " . $sGedelogWarehouseId);

            $oGedelogEntites = new GedelogEntites();
            $oGedelogEntites->setClSiteId($oOperation->getClientSiteForLog()->getClSiteId())
                ->setSiteOptionId($iOperationOptionId)
                ->setGdlEntId($sGedelogWarehouseId)
                ->save();
        }

        $oGedelogOperationParams->setGdlEntId($oGedelogEntites->getGdlEntId())->save();

        return $oGedelogEntites->getGdlEntId();
    }

    /**
     * Save operation
     * @param Operations $oOperation
     * @param type $sOrderId
     * @return type
     * @throws Exception
     */
    public function saveOperation(Operations $oOperation, $sOrderId)
    {
        $oLogger = $this->getLogger();

        $oLogger->setActionName('saveOperation');
        $oLogger->log('--- SaveOperation, operation number: ' . $oOperation->getOpNumber());

        $oGedelogOperationParams = GedelogOperationParamsQuery::create()
            ->findPk($oOperation->getPrimaryKey());

        if ($oGedelogOperationParams == null) {
            $oGedelogOperationParams = new GedelogOperationParams();
            $oGedelogOperationParams->setOpId($oOperation->getOpId());
        }
        
        // Retrieve the operation warehouse, registered as an option
        $oLnkOperationOption = $this->getWarehouseOperationOption($oOperation);

        if ($oLnkOperationOption == null) {
            $oLogger->log($sError = 'There is no CS warehouse selected');
            throw new \LogicException($sError);
        }
        if ($oGedelogOperationParams->getGdlOpId() == null) {
            $oLogger->log('Search for an existing customer');
            $iOperationOptionId = $oLnkOperationOption->getOpOptId();
            $oLogger->log('Save of the operation in Gedelog');

            // Convert the warehouse option to the value expected by the Gedelog soap server
            switch ($iOperationOptionId) {
                case ROperationOptions::OPT_ENTREPOT_ERAGNY:
                    $iWarehouseId = 2;
                    break;
                case ROperationOptions::OPT_ENTREPOT_PEYNIER:
                    $iWarehouseId = 1;
                    break;
                case ROperationOptions::OPT_ENTREPOT_ROUSSET:
                    $iWarehouseId = 3;
                    break;
                default:
                    throw new DomainException("L'entrepôt sélectionné n'est pas ERAGNY/PEYNIER/ROUSSET");
                    return;
            }

            $sGedelogOperationId = $this->soapCall('saveOperation', array(
                'OP_DATE' => date('Y-m-d H:i:s'),
                'OP_LIBELLE' => $oOperation->getOpNumber() . ' - ' . $oOperation->getOpLibelle(),
                'COMT_ID' => $sOrderId,
                'OP_ID_PHOENIX' => $oOperation->getOpId(),
                'SITE_ID' => $iWarehouseId
            ));

            if (! $sGedelogOperationId) {
                $oLogger->log('Gedelog operation id is empty');
                throw new UnexpectedValueException('Gedelog operation id is empty');
            }

            $oLogger->log('Gedelog operation id : ' . $sGedelogOperationId);
            $oGedelogOperationParams->setGdlOpId($sGedelogOperationId)->save();
        } else {
            $oLogger->log('The operation is already registered in Gedelog');
        }
        return $oGedelogOperationParams->getGdlOpId();
    }

    /**
     * Save supplier
     * @param Operations $oOperation
     * @param type $sOrderId
     * @return type
     * @throws Exception
     */
    public function saveFournisseur(Operations $oOperation, $sOrderId)
    {
        $oLogger = $this->getLogger();

        $oLogger->setActionName('saveFournisseur');
        $oLogger->log('--- fonction saveFournisseur, num op:' . $oOperation->getOpNumber());

        if ($oOperation->getClientSiteForLog() == null) {
            $oLogger->log($sError = 'There is no client site attached to the operation', Zend_Log::WARN);
            throw new \LogicException($sError);
        }
        $oGedelogOperationParams = GedelogOperationParamsQuery::create()
            ->findPk($oOperation->getPrimaryKey());

        if ($oGedelogOperationParams == null) {
            $oGedelogOperationParams = new GedelogOperationParams();
            $oGedelogOperationParams->setOpId($oOperation->getOpId());
        }

        if ($oOperation->getClientSiteForLog()->getGdlFournId() == null) {
            $oLogger->log("enregistrement du fournisseur dans gedelog");
            $iSupplierId = $this->soapCall('saveFournisseur', array(
                'comt_id' => $sOrderId,
                'fourn_nom' => htmlentities($oOperation->getClients()->getClLibelle()),
                'fourn_raison' => htmlentities($oOperation->getClients()->getClLibelle()),
                'fourn_addr1' => htmlentities($oOperation->getClientSiteForLog()->getClSiteAddr1()),
                'fourn_cp' => $oOperation->getClientSiteForLog()->getClSiteZipcode(),
                'fourn_ville' => htmlentities($oOperation->getClientSiteForLog()->getClSiteTown()),
                'fourn_pays' => $oOperation->getClientSiteForLog()->getClSiteCountry()
            ));
            $oOperation->getClientSiteForLog()->setGdlFournId($iSupplierId)->save();
        } else {
            $oLogger->log("Le fournisseur est déjà enregistrée dans gedelog");
        }

        $oGedelogOperationParams->setGdlFournId($oOperation->getClientSiteForLog()->getGdlFournId())->save();

        $oLogger->log('GdlFournId : ' . $oOperation->getClientSiteForLog()->getGdlFournId());
        return $oOperation->getClientSiteForLog()->getGdlFournId();
    }

    /**
     *
     * @param Operations $oOperation
     * @param array $aPrimes
     * @param string $sGedelogSupplierId
     * @param string $sGedelogOperationId
     * @param string $sDeliveryDate
     * @param string $sGedelogOrderId
     * @param string $sGedelogWarehouseId
     */
    public function saveArticles(Operations $oOperation, $aPrimes, $sGedelogSupplierId, $sGedelogOperationId, $sDeliveryDate, $sGedelogOrderId, $sGedelogWarehouseId)
    {
        $oLogger = $this->getLogger();

        $oLogger->setActionName('saveArticles');

        if ($aPrimes instanceof OperationPrimes) {
            $oOperationPrimes = $aPrimes;
            unset($aPrimes);
            $aPrimes[] = $oOperationPrimes;
        }

        $oLogger->log('--- fonction saveArticles, num op:' . $oOperation->getOpNumber());

        if (count($aPrimes) > 0) {
            foreach ($aPrimes as $sKey => $oPrime) {
                $oLogger->log("enregistrment de l'article dans gedelog : " . $oOperation->getOpNumber() . '/' . $oPrime->getOpPrimeNumero());
                $iGedelogArticleId = $this->soapCall('saveArticle', array(
                    'COMT_ID' => $sGedelogOrderId,
                    'ENT_ID' => $sGedelogWarehouseId,
                    'ART_REF' => $oOperation->getOpNumber() . '/' . str_pad($oPrime->getOpPrimeNumero(), 6, '0', STR_PAD_LEFT),
                    'ART_LIBELLE' => $oPrime->getOpPrimeLibelle(),
                    'CTRL_ID' => 1,
                    'ART_UNITESCOMMANDE' => 1,
                    'UG_ID' => 9,
                    'UG_QUANTITE' => 1,
                    'ART_ACTIVATE' => 1,
                ));

                $oPrime->setGdlArtId($iGedelogArticleId)->save();
                $aPrimes[$sKey] = $oPrime;
            }

            $oLogger->log('-enregistrement de la livraison');

            $iDeliveryId = $this->soapCall('saveLivraison', array(
                'FOURN_ID' => $sGedelogSupplierId,
                'LIV_LOGGER_ID' => 66,
                'LIV_POIDS_THEO' => 0,
                'LIV_VALIDATE' => 1,
                'LIV_RECEPTION' => $sDeliveryDate,
                'OP_ID' => $sGedelogOperationId,
                'LIV_DATE' => $sDeliveryDate,
                'LIV_COMMENT' => "Créée par Phoenix le " . date('dmY')
            ));
            $oLogger->log('identifiant gedelog de la livraison : ' . $iDeliveryId);

            $aData = array();
            $oLogger->log('-enregistrement des lignes de livraison');
            foreach ($aPrimes as $oPrime) {
                $aData[] = array(
                    'ART_ID' => $oPrime->getGdlArtId(),
                    'ART_QUANTITE' => $oPrime->getQtePrev(),
                    'LIV_ID' => $iDeliveryId
                );
            }
            $oLogger->log(print_r($aData, true));
            $this->soapCall('saveLivArticle', $aData);
        } else {
            $oLogger->log("pas d'articles à integrer dans gedelog");
        }
    }

    /**
     * Add a reward for an operation already recorded in gedelog
     *
     * @param Operations $oOperation
     * @param OperationPrimes $oOperationPrime
     * @return bool
     * @throws LogicException
     */
    public function addArticle(Operations $oOperation, OperationPrimes $oOperationPrime) : bool
    {
        $oLogger = $this->getLogger();
        $oLogger->setActionName('addArticle');
        $oLogger->log('--- fonction addArticle, num op:' . $oOperation->getOpNumber() . ', prime id:' . $oOperationPrime->getOpPrimeId());

        if (! $oOperationPrime->getOpPrimeIsVirtual() && $oOperation->isPushedToGedelog()) {
            if ($oOperationPrime->getGdlArtId() !== null) {
                throw new \LogicException('The reward has already been pushed into Gedelog');
            }
            $oGedelogOperationParams = $oOperation->getGedelogOperationParams();

            $this->saveArticles(
                $oOperation,
                $oOperationPrime,
                $oGedelogOperationParams->getGdlFournId(),
                $oGedelogOperationParams->getGdlOpId(),
                $oOperation->getOpStampStart('Y-m-d'),
                $oGedelogOperationParams->getGdlComtId(),
                $oGedelogOperationParams->getGdlEntId()
            );

            $oOperationPrime->reload();
        }
        return $oOperationPrime->getGdlArtId() != null;
    }

    /**
     * Call the soap server
     * @param string $sFunction
     * @param array $aArguments
     * @return mixed
     */
    protected function soapCall(string $sFunction, array $aArguments)
    {
        array_walk_recursive($aArguments, function (&$sItem) {
            if (is_string($sItem)) {
                $sItem = mb_convert_encoding($sItem, 'UTF-8');
            }
        });
        return $this->getSoapClient()->$sFunction($aArguments);
    }

    /**
     * Retrieve logger, initialize it if not defined
     * @return Phoenix_Log
     * @throws \LogicException
     */
    public function getLogger() : Phoenix_Log
    {
        if ($this->logger === null) {
            $this->logger = Phoenix_Logger::getInstanceGedelog();
        }
        if ($this->logger instanceof \Phoenix_Log) {
            return $this->logger;
        }
        throw new \LogicException('Property "logger" expects an instance of "\Phoenix_Log", "' . (is_object($this->logger) ? get_class($this->logger) : gettype($this->logger)) . '" defined');
    }

    /**
     * Retrieve soap client, initialize ot if not defined
     * @return Zend_Soap_Client
     * @throws \LogicException
     */
    public function getSoapClient() : Zend_Soap_Client
    {
        if ($this->soapClient === null) {
            $sHost = My_Env::getInstance()->getConfig()->gedelog->host;
            $this->soapClient = new Zend_Soap_Client(null, array('location' => $sHost . '/server.soap.php', 'uri' => $sHost));
        }
        if ($this->soapClient instanceof \Zend_Soap_Client) {
            return $this->soapClient;
        }
        throw new \LogicException('Property "soapClient" expects an instance of "\Zend_Soap_Client", "' . (is_object($this->soapClient) ? get_class($this->soapClient) : gettype($this->soapClient)) . '" defined');
    }
}
