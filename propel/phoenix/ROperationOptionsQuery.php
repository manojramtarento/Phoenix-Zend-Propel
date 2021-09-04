<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_operation_options' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationOptionsQuery extends BaseROperationOptionsQuery
{

    /**
     * retourne les identifiants d'options associées à une opération
     *
     * @param  type $opId
     * @return array tableau avec identifiants des otpions
     */
    public function getAvailableOptionsIdByOpId($opId)
    {
        return LnkOperationOptionQuery::create()->filterByOpId($opId)->filterByIsLinked(true)->select(array('OpOptId'))->find()->toArray();
    }

    /**
     *
     * @param type $opId
     * @param type $optionId
     * @param type $isLinked
     */
    public function updateOptionForOperation($opId, $optionId, $isLinked)
    {

        if (LnkOperationOptionQuery::create()->filterByOpId($opId)->filterByOpOptId($optionId)->count() > 0) {
            LnkOperationOptionQuery::create()->filterByOpId($opId)->filterByOpOptId($optionId)->update(array('IsLinked' => $isLinked));
        } else {
            $LnkOperationOption = new LnkOperationOption();
            $LnkOperationOption->setOpId($opId)->setOpOptId($optionId)->setIsLinked($isLinked)->save();
        }
    }

    /**
     * teste si une option est liée à des prestations d'après le template des options->prestations
     */
    public function isOptionLinkedWithPrestation($ROpOptionId)
    {
        return (ROperationOptionsTplQuery::create()->filterByROptId($ROpOptionId)->count() > 0 );
    }

    /**
     * Retrieve detached operation options
     *
     * @return \PropelCollection
     */
    public function retrieveDetachedOperationOptions()
    {
        return $this->filterByROperationOptionRActivityKpiId(null)->filterByROpOptionParent(null)->orderByROpOptionOrder()->find();
    }

    /**
     * Counts detached operation options
     *
     * @return integer
     */
    public function countDetachedOperationOptions()
    {
        return $this->filterByROperationOptionRActivityKpiId(null)->filterByROpOptionParent(null)->filterByActif(1)->orderByROpOptionOrder()->count();
    }
}

// ROperationOptionsQuery
