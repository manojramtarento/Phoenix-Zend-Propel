<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_operation_type_sub_tpl_currencies' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationTypeSubTplCurrenciesQuery extends BaseROperationTypeSubTplCurrenciesQuery
{

    /**
     *
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getRelatedCurrenciesByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return RCurrenciesQuery::create()
                        ->addJoin(RCurrenciesPeer::R_CURRENCY_ID, ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_R_CURRENCY_ID, Criteria::INNER_JOIN)
                        ->addCond('cond1', ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_IS_CURRENCY_LINKED, 1, Criteria::EQUAL)
                        ->addCond('cond2', ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_TPL_ID, $iTemplateId, Criteria::EQUAL)
                        ->combine(array('cond1', 'cond2'), Criteria::LOGICAL_AND)
                        ->find();
    }

    /**
     *
     * @param integer $iTemplateId
     * @return type
     * @throws \InvalidArgumentException
     */
    public function getRelatedCurrenciesByTemplateIdAndByCountriesId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return ROperationTypeSubTplCurrenciesQuery::create()
                        ->select('ROperationTypeSubTplCurrencyRcurrencyId')
                        ->addJoin(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_R_CURRENCY_ID, RCountriesPeer::R_COUNTRY_R_CURRENCY_ID, Criteria::INNER_JOIN)
                        ->addJoin(RCountriesPeer::R_COUNTRY_ID, ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, Criteria::INNER_JOIN)
                        ->addCond('cond1', ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_IS_CURRENCY_LINKED, 1, Criteria::EQUAL)
                        ->addCond('cond2', ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_TPL_ID, $iTemplateId, Criteria::EQUAL)
                        ->combine(array('cond1', 'cond2'), Criteria::LOGICAL_AND)
                        ->find();
    }
}

// ROperationTypeSubTplCurrenciesQuery
