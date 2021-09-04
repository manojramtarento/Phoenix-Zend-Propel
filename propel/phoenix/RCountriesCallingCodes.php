<?php

/**
 * Skeleton subclass for representing a row from the 'r_countries_calling_codes' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCountriesCallingCodes extends BaseRCountriesCallingCodes
{

    /**
     * Checks weither the current country code can be safely deleted
     *
     * @return boolean
     */
    public function checkIfRCountryCallingCodeCanBeSafelyDeleted()
    {

        return !(RCountriesQuery::create()
                        ->filterByRCountryRCountryCallingCodeId($this->getRCountryCallingCodeId())->count());
    }
}

// RCountriesCallingCodes
