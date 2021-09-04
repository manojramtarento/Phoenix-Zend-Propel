<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_currencies' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCurrenciesQuery extends BaseRCurrenciesQuery
{

    /**
     * Gets the currencies related to the template plus the other currencies that are not associated
     *
     * @param  integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getCurrenciesListHydratedWithTemplateCurrencies($iTemplateId)
    {

        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        $aCurrenciesIds = ROperationTypeSubTplCurrenciesQuery::create()->select('ROperationTypeSubTplCurrencyRCurrencyId')
                ->filterByROperationTypeSubTplCurrencyIsCurrencyLinked(1)
                ->filterByROperationTypeSubTplCurrencyTplId($iTemplateId)
                ->find()
                ->toArray();


        if (count($aCurrenciesIds) > 0) {
            $sSelectCurrencies = 'case when (r_currency_id in (' . implode(',', $aCurrenciesIds) . ')) then 1 else 0 end as is_selected';
        } else {
            $sSelectCurrencies = '0 as is_selected';
        }

        $sCurrenciesQuery = 'SELECT r_currency_id, r_currency_label,' . $sSelectCurrencies . '
            FROM r_currencies
            WHERE r_currency_actif = 1
            ORDER BY is_selected DESC, r_currency_label';

        return Propel::getConnection()->query($sCurrenciesQuery)->fetchAll(PDO::FETCH_ASSOC);
    }
}

// RCurrenciesQuery
