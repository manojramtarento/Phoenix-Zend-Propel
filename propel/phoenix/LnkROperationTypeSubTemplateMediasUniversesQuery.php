<?php

/**
 * Skeleton subclass for performing query and update operations on the 'lnk_r_operation_type_sub_template_medias_universes' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class LnkROperationTypeSubTemplateMediasUniversesQuery extends BaseLnkROperationTypeSubTemplateMediasUniversesQuery
{

    /**
     * Finds one record of LnkROperationTypeSubTemplateMediasUniverses by applying a specefic search algorithm
     *
     * @param  integer $iROperationMecanicId
     * @param  integer $iROperationUniverseId | null
     * @param  integer $iROperationMediaId | null
     * @return \LnkROperationTypeSubTemplateMediasUniverses | null
     * @throws \InvalidArgumentException
     */
    public function findOneRecordByMecanicUniverseAndMedia($iROperationMecanicId, $iROperationUniverseId = null, $iROperationMediaId = null)
    {
        if (!is_integer($iROperationMecanicId)) {
            throw new \InvalidArgumentException('Argument "$iROperationMecanicId" expects an integer, "' . (is_object($iROperationMecanicId) ? get_class($iROperationMecanicId) : gettype($iROperationMecanicId)) . '" given');
        }

        if ($iROperationUniverseId !== null && !is_integer($iROperationUniverseId)) {
            throw new \InvalidArgumentException('Argument "$iROperationUniverseId" expects an integer or null value "' . (is_object($iROperationUniverseId) ? get_class($iROperationUniverseId) : gettype($iROperationUniverseId)) . '" given');
        }

        if ($iROperationMediaId !== null && !is_integer($iROperationMediaId)) {
            throw new \InvalidArgumentException('Argument "$iROperationMedia" expects an integer or null value "' . (is_object($iROperationMediaId) ? get_class($iROperationMediaId) : gettype($iROperationMediaId)) . '" given');
        }

        $oQuery = self::create()->filterByLnkROperationTypeSubTemplateMediaUniverseOstId($iROperationMecanicId);

        if ($iROperationUniverseId) {
            $oQuery->filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId($iROperationUniverseId);
        }
        if ($iROperationMediaId) {
            $oQuery->filterByLnkROperationTypeSubTemplateMediaUniverseMediaId($iROperationMediaId);
        }

        return $oQuery->orderByLnkROperationTypeSubTemplateMediaUniverseId()->findOne();
    }

    /**
     * Validates and saves one LnkROperationTypeSubTemplateMediasUniverses record
     *
     * @param  integer $iROperationMecanicId
     * @param  \ROperationTypeSubTpl $oTemplate
     * @param  integer $iROperationUniverseId
     * @param  integer $iROperationMediaId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function saveOneLnkROperationTypeSubTemplateMediasUniversesRecord($iROperationMecanicId, \ROperationTypeSubTpl $oTemplate, $iROperationUniverseId, $iROperationMediaId)
    {
        if (!is_integer($iROperationMecanicId)) {
            throw new \InvalidArgumentException('Argument "$iROperationMecanicId" expects an integer, "' . (is_object($iROperationMecanicId) ? get_class($iROperationMecanicId) : gettype($iROperationMecanicId)) . '" given');
        }

        if (!is_integer($iROperationUniverseId)) {
            throw new \InvalidArgumentException('Argument "$iROperationUniverse" expects an integer"' . (is_object($iROperationUniverseId) ? get_class($iROperationUniverseId) : gettype($iROperationUniverseId)) . '" given');
        }

        if (!is_integer($iROperationMediaId)) {
            throw new \InvalidArgumentException('Argument "$iROperationMediaId" expects an integer"' . (is_object($iROperationMediaId) ? get_class($iROperationMediaId) : gettype($iROperationMediaId)) . '" given');
        }

        $oLnkROperationTypeSubTemplateMediasUniverses = new LnkROperationTypeSubTemplateMediasUniverses();
        $oLnkROperationTypeSubTemplateMediasUniverses->setLnkROperationTypeSubTemplateMediaUniverseOstId($iROperationMecanicId);
        $oLnkROperationTypeSubTemplateMediasUniverses->setLnkROperationTypeSubTemplateMediaUniverseTplId($oTemplate->getOstTplId());
        $oLnkROperationTypeSubTemplateMediasUniverses->setLnkROperationTypeSubTemplateMediaUniverseUniverseId($iROperationUniverseId);
        $oLnkROperationTypeSubTemplateMediasUniverses->setLnkROperationTypeSubTemplateMediaUniverseMediaId($iROperationMediaId);
        if ($oLnkROperationTypeSubTemplateMediasUniverses->validate()) {
            $oLnkROperationTypeSubTemplateMediasUniverses->save();
            return array('is_successful' => true);
        }
        return array('is_successful' => false, 'errors' => $oLnkROperationTypeSubTemplateMediasUniverses->getValidationFailures());
    }

    /**
     * Deletes one LnkROperationTypeSubTemplateMediasUniverses record
     *
     * @param  integer $iROperationMecanicId
     * @param  integer $iROperationUniverseId
     * @param  integer $iROperationMediaId
     * @return \LnkROperationTypeSubTemplateMediasUniversesQuery
     * @throws \InvalidArgumentException
     */
    public function deleteOneLnkROperationTypeSubTemplateMediasUniversesRecord($iROperationMecanicId, $iROperationUniverseId, $iROperationMediaId)
    {
        if (!is_integer($iROperationMecanicId)) {
            throw new \InvalidArgumentException('Argument "$iROperationMecanicId" expects an integer, "' . (is_object($iROperationMecanicId) ? get_class($iROperationMecanicId) : gettype($iROperationMecanicId)) . '" given');
        }

        if (!is_integer($iROperationUniverseId)) {
            throw new \InvalidArgumentException('Argument "$iROperationUniverse" expects an integer"' . (is_object($iROperationUniverseId) ? get_class($iROperationUniverseId) : gettype($iROperationUniverseId)) . '" given');
        }

        if (!is_integer($iROperationMediaId)) {
            throw new \InvalidArgumentException('Argument "$iROperationMediaId" expects an integer"' . (is_object($iROperationMediaId) ? get_class($iROperationMediaId) : gettype($iROperationMediaId)) . '" given');
        }

        self::create()
                ->filterByLnkROperationTypeSubTemplateMediaUniverseOstId($iROperationMecanicId)
                ->filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId($iROperationUniverseId)
                ->filterByLnkROperationTypeSubTemplateMediaUniverseMediaId($iROperationMediaId)
                ->delete();
        return $this;
    }

    /**
     * Counts the number of records associated to the given template id
     *
     * @param  integer $iTemplateId
     * @return integer
     * @throws \InvalidArgumentException
     */
    public function countNumberOfRecordsLinkedByTplId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return self::create()
                        ->filterByLnkROperationTypeSubTemplateMediaUniverseTplId($iTemplateId)->count();
    }
}
