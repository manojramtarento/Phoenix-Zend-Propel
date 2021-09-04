<?php

/**
 * Export des factures sous le journal des ventes
 */
class Data_Compta_Ventes_Builder
{

    /**
     * @var JournalDeVente
     */
    protected $_oJournalDeVente;

    /**
     * @var Zend_Config_Ini
     */
    protected $_oConfig;
    protected $_aErrors = array();

    /**
     *
     * @var array
     */
    protected $_aFactid = array();
    protected $_iNbLignes = 0;
    protected $_sDateFactMin;
    protected $_sDateFactMax;

    /**
     * @param string $sDateFactMin Y-m-d
     * @param string $sDateFactMax Y-m-d
     * @throws InvalidArgumentException
     */
    public function __construct($sDateFactMin, $sDateFactMax)
    {
        $this->_oJournalDeVente = new JournalDeVente();

        if (! $sDateFactMin) {
            throw new \InvalidArgumentException('Argument "$sDateFactMin" is empty');
        }

        if (! $sDateFactMax) {
            throw new \InvalidArgumentException('Argument "$sDateFactMax" is empty');
        }

        $this->_sDateFactMin = $sDateFactMin;
        $this->_sDateFactMax = $sDateFactMax;

        $this->_oConfig = new Zend_Config_Ini(APPLICATION_PATH . '/class/Data/Compta/config.ini');
    }

    /**
     * @param int $iNumAxe
     * @param int $iAxeId
     * @param int $iActivityId
     * @return string
     * @throws \LogicException
     */
    protected function _getAxeCode($iNumAxe, $iAxeId, $iActivityId)
    {
        if (! $iAxeId) {
            return '';
        }
        static $aResult;

        if (! isset($aResult[$iNumAxe])) {
            $aResult[$iNumAxe] = Propel::getConnection()->query('SELECT r_p_axe' . $iNumAxe . '_id,r_p_axe' . $iNumAxe . '_tag FROM r_p_axe' . $iNumAxe)->fetchAll(PDO::FETCH_KEY_PAIR);
        }
        
        if ($iNumAxe == 1 && $aResult[$iNumAxe][$iAxeId] == 'VAR') {
            if ($iActivityId == RCustomActivites::TYPE_LOG) {
                return 'LOG';
            }
            return 'PROMO';
        }
        
        return $aResult[$iNumAxe][$iAxeId];
    }

