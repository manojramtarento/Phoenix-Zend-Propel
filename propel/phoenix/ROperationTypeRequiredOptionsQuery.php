<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_operation_type_required_options' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationTypeRequiredOptionsQuery extends BaseROperationTypeRequiredOptionsQuery
{

    /**
     * Retrieve list of r_operation_type_id by r_operation_type_id
     *
     * @param  integer $iOperationOptionsId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function retrieveROperationTypesIdByROpOptionId($iOperationOptionsId)
    {
        if (!is_integer($iOperationOptionsId)) {
            throw new \InvalidArgumentException('Argument "$iOperationOptionsId" expects an integer, "' . (is_object($iOperationOptionsId) ? get_class($iOperationOptionsId) : gettype($iOperationOptionsId)) . '" given');
        }
        $aROperationTypeIds = array();

        $oROperationTypeRequiredOptions = $this->filterByROperationTypeRequiredOptionROperationOptionId($iOperationOptionsId)->find();
        foreach ($oROperationTypeRequiredOptions as $oROperationTypeRequiredOption) {
            $aROperationTypeIds[] = $oROperationTypeRequiredOption->getROperationTypeRequiredOptionROperationTypeId();
        }
        return $aROperationTypeIds;
    }

    /**
     * Retrieve list of r_operation_option_id by r_operation_option_id
     *
     * @param  integer $iROperationTypeId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function retrieveOperationOptionsIdByOperationTypeId($iROperationTypeId)
    {
        if (!is_integer($iROperationTypeId)) {
            throw new \InvalidArgumentException('Argument "$iROperationTypeId" expects an integer, "' . (is_object($iROperationTypeId) ? get_class($iROperationTypeId) : gettype($iROperationTypeId)) . '" given');
        }

        $aROperationOptionsIds = array();

        $oROperationTypeRequiredOptions = $this->filterByROperationTypeRequiredOptionROperationTypeId($iROperationTypeId)->find();
        foreach ($oROperationTypeRequiredOptions as $oROperationTypeRequiredOption) {
            $aROperationOptionsIds[] = $oROperationTypeRequiredOption->getROperationTypeRequiredOptionROperationOptionId();
        }
        return $aROperationOptionsIds;
    }

    /**
     * Save operation option required types
     *
     * @param  integer $iROperattionOptionId
     * @param  array $aROperationTypesIds
     * @return type
     * @throws \InvalidArgumentException
     */
    public function saveROperationOptionsRequiredTypes($iROperattionOptionId, array $aROperationTypesIds)
    {
        if (!is_integer($iROperattionOptionId)) {
            throw new \InvalidArgumentException('Argument "$aROperationTypesIds" expects an integer , "' . (is_object($aROperationTypesIds) ? get_class($aROperationTypesIds) : gettype($aROperationTypesIds)) . '" given');
        }

        $aValidationErrors = array();
        foreach ($aROperationTypesIds as $iOperationTypeId) {
            $oROperationTypeRequiredOptions = new \ROperationTypeRequiredOptions();
            $oROperationTypeRequiredOptions->setROperationTypeRequiredOptionROperationOptionId($iROperattionOptionId);
            $oROperationTypeRequiredOptions->setROperationTypeRequiredOptionROperationTypeId($iOperationTypeId);
            if ($oROperationTypeRequiredOptions->validate()) {
                $oROperationTypeRequiredOptions->save();
            } else {
                $aValidationErrors = array_merge($aValidationErrors, $oROperationTypeRequiredOptions->getValidationFailures());
            }
        }
        return $aValidationErrors;
    }
}

// ROperationTypeRequiredOptionsQuery
