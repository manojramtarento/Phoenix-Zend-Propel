<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_operation_type' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationTypeQuery extends BaseROperationTypeQuery
{

    /**
     * Retrieve data of all operation types to view in select multiple.
     *
     * @return array
     */
    public function retrieveAvailableROperationTypesForSelectList()
    {
        return $this->filterByActif(1)
                        ->withColumn('r_operation_type.ot_id', 'value')
                        ->withColumn('r_operation_type.ot_libelle', 'label')
                        ->select('label')
                        ->orderBy('label', Criteria::ASC)
                        ->find()
                        ->toArray('value', false, Basepeer::TYPE_FIELDNAME);
    }
}

// ROperationTypeQuery