    /**
     *
     * @param Factures $oFacture
     */
    protected function _addLigneCompteGeneral(Factures $oFacture)
    {

        /**
         * compte client
         */
        $oClientFactureOptions = $oFacture->getOperations()->getClientFactureOptions();

        if ($oClientFactureOptions->getCountryInvoiced() == null) {
            throw new Exception("[" . $oFacture->getFactReference() . "] Le compte client " . $oClientFactureOptions->getClients()->getClLibelle() . " n'a pas de pays spécifié");
        }
        // 34516 Vérification que l'identifiant du pays correspond à celui de la France
        if (RCountriesQuery::create()->isFranceCountry($oClientFactureOptions->getClFactCountryId())) {
            $montant = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('tva')->endUse()->endUse()
                    ->withColumn('sum(fact_prest_montant_facture_final*r_tva_coeff)', 'montant')
                    ->select(array('montant'))
                    ->having('sum(fact_prest_montant_facture_final*r_tva_coeff) != 0')
                    ->findOne();

            $compteGeneral = $this->_oConfig->compte->client->fra;
        } else {
            $montant = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('ttc', Criteria::ALT_NOT_EQUAL)->endUse()->endUse()
                    ->withColumn('sum(fact_prest_montant_facture_final)', 'montant')
                    ->select(array('montant'))
                    ->having('sum(fact_prest_montant_facture_final) != 0')
                    ->findOne();
            // 35189 : Récupération du r_country_zone_code_bin depuis la table r_countries
            if ($oClientFactureOptions->getCountryInvoiced()->getRCountryZoneCodeBin() & RCountriesZoning::ZONE_EURO) {
                $compteGeneral = $this->_oConfig->compte->client->eu;
            } else {
                $compteGeneral = $this->_oConfig->compte->client->int;
            }
        }

        if ($montant != null) {
            $compteAuxiliaire = '';
            if ($oFacture->getClientFactureOptions() != null) {
                $compteAuxiliaire = $oFacture->getClientFactureOptions()->getClFactCompte();
            }
            $aJournalDeVenteLigne = array();
            $aJournalDeVenteLigne['JdvlType'] = 'g';
            $aJournalDeVenteLigne['JdvlDate'] = $oFacture->getFactDate();
            $aJournalDeVenteLigne['JdvlJournal'] = 'VTE';
            $aJournalDeVenteLigne['JdvlGeneral'] = $compteGeneral;
            $aJournalDeVenteLigne['JdvlAuxiliaire'] = $compteAuxiliaire;
            $aJournalDeVenteLigne['JdvlMontant'] = $montant;
            $aJournalDeVenteLigne['JdvlReference'] = $oFacture->getFactReference();
            $aJournalDeVenteLigne['JdvlOpId'] = $oFacture->getOperations()->getOpId();
            $aJournalDeVenteLigne['JdvlOrder'] = ++$this->_iNbLignes;
            $aJournalDeVenteLigne['JdvlClient'] = $oFacture->getClients()->getClLibelle();
            $aJournalDeVenteLigne['JdvlDateEcheance'] = $oFacture->getFactDateEcheance();
            ;

            if ($montant > 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'D';
            }
            if ($montant < 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'C';
            }

            $this->_oJournalDeVente->addJournalDeVenteLigneRecord($aJournalDeVenteLigne);
        }

        /**
         * compte tva
         */
        // 34516 Vérification que l'identifiant du pays correspond à celui de la France
        if (RCountriesQuery::create()->isFranceCountry($oFacture->getOperations()->getClientFactureOptions()->getClFactCountryId())) {
            $montant = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('tva')->endUse()->endUse()
                    ->withColumn('sum(fact_prest_montant_facture_final*r_tva_taux)/100', 'montant')
                    ->select(array('montant'))
                    ->having('sum(fact_prest_montant_facture_final*r_tva_taux)/100 != 0')
                    ->findOne();

            if ($montant != null) {
                $compteGeneral = $this->_oConfig->compte->tva;
                $aJournalDeVenteLigne = array();
                $aJournalDeVenteLigne['JdvlType'] = 'g';
                $aJournalDeVenteLigne['JdvlDate'] = $oFacture->getFactDate();
                $aJournalDeVenteLigne['JdvlJournal'] = 'VTE';
                $aJournalDeVenteLigne['JdvlGeneral'] = $compteGeneral;
                $aJournalDeVenteLigne['JdvlMontant'] = $montant;
                $aJournalDeVenteLigne['JdvlReference'] = $oFacture->getFactReference();
                $aJournalDeVenteLigne['JdvlOpId'] = $oFacture->getOperations()->getOpId();
                $aJournalDeVenteLigne['JdvlOrder'] = ++$this->_iNbLignes;
                $aJournalDeVenteLigne['JdvlClient'] = $oFacture->getClients()->getClLibelle();
                $aJournalDeVenteLigne['JdvlDateEcheance'] = $oFacture->getFactDateEcheance();
                ;

                if ($montant > 0) {
                    $aJournalDeVenteLigne['JdvlSens'] = 'C';
                }
                if ($montant < 0) {
                    $aJournalDeVenteLigne['JdvlSens'] = 'D';
                }

                $this->_oJournalDeVente->addJournalDeVenteLigneRecord($aJournalDeVenteLigne);
            }
        }

        /**
         * compte produit
         */
        // 34516 Vérification que l'identifiant du pays correspond à celui de la France
        $aLignesProduit = array();
        if (RCountriesQuery::create()->isFranceCountry($oFacture->getOperations()->getClientFactureOptions()->getClFactCountryId())) {
            $aLignesProduit = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('tva')->endUse()->endUse()
                    ->useRPrestationsQuery()->endUse()
                    ->withColumn('fact_prest_montant_facture_final', 'montant')
                    ->select(array('montant', 'RPCodeComptable', 'RPrestations.RPAxe1', 'RPrestations.RPAxe2', 'RPrestations.RPAxe3', 'RPrestations.RPAxe4', 'RPrestations.RPAxe5'))
                    ->where('fact_prest_montant_facture_final!=0')
                    ->find();
        } else {
            $aLignesProduit = FacturesPrestationsQuery::create()
                    ->useRPrestationsQuery()->endUse()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('ttc', Criteria::ALT_NOT_EQUAL)->endUse()->endUse()
                    ->withColumn('fact_prest_montant_facture_final', 'montant')
                    ->select(array('montant', 'RPCodeComptable', 'RPrestations.RPAxe1', 'RPrestations.RPAxe2', 'RPrestations.RPAxe3', 'RPrestations.RPAxe4', 'RPrestations.RPAxe5'))
                    ->where('fact_prest_montant_facture_final!=0')
                    ->find();
        }

        $aLignesAgr = array();
        foreach ($aLignesProduit as $aLigne) {
            if (isset($aLignesAgr[$aLigne['RPCodeComptable']])) {
                $aLignesAgr[$aLigne['RPCodeComptable']]['montant']+=$aLigne['montant'];
            } else {
                $aLignesAgr[$aLigne['RPCodeComptable']]['montant'] = $aLigne['montant'];
            }

            $aLignesAgr[$aLigne['RPCodeComptable']]['RPCodeComptable'] = $aLigne['RPCodeComptable'];
        }



        foreach ($aLignesAgr as $aLigne) {
            $compteGeneral = $aLigne['RPCodeComptable'];

            if (strpos($compteGeneral, '467') !== false) {
                $compteGeneral = '467' . $oFacture->getOperations()->getOpNumber();
                str_pad($compteGeneral, 8 - strlen($compteGeneral), '0');
            }

            $aJournalDeVenteLigne = array();
            $aJournalDeVenteLigne['JdvlType'] = 'g';
            $aJournalDeVenteLigne['JdvlDate'] = $oFacture->getFactDate();
            $aJournalDeVenteLigne['JdvlJournal'] = 'VTE';
            $aJournalDeVenteLigne['JdvlGeneral'] = $compteGeneral;
            $aJournalDeVenteLigne['JdvlMontant'] = $aLigne['montant'];
            $aJournalDeVenteLigne['JdvlReference'] = $oFacture->getFactReference();
            $aJournalDeVenteLigne['JdvlOpId'] = $oFacture->getOperations()->getOpId();
            $aJournalDeVenteLigne['JdvlOrder'] = ++$this->_iNbLignes;
            $aJournalDeVenteLigne['JdvlClient'] = $oFacture->getClients()->getClLibelle();
            $aJournalDeVenteLigne['JdvlDateEcheance'] = $oFacture->getFactDateEcheance();
            ;

            if ($aLigne['montant'] > 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'C';
            }
            if ($aLigne['montant'] < 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'D';
            }

            $this->_oJournalDeVente->addJournalDeVenteLigneRecord($aJournalDeVenteLigne);
        }

        $this->_addLigneCompteAnalytiqueProduit($aLignesProduit, $oFacture);
    }

