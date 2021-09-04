<?php

class PlanFacturationParams extends BasePlanFacturationParams
{

    /**
     * tigger sur changement de la période de facturation
     */
    private function _triggerPlanFactPerdiodeId()
    {

        // paramêtrage affichage du bilan finacier dans les stats
        if ($this->getPlanFactPeriodeId() == RPlanFactPeriodes::FORFAIT) {
            $this->getOperations()->getOperationsExt()->setOptStatHideBilanFinancier(1)->save();
        }
    }

    /**
     * date par defaut de pemière facture
     * @param type $opId
     * @return type
     */
    public static function getDefaultPlanFactDatePremFact($opId)
    {
        $oOperations = OperationsQuery::create()->findPk($opId);
        $oDateTime = new DateTime($oOperations->getOpStampStart());
        $oDateTime->sub(date_interval_create_from_date_string('1 month'));

        return $oDateTime->format('Y-m-d H:i:s');
    }

    /**
     * date par défaut de dernière facture
     * @param type $opId
     * @return type
     */
    public static function getDefaultPlanFactDateDerFact($opId)
    {
        $oOperations = OperationsQuery::create()->findPk($opId);
        $oDateTime = new DateTime($oOperations->getOpStampEnd());
        $oDateTime->add(date_interval_create_from_date_string('15 days'));

        return $oDateTime->format('Y-m-d H:i:s');
    }

