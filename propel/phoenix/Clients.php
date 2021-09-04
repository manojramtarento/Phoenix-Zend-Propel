<?php


class Clients extends BaseClients
{

    /**
     * Retrieve stats over the last three years
     * We query the stats tables for N, N-1 and N-2
     *
     * View_Client_Stats_NbDevisCrees
     * Number of quotations created per customer and per year
     *
     * View_Client_Customer_Stat_NbDevisCreesAndAcceptes
     * On the estimates previously created, how many have expired (accepted/closed) (regardless of the year of acceptance)
     *
     * View_Client_Client_Stats_NbDevisAccepts
     * Number of accepted quotations per customer and per year
     * Note: Not necessarily related to previous quotations as it may have been accepted.
     * in year N+1 a quotation created in year N.
     *
     * View_Client_Client_Stats_DigitInvoice
     * Invoiced per customer and per year
     * Note: Not necessarily related to previous quotations as it may have been accepted.
     * in year N+1 a quotation created in year N.
     */
    public function getYearStats()
    {
        $iCurrentYear = date('Y');
        $aStatsByYear = array(
            ($iCurrentYear - 2) => array(
                'nb_devis_crees' => 0,
                'nb_devis_crees_et_acceptes' => 0,
                'nb_devis_acceptes' => 0,
                'chiffre_facture' => 0,
            ),
            ($iCurrentYear - 1) => array(
                'nb_devis_crees' => 0,
                'nb_devis_crees_et_acceptes' => 0,
                'nb_devis_acceptes' => 0,
                'chiffre_facture' => 0,
            ),
            ($iCurrentYear) => array(
                'nb_devis_crees' => 0,
                'nb_devis_crees_et_acceptes' => 0,
                'nb_devis_acceptes' => 0,
                'chiffre_facture' => 0,
            ),
        );

        // Generalizes the treatment (View to check => key to modify in the stats table)
        $aRequests = array(
            'View_Client_Stats_NbDevisCrees' => 'nb_devis_crees',
            'View_Client_Stats_NbDevisCreesEtAcceptes' => 'nb_devis_crees_et_acceptes',
            'View_Client_Stats_NbDevisAcceptes' => 'nb_devis_acceptes',
            'View_Client_Stats_ChiffreFacture' => 'chiffre_facture'
        );

        foreach ($aRequests as $sView => $sKeyToUpdate) {
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aData = $oZendDbSelect->from($sView)
                ->where('cl_id = ?', $this->getClId())
                ->where('(year = ' . ($iCurrentYear) . ' OR year = ' . ($iCurrentYear - 1) . ' OR year = ' . ($iCurrentYear - 2) . ')')
                ->query()->fetchAll();

            // For each year (N, N-1, N-2), retrieve the data if it is present
            foreach ($aData as $aRow) {
                $aStatsByYear[$aRow['year']][$sKeyToUpdate] = $aRow[$sKeyToUpdate];
            }
        }

        return $aStatsByYear;
    }