    protected function _addLigneCompteAnalytiqueProduit($aRows, & $oFacture)
    {

        $aLignesAgr = array();
        foreach ($aRows as $aRow) {
            if (! in_array(substr($aRow['RPCodeComptable'], 0, 1), array('6', '7'))) {
                continue;
            }

            for ($i = 1; $i <= 5; $i++) {
                if (isset($aLignesAgr[$i][$aRow['RPCodeComptable']]['montant'])) {
                    $aLignesAgr[$i][$aRow['RPCodeComptable']]['montant']+=$aRow['montant'];
                } else {
                    $aLignesAgr[$i][$aRow['RPCodeComptable']]['montant'] = $aRow['montant'];
                }
                $aLignesAgr[$i][$aRow['RPCodeComptable']]['RPCodeComptable'] = $aRow['RPCodeComptable'];
                $aLignesAgr[$i][$aRow['RPCodeComptable']]['RPrestations.RPAxe' . $i] = $aRow['RPrestations.RPAxe' . $i];
            }
        }

        foreach ($aLignesAgr as $i => $aLigneAgr) {
            $setJdvlSectionAnalytique = 'JdvlSectionAnalytique' . $i;
            foreach ($aLigneAgr as $aLigne) {
                $aJournalDeVenteLigne = array();
                $aJournalDeVenteLigne['JdvlType'] = 'a' . $i;
                $aJournalDeVenteLigne['JdvlDate'] = $oFacture->getFactDate();
                $aJournalDeVenteLigne['JdvlJournal'] = 'VTE';
                $aJournalDeVenteLigne['JdvlGeneral'] = $aLigne['RPCodeComptable'];
                $aJournalDeVenteLigne['JdvlMontant'] = $aLigne['montant'];
                $aJournalDeVenteLigne['JdvlReference'] = $oFacture->getFactReference();
                $aJournalDeVenteLigne['JdvlOpId'] = $oFacture->getOperations()->getOpId();
                $aJournalDeVenteLigne[$setJdvlSectionAnalytique] = $this->_getAxeCode($i, $aLigne['RPrestations.RPAxe' . $i], $oFacture->getOperations()->getOpActId());
                $aJournalDeVenteLigne['JdvlOrder'] = ++$this->_iNbLignes;
                $aJournalDeVenteLigne['JdvlClient'] = $oFacture->getClients()->getClLibelle();
                $aJournalDeVenteLigne['JdvlDateEcheance'] = $oFacture->getFactDateEcheance();
                ;

                if ($aLigne['montant'] > 0) {
                    $aJournalDeVenteLigne['JdvlSens'] = 'C';
                }
                if ($aLigne['montant'] < 0) {
                    $aJournalDeVenteLigne['JdvlSens'] = 'D';
                }

                $this->_oJournalDeVente->addJournalDeVenteLigneRecord($aJournalDeVenteLigne);
            }
        }
    }