    /**
     * génération du plan de facturation
     */
    public function genPlanFactu()
    {
        $oDatePremFact = new DateTime($this->getPlanFactDatePremFact());
        $oDateDerFact = new DateTime($this->getPlanFactDateDerFact());

        /*
         * genération du tableau des echéances de facturation avec les types de factures attendues
         * selon période et type de facturation choisies
         */
        switch ($this->getPlanFactPeriodeId()) {
            case RPlanFactPeriodes::UNIQUE:

                switch ($this->getPlanFactPeriodeTypeId()) {
                    case RPlanFactPeriodesType::STANDARD:
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_REAL;
                        break;
                    case RPlanFactPeriodesType::PRESTA_REMB:
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_REMB;
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_FF_FV_AFF_REAL;
                        break;
                }
                break;
            case RPlanFactPeriodes::SIMPLIFIEE:

                switch ($this->getPlanFactPeriodeTypeId()) {
                    case RPlanFactPeriodesType::STANDARD:
                        $aEcheanceFact[$this->getPlanFactDatePremFact()][] = RFactureTypes::REAL;
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_REAL;
                        break;
                    case RPlanFactPeriodesType::PRESTA_REMB:
                        $aEcheanceFact[$this->getPlanFactDatePremFact()][] = RFactureTypes::FF_FV_AFF_REAL;
                        $aEcheanceFact[$this->getPlanFactDatePremFact()][] = RFactureTypes::REMB_REAL;
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_FF_FV_AFF_REAL;
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_REMB;
                        break;
                }

                break;

            case RPlanFactPeriodes::PREVI:
                $oMiddleDateFact = $oDatePremFact;
                $oMiddleDateFact->add(date_interval_create_from_date_string('1 month'));

                switch ($this->getPlanFactPeriodeTypeId()) {
                    case RPlanFactPeriodesType::STANDARD:
                        $aEcheanceFact[$this->getPlanFactDatePremFact()][] = RFactureTypes::ESTIM;
                        $aEcheanceFact[$oMiddleDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REAL;
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_REAL;
                        break;
                    case RPlanFactPeriodesType::PRESTA_REMB:
                        $aEcheanceFact[$this->getPlanFactDatePremFact()][] = RFactureTypes::REMB_ESTIM;
                        $aEcheanceFact[$this->getPlanFactDatePremFact()][] = RFactureTypes::FF_FV_AFF_ESTIM;

                        $aEcheanceFact[$oMiddleDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REMB_REAL;
                        $aEcheanceFact[$oMiddleDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::FF_FV_AFF_REAL;

                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_REMB;
                        $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_FF_FV_AFF_REAL;
                        break;
                }

                break;

            case RPlanFactPeriodes::FORFAIT:
                $aEcheanceFact[$this->getPlanFactDatePremFact()][] = RFactureTypes::ESTIM;
                $aEcheanceFact[$this->getPlanFactDateDerFact()][] = RFactureTypes::SOLDE_REAL;

                break;

            default:
                switch ($this->getPlanFactPeriodeId()) {
                    case RPlanFactPeriodes::MENSUELLE:
                        $sFrequence = '1 month';
                        break;
                    case RPlanFactPeriodes::TRIMESTR:
                        $sFrequence = '3 months';
                        break;
                }

                $oDateFact = $oDatePremFact;

                switch ($this->getPlanFactPeriodeTypeId()) {
                    case RPlanFactPeriodesType::STANDARD:
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::ADF;
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REAL;
                        break;
                    case RPlanFactPeriodesType::PRESTA_REMB:
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::ADF;
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::FF_FV_AFF_REAL;
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REMB_REAL;
                        break;
                }

                $oDateFact->add(date_interval_create_from_date_string($sFrequence));

                while ($oDateFact->getTimestamp() < $oDateDerFact->getTimestamp()) {
                    switch ($this->getPlanFactPeriodeTypeId()) {
                        case RPlanFactPeriodesType::STANDARD:
                            $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REAL;
                            break;
                        case RPlanFactPeriodesType::PRESTA_REMB:
                            $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::FF_FV_AFF_REAL;
                            $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REMB_REAL;
                            break;
                    }
                    $oDateFact->add(date_interval_create_from_date_string($sFrequence));
                }

                switch ($this->getPlanFactPeriodeTypeId()) {
                    case RPlanFactPeriodesType::STANDARD:
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REMB_ADF;
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::SOLDE_REAL;
                        break;
                    case RPlanFactPeriodesType::PRESTA_REMB:
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::REMB_ADF;
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::SOLDE_REMB;
                        $aEcheanceFact[$oDateFact->format('Y-m-d H:i:s')][] = RFactureTypes::SOLDE_FF_FV_AFF_REAL;
                        break;
                }
        }

        /**
         * enregistremnt du plan de facturation
         */
        foreach ($aEcheanceFact as $date => $aFactures) {
            foreach ($aFactures as $factureType) {
                $oPlanFacturationDetail = new PlanFacturationDetails();
                $oPlanFacturationDetail->setOpId($this->getOpId());
                $oPlanFacturationDetail->setPfdTauxAdf(100);
                $oPlanFacturationDetail->setPfdTauxPartiel(100);

                $oPlanFacturationDetail->setPfdTypeFactId($factureType);
                $oPlanFacturationDetail->setPfdDatePlanif($date);
                // $oPlanFacturationDetail->setPfdNumCmd($this->getOperations()->getClientFactureOptions()->getClFactBdc());
                if (isset($idPfdAdf) && $factureType == RFactureTypes::REMB_ADF) {
                    $oPlanFacturationDetail->setPfdIdToCancel($idPfdAdf);
                }

                $oPlanFacturationDetail->save();

                // enregistrement annulation pour remboursement adf
                if ($factureType == RFactureTypes::ADF) {
                    $idPfdAdf = $oPlanFacturationDetail->getPfdId();
                }
            }
        }
    }
    /*
     * Cette méthode supprime les factures en status
     * crée et leurs plan de facturation. La méthode est invoqué au préalable
     * de la génération des plan de facturations genPlanFactu. N° 29177.
     * @author Amine JAAOUANI <ajaaouani@neo-data.ma>
     */

    public function cleanBillingPlansAndBills()
    {
        // Récupération des factures dont le statuts est crée
        // La récupération est faite en ordre décroissant pour supprimer les dernières factures d'abord
        $aBillsInCreatedStatus = FacturesQuery::create()->select('FactId')->filterByOpId($this->getOpId())->filterByFactStatusId(RFactureStatuts::CREATED)->filterByFactVerrou(0)->orderByFactId(Criteria::DESC)->find()->toArray();

        if (count($aBillsInCreatedStatus) > 0) {

            foreach ($aBillsInCreatedStatus as $sFactId) {

                $oFacture = FacturesQuery::create()->findPk($sFactId);
                $oFacture->delete();
            }
        }
        // Suppresion des plans de facturation dont aucune facture n'y est associé, en ordre descendant pour que les plans de facturation annulante soient supprimées en premier
        $aBillingPlanDetails = PlanFacturationDetailsQuery::create()->select('PfdId')->filterByOpId($this->getOpId())->filterByPfdFactId(null, Criteria::EQUAL)->orderByPfdId(Criteria::DESC)->find()->toArray();

        if (count($aBillingPlanDetails) > 0) {
            foreach ($aBillingPlanDetails as $sBillingPlanId) {

                $oBillingPlan = PlanFacturationDetailsQuery::create()->findPk($sBillingPlanId);
                $oBillingPlan->delete();
            }
        }
    }

    /**
     *
     * Cette fonction permet de vérifier s'il y'a des factures verouillé, validé ou editée alors que des
     * facture postérieurs sont uniquement en status créé
     * retourne true, si aucune facture n'existe, false sinon
     * @return boolean
     */
    public function checkPredecessorBills()
    {
        // 29177 Récupération de la première facture en statut créé, non verouillé
        $iNumber = 0;
        $sCreatedFactId = FacturesQuery::create()->select('FactId')->filterByOpId($this->getOpId())
                ->filterByFactVerrou(false)
                ->filterByFactStatusId(RFactureStatuts::CREATED)
                ->orderByFactId()
                ->findOne();

        // 29177 Récupération du nombre de facture verouillé, validé ou edité ultérieurement à une facture créé
        if ($sCreatedFactId) {
            $iNumber = FacturesQuery::create()->filterByOpId($this->getOpId())->filterByFactId($sCreatedFactId, criteria::GREATER_THAN)
                    ->condition('blocked', 'Factures.FactVerrou = ?', true)
                    ->condition('validated', 'Factures.FactStatusId= ?', RFactureStatuts::VALIDATED)
                    ->condition('edited', 'Factures.FactStatusId= ?', RFactureStatuts::EDITED)
                    ->combine(array('blocked', 'validated', 'edited'), 'or', 'SearchedFactStatus')
                    ->where(array('SearchedFactStatus'), 'and')
                    ->count();
        }

        if ($iNumber > 0) {
            return false;
        }
        return true;
    }

    /**
     * en registrement des paramêtres
     * @param \PropelPDO $con
     */
    public function save(\PropelPDO $con = null)
    {

        $aModifiedColumns = $this->getModifiedColumns();

        parent::save($con);

        foreach ($aModifiedColumns as $aModifiedColumn) {
            switch ($aModifiedColumn) {
                case 'plan_facturation_params.plan_fact_periode_id':
                    $this->_triggerPlanFactPerdiodeId();
                    break;
            }
        }
    }
}
