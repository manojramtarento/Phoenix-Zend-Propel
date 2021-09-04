<?php


class ClientFactureOptions extends BaseClientFactureOptions
{
    public function applyRelanceLang()
    {
        $oRelances = RelancesQuery::create()->filterByClId($this->getClId())->find();
        foreach ($oRelances as $oRelance) {
            $oRelance->setRelLang($this->getClFactLang())->save();
        }
    }

    public function save(\PropelPDO $oConnection = null)
    {
        $aModifiedColumns = $this->modifiedColumns;

        parent::save($oConnection);

        // Processing following modification of options
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                // Country verification using r_countries instead of r_languages
                case 'client_facture_options.cl_fact_country_id':
                    $iCountryId = $this->getClFactCountryId();
                    if (! RCountriesQuery::create()->isFranceCountry($iCountryId)) {
                        // Tracking an alert for foreign billing.
                        $oClient = ClientsQuery::create()->findOneByClId($this->getClId());
                        $oRCountry = RCountriesQuery::create()->findPk($iCountryId);
                        Phoenix_MailSender::clientFacturationEtranger($oClient, $oRCountry);
                    }
                    break;
                case 'client_facture_options.cl_fact_lang':
                    $this->applyRelanceLang();
                    break;
            }
        }
    }

    /**
     * Create a new entity of client invoice option from given data
     *
     * @param Clients $oClient
     * @param array $aData
     * @return ClientFactureOptions|array
     */
    public static function createClientInvoiceOptionFromData(Clients $oClient, array $aData)
    {
            // Handle client invoice option data
        if (isset($aData['cl_fact_country_code'])) {
            $oCountry = RCountriesQuery::create()->findOneByRCountryCode($aData['cl_fact_country_code']);
            if (! $oCountry instanceof RCountries) {
                return array(
                    'cl_fact_country_code' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_country_code_not_valid'))
                    ),
                );
            }
            unset($aData['cl_fact_country_code']);
            $aData['cl_fact_country_id'] = $oCountry->getRCountryId();
        }
        if (isset($aData['plan_fact_periode_type_label'])) {
            $oRPlanFactPeriodesType = RPlanFactPeriodesTypeQuery::create()->findOneByRPfptLibelle($aData['plan_fact_periode_type_label']);
            if (! $oRPlanFactPeriodesType instanceof RPlanFactPeriodesType) {
                return array(
                    'plan_fact_periode_type_label' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_plan_fact_periode_type_label_not_valid'))
                    ),
                );
            }
            unset($aData['plan_fact_periode_type_label']);
            $aData['plan_fact_periode_type_id'] = $oRPlanFactPeriodesType->getRPfptId();
        }
        if (isset($aData['cl_fact_echeance_label'])) {
            $oRFactureOptionsEcheances = RFactureOptionsEcheancesQuery::create()->findOneByFactOptEcheanceLibelle($aData['cl_fact_echeance_label']);
            if (! $oRFactureOptionsEcheances instanceof RFactureOptionsEcheances) {
                return array(
                    'cl_fact_echeance_label' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_fact_echeance_label_not_valid'))
                    ),
                );
            }
            unset($aData['cl_fact_echeance_label']);
            $aData['cl_fact_echeance'] = $oRFactureOptionsEcheances->getFactOptEcheanceId();
        }

        $oClientFactureOptions = new ClientFactureOptions();

        $aData['cl_id'] = $oClient->getClId();
        $oClientFactureOptions->fromArray($aData, BasePeer::TYPE_FIELDNAME);

        if ($oClientFactureOptions->validate()) {
            $oClientFactureOptions->save();
            return $oClientFactureOptions;
        }
        return $oClientFactureOptions->getValidationFailures();
    }
}
