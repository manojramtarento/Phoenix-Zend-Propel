<?php

/**
 * Skeleton subclass for performing query and update operations on the 'lnk_operation_option' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class LnkOperationOptionQuery extends BaseLnkOperationOptionQuery
{

    /**
     * This function return a record of lnk_operation_option that correspond to a given operation_id and a given option_id
     * @param string $sOpId
     * @param string $sOption_id
     * @return array
     */
    public function findLinkWithOperationIdAndOptionId($sOpId, $sOption_id)
    {

        $sQuery = "select lnk_op_opt_id as lnk_op_opt_id, is_linked as is_linked from lnk_operation_option where op_id = " . $sOpId . " and op_opt_id = " . $sOption_id;
        return Propel::getConnection()->query($sQuery)->fetchAll(PDO::FETCH_ASSOC);
    }
}

// LnkOperationOptionQuery


    