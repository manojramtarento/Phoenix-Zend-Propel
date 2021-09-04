<?php

class ROperationStatusQuery extends BaseROperationStatusQuery
{


    /**
     * Retrieve data of all operation status to view in select multiple.
     *
     * @return array
     */
    public function retrieveAvailableROperationStatusForSelectList() : array
    {
        return $this->filterByActif(true)
                        ->withColumn('r_operation_status.os_id', 'value')
                        ->withColumn('r_operation_status.os_libelle', 'label')
                        ->select('label')
                        ->orderBy('label', Criteria::ASC)
                        ->find()
                        ->toArray('value', false, Basepeer::TYPE_FIELDNAME);
    }
    
} // ROperationStatusQuery