    /**
     * Computes Global customer statistics
     *
     * @return array
     */
    public function getGlobalStats($bGetRequiredCash = true)
    {
        $sCurrentYear = date('Y');
        $aClientStats = array(
            'solde_realise' => 0,
            'solde_facture' => 0,
            'solde_encaisse' => 0,
            'ca_n' => 0,
            'ca_n1' => 0
        );

        // Restrieving balance stats
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aBalanceStats = $oZendDbSelect->from('View_Client_Stats_Soldes')
            ->where('cl_id = ?', $this->getClId())
            ->query()->fetchAll();

        if ($aBalanceStats) {
            $aClientStats['solde_realise'] = isset($aBalanceStats[0]['solde_realise']) ? $aBalanceStats[0]['solde_realise'] : 0;
            $aClientStats['solde_facture'] = isset($aBalanceStats[0]['solde_facture']) ? $aBalanceStats[0]['solde_facture'] : 0;
            $aClientStats['solde_encaisse'] = isset($aBalanceStats[0]['solde_encaisse']) ? $aBalanceStats[0]['solde_encaisse'] : 0;
        }

        // Retrieving customer operations of the current year
        $sCurrentYearJanuaryFirst = $sCurrentYear . '-01-01';
        $aCurrentYearOperationsList = OperationsQuery::create()
            ->select('OpId')
            ->filterByClients($this)
            ->filterByOpDateconsoStart($sCurrentYearJanuaryFirst, Criteria::GREATER_EQUAL)
            ->find()
            ->toArray();

        // Retrieving realized turnover over these operations
        $aClientStats['ca_n'] = $this->getRealisedTurnoverByOperationsIds($aCurrentYearOperationsList);

        // Retrieving customer operations of the past year
        $sPastYearJanuaryFirst = ($sCurrentYear - 1) . '-01-01';
        $sCurrentDayOfThePastYear = ($sCurrentYear - 1) . date('-m-d');
        $aPastYearOperationsList = OperationsQuery::create()
            ->select('OpId')
            ->filterByClients($this)
            ->filterByOpDateconsoStart($sPastYearJanuaryFirst, Criteria::GREATER_EQUAL)
            ->filterByOpDateconsoStart($sCurrentDayOfThePastYear, Criteria::LESS_THAN)
            ->find()
            ->toArray();

        // Retrieve realized turnover over these operations
        $aClientStats['ca_n1'] = $this->getRealisedTurnoverByOperationsIds($aPastYearOperationsList);

        // Retrieve Consolidated data on accepted operations
        $aOperationList = OperationsQuery::create()->select('OpId')->filterByClients($this)->filterByOpStatusId(Operations::STATUS_ACCEPTE)->find()->toArray();

        // Add consolidated cash, consolidated overdrafts and required funds to the stats
        $aClientStats += $this->getConsolidatedDataForOpList($aOperationList);

        // Add required cash
        $aClientStats['required_cash'] = $aOperationList && $bGetRequiredCash ? Phoenix_ExternalConnection_Arthur::getInstance()->getRequiredFundsByOperationIds($aOperationList) : 0;
        return $aClientStats;
    }

    /**
     * Returns the turnover for a list of transactions
     *
     * @param array $aOperationsIds
     */
    protected function getRealisedTurnoverByOperationsIds(array $aOperationsIds) : int
    {
        $iSum = 0;
        if ($aOperationsIds) {
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aData = $oZendDbSelect->from('View_Operation_CARealise')
                ->where('op_id IN (' . implode(',', $aOperationsIds) . ')')
                ->query()->fetchAll();
            foreach ($aData as $aRow) {
                $iSum += $aRow['ca_realise'];
            }
        }

        return $iSum;
    }

    /**
     * Returns array of consolidated data for a set of operations
     *
     * @param array $aOperationList
     * @return array
     */
    public function getConsolidatedDataForOpList(array $aOperationList) : array
    {
        $aConsolidatedData = array('tresorerie_consolidee' => 0, 'consolidated_overdrafts' => 0);

        if ($aOperationList) {
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aConsolidatedCashData = $oZendDbSelect->from('View_Operation_TresorerieConsolidee')
                ->where('op_id IN (' . implode(',', $aOperationList) . ')')
                ->query()
                ->fetchAll();

            $aConsolidatedData = array_reduce($aConsolidatedCashData, function ($aCustomerConsolidatedData, $aOperationConsolidatedData) {
                $aCustomerConsolidatedData['tresorerie_consolidee'] += $aOperationConsolidatedData['adf_facture'] - $aOperationConsolidatedData['adf_reel'];
                $aCustomerConsolidatedData['consolidated_overdrafts'] += $aOperationConsolidatedData['montant_decouverts_autorises'];
                return $aCustomerConsolidatedData;
            }, $aConsolidatedData);
        }

        return $aConsolidatedData;
    }