    /**
     *
     * @param Factures $oFacture
     */
    protected function _addLigneCompteGeneral2(Factures $oFacture)
    {

        // compte client
        // 34516 Vérification que l'identifiant du pays correspond à celui de la France
        if (RCountriesQuery::create()->isFranceCountry($oFacture->getOperations()->getClientFactureOptions()->getClFactCountryId())) {
            $montant = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('tva', Criteria::ALT_NOT_EQUAL)->endUse()->endUse()
                    ->withColumn('sum(fact_prest_montant_facture_final*r_tva_coeff)', 'montant')
                    ->select(array('montant'))
                    ->having('sum(fact_prest_montant_facture_final*r_tva_coeff) != 0')
                    ->findOne();
        } else {
            $montant = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('ttc')->endUse()->endUse()
                    ->withColumn('sum(fact_prest_montant_facture_final)', 'montant')
                    ->select(array('montant'))
                    ->having('sum(fact_prest_montant_facture_final) != 0')
                    ->findOne();
        }

        if ($montant != null) {
            $compteGeneral = $this->_oConfig->compte->client->notva;

            $compteAuxiliaire = '';
            if ($oFacture->getClientFactureOptions() != null) {
                $compteAuxiliaire = $oFacture->getClientFactureOptions()->getClFactAdf();
            }

            $aJournalDeVenteLigne = array();
            $aJournalDeVenteLigne['JdvlType'] = 'g';
            $aJournalDeVenteLigne['JdvlDate'] = $oFacture->getFactDate();
            $aJournalDeVenteLigne['JdvlJournal'] = 'VTE';
            $aJournalDeVenteLigne['JdvlGeneral'] = $compteGeneral;
            $aJournalDeVenteLigne['JdvlAuxiliaire'] = $compteAuxiliaire;
            $aJournalDeVenteLigne['JdvlMontant'] = $montant;
            $aJournalDeVenteLigne['JdvlReference'] = $oFacture->getFactReference();
            $aJournalDeVenteLigne['JdvlOpId'] = $oFacture->getOperations()->getOpId();
            $aJournalDeVenteLigne['JdvlOrder'] = ++$this->_iNbLignes;
            $aJournalDeVenteLigne['JdvlClient'] = $oFacture->getClients()->getClLibelle();
            $aJournalDeVenteLigne['JdvlDateEcheance'] = $oFacture->getFactDateEcheance();
            ;

            if ($montant > 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'D';
            }
            if ($montant < 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'C';
            }

            $this->_oJournalDeVente->addJournalDeVenteLigneRecord($aJournalDeVenteLigne);
        }

        // compte produit
        $aLignesProduit = array();
        // 34516 Vérification que l'identifiant du pays correspond à celui de la France
        if (RCountriesQuery::create()->isFranceCountry($oFacture->getOperations()->getClientFactureOptions()->getClFactCountryId())) {
            $aLignesProduit = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('tva', Criteria::ALT_NOT_EQUAL)->endUse()->endUse()
                    ->useRPrestationsQuery()->endUse()
                    ->withColumn('fact_prest_montant_facture_final', 'montant')
                    ->select(array('montant', 'RPCodeComptable', 'RPrestations.RPAxe1', 'RPrestations.RPAxe2', 'RPrestations.RPAxe3', 'RPrestations.RPAxe4', 'RPrestations.RPAxe5'))
                    ->where('fact_prest_montant_facture_final!=0')
                    ->find();
        } else {
            $aLignesProduit = FacturesPrestationsQuery::create()
                    ->useFacturesRubriquesQuery()->filterByFactId($oFacture->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('ttc')->endUse()->endUse()
                    ->useRPrestationsQuery()->endUse()
                    ->withColumn('fact_prest_montant_facture_final', 'montant')
                    ->select(array('montant', 'RPCodeComptable', 'RPrestations.RPAxe1', 'RPrestations.RPAxe2', 'RPrestations.RPAxe3', 'RPrestations.RPAxe4', 'RPrestations.RPAxe5'))
                    ->where('fact_prest_montant_facture_final!=0')
                    ->find();
        }
        $aLignesAgr = array();
        foreach ($aLignesProduit as $aLigne) {
            if (isset($aLignesAgr[$aLigne['RPCodeComptable']])) {
                $aLignesAgr[$aLigne['RPCodeComptable']]['montant']+=$aLigne['montant'];
            } else {
                $aLignesAgr[$aLigne['RPCodeComptable']]['montant'] = $aLigne['montant'];
            }

            $aLignesAgr[$aLigne['RPCodeComptable']]['RPCodeComptable'] = $aLigne['RPCodeComptable'];
        }


        foreach ($aLignesAgr as $aLigne) {
            $compteGeneral = $aLigne['RPCodeComptable'];

            if (strpos($compteGeneral, '467') !== false) {
                $compteGeneral = '467' . $oFacture->getOperations()->getOpNumber();
                str_pad($compteGeneral, 8 - strlen($compteGeneral), '0');
            }

            $aJournalDeVenteLigne = array();
            $aJournalDeVenteLigne['JdvlType'] = 'g';
            $aJournalDeVenteLigne['JdvlDate'] = $oFacture->getFactDate();
            $aJournalDeVenteLigne['JdvlJournal'] = 'VTE';
            $aJournalDeVenteLigne['JdvlGeneral'] = $compteGeneral;
            $aJournalDeVenteLigne['JdvlMontant'] = $aLigne['montant'];
            $aJournalDeVenteLigne['JdvlReference'] = $oFacture->getFactReference();
            $aJournalDeVenteLigne['JdvlOpId'] = $oFacture->getOperations()->getOpId();
            $aJournalDeVenteLigne['JdvlOrder'] = ++$this->_iNbLignes;
            $aJournalDeVenteLigne['JdvlClient'] = $oFacture->getClients()->getClLibelle();
            $aJournalDeVenteLigne['JdvlDateEcheance'] = $oFacture->getFactDateEcheance();
            ;

            if ($aLigne['montant'] > 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'C';
            }
            if ($aLigne['montant'] < 0) {
                $aJournalDeVenteLigne['JdvlSens'] = 'D';
            }

            $this->_oJournalDeVente->addJournalDeVenteLigneRecord($aJournalDeVenteLigne);
        }

        $this->_addLigneCompteAnalytiqueProduit($aLignesProduit, $oFacture);
    }

    /**
     *
     * @param Factures $oFacture
     */
    protected function _addFacture(Factures $oFacture)
    {

        try {
            $this->_addLigneCompteGeneral($oFacture);
            $this->_addLigneCompteGeneral2($oFacture);
            $this->_aFactid[] = $oFacture->getFactId();
        } catch (Exception $e) {
            $this->_aErrors[] = $e->getMessage();
        }
    }

    /**
     * erreurs rencontrées
     * @return array
     */
    public function getErrors()
    {
        return $this->_aErrors;
    }

    /**
     *
     * @return JournalDeVente
     */
    public function getJournalDeVente()
    {
        return $this->_oJournalDeVente;
    }

    /**
     * construction du journal des ventes
     * @throws Exception
     */
    public function process()
    {
        Propel::disableInstancePooling();

        $aFactures = FacturesQuery::create()->filterByFactDate(array('min' => $this->_sDateFactMin))->filterByFactDate(array('max' => $this->_sDateFactMax))
                ->useOperationsQuery()->endUse()->useClientsQuery()->endUse()->filterByJdvId(null)
                ->setFormatter('PropelOnDemandFormatter')
                ->filterByFactStatusId(array(RFactureStatuts::EDITED, RFactureStatuts::ENCAISSE, RFactureStatuts::ENCAISSE_PARTIEL))
                ->with('Clients')
                ->find();

        if (count($aFactures) == 0) {
            throw new Exception('Il n\'y a pas de factures à exporter');
        } else {
            foreach ($aFactures as $i => $oFacture) {
                $this->_addFacture($oFacture);
            }
        }
    }

    /**
     * enregistrement en bdd
     * @return bool enregistrement ou non d'un journal des ventes
     * @throws Exception
     */
    public function commit()
    {

        // sauvegarde du journal de ventes
        if (count($this->_aFactid) > 0) {
            $this->_oJournalDeVente->save();

            $JdvId = $this->_oJournalDeVente->getJdvId();

            // flag des factures
            if (is_integer($JdvId)) {
                FacturesQuery::create()->filterByFactId($this->_aFactid)
                        ->update(array('JdvId' => $this->_oJournalDeVente->getJdvId()));
            } else {
                throw new Exception('Le journal des ventes n\'a pu être généré');
            }
            return true;
        } else {
            return false;
        }
    }
}
