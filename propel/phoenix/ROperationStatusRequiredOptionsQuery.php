<?php

class ROperationStatusRequiredOptionsQuery extends BaseROperationStatusRequiredOptionsQuery
{
    
    /**
     * Save operation option required status
     *
     * @param  integer $iROperationOptionId
     * @param  array $aROperationStatusIds
     * @return array
     * @throws \InvalidArgumentException 
     */
    public function saveROperationOptionsRequiredStatus(int $iROperationOptionId, array $aROperationStatusIds) : array
    {
        if (!is_integer($iROperationOptionId)) {
            throw new \InvalidArgumentException('Argument "$aROperationStatusIds" expects an integer , "' . (is_object($aROperationStatusIds) ? get_class($aROperationStatusIds) : gettype($aROperationStatusIds)) . '" given');
        }

        $aValidationErrors = array();
        foreach ($aROperationStatusIds as $iOperationStatusId) {
            $oROperationStatusRequiredOptions = new ROperationStatusRequiredOptions();
            $oROperationStatusRequiredOptions->setROperationStatusRequiredOptionsROperationOptionId($iROperationOptionId);
            $oROperationStatusRequiredOptions->setROperationStatusRequiredOptionsROperationStatusOsId($iOperationStatusId);
            if ($oROperationStatusRequiredOptions->validate()) {
                $oROperationStatusRequiredOptions->save();
            } else {
                $aValidationErrors = array_merge($aValidationErrors, $oROperationStatusRequiredOptions->getValidationFailures());
            }
        }
        return $aValidationErrors;
    }
    
    
    /** 
     * Retrieve selected  r_operation_status_required_options_r_operation_status_os_id by   
     * r_operation_status_required_options_r_operation_option_id
     *
     * @param  integer $iOperationOptionsId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function retrieveROperationStatusIdByROpOptionId(int $iOperationOptionsId) : array
    {
  
        if (!is_integer($iOperationOptionsId)) {
            throw new \InvalidArgumentException('Argument "$iOperationOptionsId" expects an integer, "' . (is_object($iOperationOptionsId) ? get_class($iOperationOptionsId) : gettype($iOperationOptionsId)) . '" given');
        }
        $aROperationStatusIds = array();

        $oROperationStatusRequiredOptions = $this->filterByROperationStatusRequiredOptionsROperationOptionId($iOperationOptionsId)->find();
        foreach ($oROperationStatusRequiredOptions as $oROperationStatusRequiredOption) {
            $aROperationStatusIds[] = $oROperationStatusRequiredOption->getROperationStatusRequiredOptionsROperationStatusOsId();
        }
        return $aROperationStatusIds;
    }
    
    
}