    /**
     * Presence of a negotiated pricing grid
     *
     * @return bool
     */
    public function hasPrestaNegoce() : bool
    {
        return $this->getClientPrestationss()->count() > 0;
    }

    /**
     * Reference system for services with negotiated sales prices for the customer
     *
     * @param bool $bWithNegoce completes the results with the negotiated price
     * @param array $aSearchedFields [r_prestation_id, r_p_libelle]
     * @param boolean $bNegoceOnly only displays negotiated services
     * @return array
     */
    public function getReferenceServicesWithNegoce(bool $bWithNegoce, array $aSearchedFields, bool $bNegoceOnly = true) : array
    {

        $aRPrestations = ClientPrestationsQuery::create()->getReferenceServicesWithNegoceData($this->getClId(), $bWithNegoce, $aSearchedFields);

        // Add negotiated benefits, if requested
        if ($bWithNegoce) {
            $oClientPrestations = $this->getClientPrestationss();
            $aClientPrestations = $oClientPrestations->toArray('RPrestId', false, Basepeer::TYPE_FIELDNAME);

            foreach ($aRPrestations as $iPrestationId => $aRPrestation) {
                // For each service, we look at whether we have a negotiated price and a customised wording for the client.
                if (isset($aClientPrestations[$iPrestationId])) {
                    $aRPrestations[$iPrestationId]['r_p_prix_vente'] = $aClientPrestations[$iPrestationId]['cl_prest_pv'];
                    $aRPrestations[$iPrestationId]['r_p_libelle'] = ($aClientPrestations[$iPrestationId]['r_p_client_libelle']) ? $aClientPrestations[$iPrestationId]['r_p_client_libelle'] : $aRPrestations[$iPrestationId]['r_p_libelle'];
                } // If not, we'll check to see if we should display the performance
                elseif ($bNegoceOnly) {
                    unset($aRPrestations[$iPrestationId]);
                }
            }
        }
        if ($bNegoceOnly) {
            if (! isset($aClientPrestations)) {
                $oClientPrestations = $this->getClientPrestationss();
                $aClientPrestations = $oClientPrestations->toArray('RPrestId', false, Basepeer::TYPE_FIELDNAME);
            }

            foreach ($aRPrestations as $iPrestationId => $aRPrestation) {
                if (! isset($aClientPrestations[$iPrestationId])) {
                    unset($aRPrestations[$iPrestationId]);
                }
            }
        }

        return $aRPrestations;
    }

    /**
     * @return ClientFactureOptions|null
     */
    public function getClientFactureOptions() : ? ClientFactureOptions
    {
        if ($iClientId = $this->getClId()) {
            return ClientFactureOptionsQuery::create()->findOneByClId($iClientId);
        }
        return null;
    }

    /**
     * Logs a contract file version
     * @param string $sName
     * @return int|boolean
     */
    public function addFileContrat($sName)
    {
        $oFile = new Files();
        $oFile->setFileCategoryId(RFileCategories::CONTRAT);
        $oFile->setFileEntityName('clients');
        $oFile->setFileEntityId($this->getClId());
        $oFile->setFileName($sName);

        if ($oFile->validate()) {
            $oFile->save();
            return $oFile->getFileId();
        } else {
            $aErrors = $oFile->getValidationFailures();
            foreach ($aErrors as $sFieldname => $aErrorsField) {
                if (is_array($aErrorsField)) {
                    foreach ($aErrorsField as $oError) {
                        $this->addValidationFailed($oError->getMessage());
                    }
                } else {
                    $this->addValidationFailed($aErrorsField->getMessage());
                }
            }
        }

        return false;
    }

    /**
     * @return Files
     */
    public function getFilesContrat()
    {
        return FilesQuery::create()->findByCategoryAndEntity(RFileCategories::CONTRAT, 'clients', $this->getClId());
    }

