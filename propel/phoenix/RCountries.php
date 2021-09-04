<?php

/**
 * Skeleton subclass for representing a row from the 'r_countries' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCountries extends BaseRCountries
{

    const FRANCE_CODE = 'FRA';

    /**
     * @return array
     */
    public function getAssociatedRCulturesId()
    {
        $aRCulturesId = array();

        foreach ($this->getLnkRCountryRCulturess() as $oLnkRCountryRCulture) {
            $aRCulturesId[] = $oLnkRCountryRCulture->getLnkRCountryRCultureRCultureId();
        }
        return $aRCulturesId;
    }

    /**
     * @return boolean
     */
    public function checkIfRCountryCanBeSafelyDeleted()
    {
        return !(
                $this->getClientFactureOptionss()->count() || $this->getLnkOperationCountrys()->count() || $this->getLnkOperationPrimeRCountriess()->count() || $this->getLnkRCountryRCulturess()->count() || $this->getROperationTypeSubTplCountriess()->count()
                );
    }
}

// RCountries
