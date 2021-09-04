<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_languages' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RLanguagesQuery extends BaseRLanguagesQuery
{

    /**
     *
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getRelatedLanguagesByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return $this->distinct()
                        ->addJoin(RLanguagesPeer::R_LANG_CODE, RCulturesPeer::R_CULTURE_LANGUAGE_CODE, Criteria::INNER_JOIN)
                        ->addJoin(RCulturesPeer::R_CULTURE_ID, ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_R_CULTURE_ID, Criteria::INNER_JOIN)
                        ->addCond('cond1', ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_IS_CULTURE_LINKED, 1, Criteria::EQUAL)
                        ->addCond('cond2', ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_TPL_ID, $iTemplateId, Criteria::EQUAL)
                        ->combine(array('cond1', 'cond2'), Criteria::LOGICAL_AND)
                        ->find();
    }
}

// RLanguagesQuery