    /**
     * @param \PropelPDO $oConnection
     */
    public function save(\PropelPDO $oConnection = null)
    {

        $bIsNew = $this->isNew();

        parent::save($oConnection);

        if ($bIsNew) {
            // Creates its default options (Contract)
            $oClientContratOptions = new ClientContratOptions;
            $oClientContratOptions->setClId($this->getClId());
            $oClientContratOptions->save();

            if ($this->getClientContratOptionss() == null) {
                // Creates its default options (Factor)
                $oClientFactureOptions = new ClientFactureOptions;
                $oClientFactureOptions->setClId($this->getClId());
                $oClientFactureOptions->save();
            }
        }
    }

    /**
     * Create a client entity from given data
     *
     * @param array $aData
     * @param array $aFilesData
     * @return Clients|array
     */
    public static function createClientFromData(array $aData, array $aFilesData)
    {
        // Handle client sales director
        if (! empty($aData['cl_dc_login'])) {
            $oUser = UsersQuery::create()->findOneByUserLogin($aData['cl_dc_login']);
            if (! $oUser instanceof Users) {
                return array(
                    'cl_dc_login' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_dc_login_not_valid'))
                    ),
                );
            }
            $aData['cl_dc_id'] = $oUser->getUserId();
        }

         // Handle client data
        $oClients = new Clients();
        $oClients->fromArray($aData, BasePeer::TYPE_FIELDNAME);

        if (! $oClients->validate()) {
            return $oClients->getValidationFailures();
        }

        // Starting transaction
        $oConnection = $oClients->getConnection();
        $oConnection->beginTransaction();

        // We save the client
        $oClients->save();

        // Handle client site data
        $oClientSite = null;
        $aDataKeys = array_keys($aData);
        if (preg_grep('/^cl_site_[a-z]+/', $aDataKeys)) {
            $oClientSiteOrErrors = ClientSites::createClientSiteFromData($oClients, $aData);
            if (! $oClientSiteOrErrors instanceof ClientSites) {
                $oConnection->rollBack();
                return $oClientSiteOrErrors;
            }
            $oClientSite = $oClientSiteOrErrors;
        }

        // Handle emails param to generate contacts
        if (! empty($aData['cl_ct_facturation_email'])) {
            $oContact = Contacts::createContactFromEmail($oClients, $oClientSite, $aData['cl_ct_facturation_email']);
            if (! $oContact instanceof Contacts) {
                $oConnection->rollBack();
                return $oContact;
            }
            $oClients->setContactFacturation($oContact);
            $oClients->setContactGestion($oContact);
            $oClients->save();
        }

        if (! empty($aData['cl_ct_emails'])) {
            foreach (array_map('trim', explode(',', $aData['cl_ct_emails'])) as $sEmail) {
                $oContact = Contacts::createContactFromEmail($oClients, $oClientSite, $sEmail);
                if (! $oContact instanceof Contacts) {
                    $oConnection->rollBack();
                    return $oContact;
                }
            }
        }
        $oClientInvoiceOption = ClientFactureOptions::createClientInvoiceOptionFromData($oClients, $aData);
        if (! $oClientInvoiceOption instanceof ClientFactureOptions) {
            $oConnection->rollBack();
            return $oClientInvoiceOption;
        }

        $oClients->addClientFactureOptions($oClientInvoiceOption);

        // Store client logo into the configured directory
        if (! empty($aFilesData['cl_logo']['tmp_name'])) {
            $sTargetPath = Zend_Registry::get('config')->path->img->logo->client . '/' . $oClients->getClId() . '.gif';
            if (false === move_uploaded_file($aFilesData['cl_logo']['tmp_name'], $sTargetPath)) {
                $oConnection->rollBack();
                throw new \RuntimeException('The customer "' . $oClients->getClLibelle() . '" logo file could not be moved to the requested target "' . $sTargetPath . '"');
            }
        }

        $oConnection->commit();
        return $oClients;
    }



}
