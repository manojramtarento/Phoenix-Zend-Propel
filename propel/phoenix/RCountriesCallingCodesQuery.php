<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_countries_calling_codes' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCountriesCallingCodesQuery extends BaseRCountriesCallingCodesQuery
{

    /**
     *
     * @return array
     */
    public function getRCountriesCallingCodesWithAssociatedCountryName()
    {
        $sSelectQuery = 'SELECT rccc.r_country_calling_code_id AS value, CONCAT(rccc.r_country_calling_code, \' \', rc.r_country_name) as label
            FROM r_countries_calling_codes rccc
            INNER JOIN r_countries rc ON rccc.r_country_calling_code_id = rc.r_country_r_country_calling_code_id
            WHERE rccc.r_country_calling_code_actif = 1';

        $oStatement = Propel::getConnection()->query($sSelectQuery);
        $oStatement->execute();
        return $oStatement->fetchAll(PDO::FETCH_ASSOC);
    }
}

// RCountriesCallingCodesQuery
