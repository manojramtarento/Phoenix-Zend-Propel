<?php

/**
 * Skeleton subclass for representing a row from the 'r_cultures' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCultures extends BaseRCultures
{

    /**
     * Checks weither the current culture can be safely deleted
     *
     * @return boolean
     */
    public function checkIfRCultureCanBeSafelyDeleted()
    {
        return !($this->getLnkRCountryRCulturess()->count() + $this->getROperationTypeSubTplCulturess()->count());
    }
}

// RCultures
