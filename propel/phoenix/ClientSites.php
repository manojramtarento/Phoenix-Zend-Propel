<?php

class ClientSites extends BaseClientSites
{

    /**
     * Retrieves the country name of the client site from the table r_countries
     * @return string|null
     */
    public function getClSiteCountry()
    {
        if (($oRCountries = RCountriesQuery::create()->findPk($this->getClSiteCountryId())) instanceof Rcountries) {
            return $oRCountries->getRCountryName();
        }
    }

    public function delete(\PropelPDO $oConnection = null)
    {
        // Site dereferencing
        OperationsQuery::create()->filterByClSiteIdForLog($this->getClSiteId())->update(array('ClSiteIdForLog' => null));
        ContactsQuery::create()->filterByClSiteId($this->getClSiteId())->update(array('ClSiteId' => null));
        // Calculation of data deletion order adjustment to prevent violation of foreign key constraint.
        parent::delete($oConnection);
    }


    /**
     * Create a new entity of client site from given data
     *
     * @param Clients $oClient
     * @param array $aData
     * @return ClientSites|array
     */
    public static function createClientSiteFromData(Clients $oClient, array $aData)
    {
        if (isset($aData['cl_site_country_code'])) {
            $oCountry = RCountriesQuery::create()->findOneByRCountryCode($aData['cl_site_country_code']);
            if (! $oCountry instanceof RCountries) {
                return array(
                    'cl_site_country_code' => array(
                        sprintf(Zend_Registry::get('Zend_Translate')->translate('error_country_code_not_valid'))
                    ),
                );
            }
            unset($aData['cl_site_country_code']);
            $aData['cl_site_country_id'] = $oCountry->getRCountryId();
        }

        $oClientSites = new ClientSites;
        $oClientSites->fromArray($aData, BasePeer::TYPE_FIELDNAME);
        $oClientSites->setClId($oClient->getClId());
        if ($oClientSites->validate()) {
            $oClientSites->save();
            return $oClientSites;
        }
        return $oClientSites->getValidationFailures();
    }
}
