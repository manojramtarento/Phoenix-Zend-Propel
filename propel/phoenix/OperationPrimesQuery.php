<?php

/**
 * Skeleton subclass for performing query and update operations on the 'operation_primes' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class OperationPrimesQuery extends BaseOperationPrimesQuery
{

    /**
     *
     * @param type $OpId
     * @param type $numero
     * @return type
     */
    public function findByOpIdAndOpPrimeNumero($OpId, $numero)
    {

        return $this->filterByOpId($OpId)
                        ->filterByOpPrimeNumero($numero)
                        ->findOne();
    }

    /**
     * Gets the countries related to the reward plus the other countries that are not associated
     *
     * @param  integer $iOperationRewardId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getRewardsCountriesNamesByOperationRewardId($iOperationRewardId)
    {
        if (!is_integer($iOperationRewardId)) {
            throw new \InvalidArgumentException('Argument "$iOperationRewardId" expects an integer, "' . (is_object($iOperationRewardId) ? get_class($iOperationRewardId) : gettype($iOperationRewardId)) . '" given');
        }

        $aCountryIds = LnkOperationPrimeRCountriesQuery::create()->select('LnkOperationPrimeRCountryRCountryId')
                ->filterByLnkOperationPrimeRCountryOperationPrimeId($iOperationRewardId)
                ->filterByLnkOperationPrimeRCountryIsCountryLinked(1)
                ->find()
                ->toArray();

        if ($aCountryIds) {
            $sCountriesQuery = 'SELECT r_country_name
            FROM r_countries
            WHERE r_country_id in (' . implode(',', $aCountryIds) . ')
            ORDER BY r_country_name';
            return Propel::getConnection()->query($sCountriesQuery)->fetchAll(PDO::FETCH_COLUMN);
        }
        return array();
    }

    /**
     * Gets the countries related to the reward plus the other countries that are not associated
     *
     * @param  integer $iOperationRewardId
     * @param  integer $iOperationId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getCountriesListHydratedWithOperationRewardsCountries($iOperationRewardId, $iOperationId)
    {

        if (!is_integer($iOperationRewardId)) {
            throw new \InvalidArgumentException('Argument "$iOperationRewardId" expects an integer, "' . (is_object($iOperationRewardId) ? get_class($iOperationRewardId) : gettype($iOperationRewardId)) . '" given');
        }

        if (!is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }

        $aRewardCountryIds = LnkOperationPrimeRCountriesQuery::create()->select('LnkOperationPrimeRCountryRCountryId')
                ->filterByLnkOperationPrimeRCountryOperationPrimeId($iOperationRewardId)
                ->filterByLnkOperationPrimeRCountryIsCountryLinked(1)
                ->find()
                ->toArray();

        $aOperationCountriesIds = LnkOperationCountryQuery::create()->select('LnkOpCountryId')
                ->filterByOpId($iOperationId)
                ->find()
                ->toArray();

        $sSelectCountries = $aRewardCountryIds ? 'case when (r_country_id in (' . implode(',', $aRewardCountryIds) . ')) then 1 else 0 end as is_selected' : '0 as is_selected';
        if ($aOperationCountriesIds) {
            $sCountriesQuery = 'SELECT r_country_id, r_country_name,' . $sSelectCountries . '
            FROM r_countries
            WHERE r_country_id IN (' . implode(', ', $aOperationCountriesIds) . ')
            ORDER BY is_selected DESC, r_country_name';
        } elseif ($aRewardCountryIds) {
            $sCountriesQuery = 'SELECT r_country_id, r_country_name,' . $sSelectCountries . '
            FROM r_countries
            WHERE r_country_id IN (' . implode(', ', $aRewardCountryIds) . ')
            ORDER BY is_selected DESC, r_country_name';
        }

        return isset($sCountriesQuery) ? Propel::getConnection()->query($sCountriesQuery)->fetchAll(PDO::FETCH_ASSOC) : array();
    }

    /**
     * Gets the currencies related to the reward plus the other countries that are not associated
     *
     * @param  integer $iOperationRewardId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getCurrenciesListHydratedWithOperationRewardsCurrencies($iOperationRewardId)
    {

        if (!is_integer($iOperationRewardId)) {
            throw new \InvalidArgumentException('Argument "$iOperationRewardId" expects an integer, "' . (is_object($iOperationRewardId) ? get_class($iOperationRewardId) : gettype($iOperationRewardId)) . '" given');
        }

        $aCountryIds = LnkOperationPrimeRCountriesQuery::create()->select('LnkOperationPrimeRCountryRCountryId')
                ->filterByLnkOperationPrimeRCountryOperationPrimeId($iOperationRewardId)
                ->filterByLnkOperationPrimeRCountryIsCountryLinked(1)
                ->find()
                ->toArray();

        return $this->getCurrenciesListHydratedWithASetOfCountries($aCountryIds);
    }

    /**
     * Gets the currencies related countries plus the other countries that are not associated
     *
     * @param  integer $iOperationId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getCurrenciesListHydratedWithOperationCountriesCurrencies($iOperationId)
    {

        if (!is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }

        $aCountryIds = LnkOperationCountryQuery::create()->select('LnkOpCountryId')
                ->filterByOpId($iOperationId)
                ->find()
                ->toArray();
        return $this->getCurrenciesListHydratedWithASetOfCountries($aCountryIds);
    }

    /**
     *
     * @param array $aCountriesList
     * @return array
     */
    public function getCurrenciesListHydratedWithASetOfCountries(array $aCountriesList)
    {

        if ($aCountriesList) {
            $sImplodedCountries = implode(', ', $aCountriesList);
            $sCurrenciesQuery = '
                 SELECT r_currency_id as value, r_currency_label as label, 1 as rank
                        FROM r_currencies
                        WHERE r_currency_id IN (
                              SELECT DISTINCT(r_country_r_currency_id)
                              FROM r_countries
                              WHERE r_country_id IN (' . $sImplodedCountries . '))
                UNION
                SELECT r_currency_id as value, r_currency_label as label, 2 as rank
                        FROM r_currencies
                        WHERE r_currency_id NOT IN (
                              SELECT r_currency_id
                              FROM r_currencies
                              WHERE r_currency_id IN (
                                    SELECT DISTINCT(r_country_r_currency_id)
                                    FROM r_countries
                                    WHERE r_country_id IN (' . $sImplodedCountries . '))
                              )
                        AND r_currency_actif = 1
            ORDER BY rank, label';
        } else {
            $sCurrenciesQuery = '
                 SELECT r_currency_id as value, r_currency_label as label
                        FROM r_currencies
                        WHERE r_currency_actif = 1
            ORDER BY label';
        }
        return Propel::getConnection()->query($sCurrenciesQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *
     * @param integer $iOperationId
     * @param array $aCountryIds
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function checkIfCountriesAreRelatedToTheOperationRewards($iOperationId, array $aCountryIds)
    {
        if (!is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }
        $sSQLQuery = 'SELECT count(*) FROM operation_primes op
            INNER JOIN lnk_operation_prime_r_countries lopc ON  lopc.lnk_operation_prime_r_country_operation_prime_id = op.op_prime_id
            WHERE op.op_id = :OperationId
            AND lopc.lnk_operation_prime_r_country_r_country_id IN (' . implode(', ', $aCountryIds) . ')';

        $oStatement = Propel::getConnection()->prepare($sSQLQuery);
        $oStatement->bindValue(':OperationId', $iOperationId, PDO::PARAM_INT);
        $oStatement->execute();

        return $oStatement->fetchColumn() > 0;
    }
}

// OperationPrimesQuery
