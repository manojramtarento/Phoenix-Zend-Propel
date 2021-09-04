<?php

/**
 * Skeleton subclass for representing a row from the 'r_currencies' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCurrencies extends BaseRCurrencies
{

    /**
     * Checks weither the current currency can be safely deleted
     *
     * @return boolean
     */
    public function checkIfRCurrencyCanBeSafelyDeleted()
    {

        $iCurrentCurrencyId = $this->getRCurrencyId();
        return !(RCountriesQuery::create()->filterByRCountryRCurrencyId($iCurrentCurrencyId)->count() || OperationPrimesQuery::create()->filterByOperationPrimeCurrencyId($iCurrentCurrencyId)->count());
    }
}

// RCurrencies
