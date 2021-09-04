<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_countries' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCountriesQuery extends BaseRCountriesQuery
{

    /**
     *
     * @param integer $iOpId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function findWithSelectionForOperation($iOpId)
    {
        if (!is_int($iOpId)) {
            throw new \InvalidArgumentException('Argument "$iOpId" expects an integer, "' . (is_object($iOpId) ? get_class($iOpId) : gettype($iOpId)) . '" given');
        }

        // 34517 r_countr_id est le nouveau identifiant de la table r_countries
        $sCountriesQuery = 'SELECT
                                r_country_id,
                                r_country_name,
                                CASE
                                    WHEN lnk_op_country_id IS NULL THEN 0
                                    ELSE 1
                                END AS is_selected
                            FROM r_countries
                            LEFT JOIN lnk_operation_country ON r_countries.r_country_id = lnk_operation_country.lnk_op_country_id AND op_id = ' . $iOpId . '
                            WHERE r_country_actif = 1 OR lnk_op_country_id IS NOT NULL
                            ORDER BY is_selected DESC, r_country_name';

        $aResult = Propel::getConnection()->query($sCountriesQuery)->fetchAll(PDO::FETCH_ASSOC);
        return $aResult;
    }

    /**
     * Cette fonction retourne la liste des pays qui sont associé à une opération
     *
     * @param  string $sOpid
     * @return array
     */
    public function getOperationRelatedCountries($sOpid)
    {
        // 34417 Récupération du op_lnk_country_id au lieu de r_lang_code
        $sQuery = 'select lnk_op_country_id from lnk_operation_country lop inner join r_countries rc on lop.lnk_op_country_id = rc.r_country_id where op_id = "' . $sOpid . '"';
        return Propel::getConnection()->query($sQuery)->fetchAll(PDO::FETCH_COLUMN);
    }

    /**
     * Cette fonction permet de vérifier si l'id du pays $iCountryId reçu en
     * paramètre corresponds à celui de la France.
     *
     * @param  integer $iCountryId
     * @return boolean
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function isFranceCountry($iCountryId)
    {

        if (!is_integer($iCountryId)) {
            throw new \InvalidArgumentException('The country id expects integer, "' . gettype($iCountryId) . '" given');
        }

        $oCountry = $this->findPk($iCountryId);

        if ($oCountry instanceof Rcountries) {
            return ($oCountry->getRCountryCode() === RCountries::FRANCE_CODE) ? true : false;
        }

        throw new \LogicException('The given country id, "' . $iCountryId . '" doesn\'t match an id for an existing country in r_countries');
    }

    /**
     * Cette fonction retourne l'identifiant du pays France
     *
     * @return integer
     * @throws \LogicException
     */
    public function getFranceCountryId()
    {
        $oCountry = $this->filterByRCountryCode(RCountries::FRANCE_CODE)->findOne();
        if ($oCountry instanceof RCountries) {
            return $oCountry->getRCountryId();
        }
        throw new \LogicException('France country code : "' . RCountries::FRANCE_CODE . '" doesn\'t exist in r_countries');
    }

    /**
     * Gets the countries related to the template plus the other countries that are not associated
     *
     * @param  integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getCountriesListHydratedWithTemplateCountries($iTemplateId)
    {

        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        $sCountriesQuery = 'SELECT
                                r_country_id,
                                r_country_name,
                                CASE
                                    WHEN r_operation_type_sub_tpl_country_r_country_id IS NULL THEN 0
                                    ELSE 1
                                END AS is_selected
                            FROM r_countries
                            LEFT JOIN r_operation_type_sub_tpl_countries ON r_countries.r_country_id = r_operation_type_sub_tpl_countries.r_operation_type_sub_tpl_country_r_country_id
                                            AND r_operation_type_sub_tpl_country_tpl_id = ' . $iTemplateId . '
                                            AND r_operation_type_sub_tpl_country_is_country_linked = 1
                            WHERE r_country_actif = 1 OR r_operation_type_sub_tpl_country_r_country_id IS NOT NULL
                            ORDER BY is_selected DESC, r_country_name';

        return Propel::getConnection()->query($sCountriesQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *
     * @param integer $iRCurrencyId
     * @throws \InvalidArgumentException
     */
    public function getCountriesByRCurrencyId($iRCurrencyId)
    {
        if (!is_integer($iRCurrencyId)) {
            throw new \InvalidArgumentException('Argument "$iRCurrencyId" expects an integer, "' . (is_object($iRCurrencyId) ? get_class($iRCurrencyId) : gettype($iRCurrencyId)) . '" given');
        }
        return $this->select('RCountryId')
                        ->filterByRCountryRCurrencyId($iRCurrencyId)
                        ->find()
                        ->toArray();
    }

    /**
     *
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getRelatedCountriesByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return $this->addJoin(RCountriesPeer::R_COUNTRY_ID, ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, Criteria::INNER_JOIN)
                        ->addCond('cond1', ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED, 1, Criteria::EQUAL)
                        ->addCond('cond2', ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID, $iTemplateId, Criteria::EQUAL)
                        ->combine(array('cond1', 'cond2'), Criteria::LOGICAL_AND)
                        ->find();
    }
}

// RCountriesQuery
