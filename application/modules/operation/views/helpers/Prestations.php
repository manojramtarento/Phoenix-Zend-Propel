<?php

class Operation_View_Helper_Prestations extends Zend_View_Helper_Abstract
{
    /**
     * Initialize an object of Prestations class
     * @return Operation_View_Helper_Prestations
     */
    public function prestations() : Operation_View_Helper_Prestations
    {
        return $this;
    }

    /**
     * Fetch all countries which has has been rewarded to a reward
     * @param int $iOperationRewardId
     * @return array
     */
    
    public function operationRewardsCountries(int $iOperationRewardId) : array
    {
        return OperationPrimesQuery::create()->getRewardsCountriesNamesByOperationRewardId($iOperationRewardId);
    }
}
