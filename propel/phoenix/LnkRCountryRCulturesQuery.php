<?php

/**
 * Skeleton subclass for performing query and update operations on the 'lnk_r_country_r_cultures' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class LnkRCountryRCulturesQuery extends BaseLnkRCountryRCulturesQuery
{

    /**
     *
     * @param array $aCountriesIds
     * @return PropelObjectCollection
     */
    public function getRelatedCulturesByCountriesId(array $aCountriesIds)
    {
        return $this->filterByLnkRCountryRCultureRCountryId($aCountriesIds)
                        ->select('LnkRcountryRCultureRCultureId')
                        ->useRCulturesQuery()
                        ->filterByRCultureActif(1)
                        ->endUse()
                        ->find();
    }
}

// LnkRCountryRCulturesQuery
