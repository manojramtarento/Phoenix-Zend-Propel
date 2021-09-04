<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_cultures' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RCulturesQuery extends BaseRCulturesQuery
{

    /**
     * Gets the cultures related to the template plus the other cultures that are not associated
     *
     * @param  integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getCulturesListHydratedWithTemplateCultures($iTemplateId)
    {

        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }
        $sCulturesQuery = 'SELECT
                                r_culture_id,
                                r_culture_label,
                                CASE
                                    WHEN r_operation_type_sub_tpl_culture_r_culture_id IS NULL THEN 0
                                    ELSE 1
                                END AS is_selected
                            FROM r_cultures
                            LEFT JOIN r_operation_type_sub_tpl_cultures ON r_cultures.r_culture_id = r_operation_type_sub_tpl_cultures.r_operation_type_sub_tpl_culture_r_culture_id
                                            AND r_operation_type_sub_tpl_culture_tpl_id = ' . $iTemplateId . '
                                            AND r_operation_type_sub_tpl_culture_is_culture_linked = 1
                            WHERE r_culture_actif = 1 OR r_operation_type_sub_tpl_culture_r_culture_id IS NOT NULL
                            ORDER BY is_selected DESC, r_culture_label';

        return Propel::getConnection()->query($sCulturesQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getRelatedCulturesByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return $this->addJoin(RCulturesPeer::R_CULTURE_ID, ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_R_CULTURE_ID, Criteria::INNER_JOIN)
                        ->addCond('cond1', ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_IS_CULTURE_LINKED, 1, Criteria::EQUAL)
                        ->addCond('cond2', ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_TPL_ID, $iTemplateId, Criteria::EQUAL)
                        ->combine(array('cond1', 'cond2'), Criteria::LOGICAL_AND)
                        ->find();
    }
}

// RCulturesQuery
