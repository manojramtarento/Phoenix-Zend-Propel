<?php

/**
 * Skeleton subclass for performing query and update operations on the 'clients' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ClientsQuery extends BaseClientsQuery
{

    /**
     * Returns an array of old customer Dcs that are not DC anymore in users table
     *
     * @return array
     */
    public function getOldCustomerDcs()
    {
        return self::create()
                        ->filterByClDcId(null, Criteria::NOT_EQUAL)
                        ->useUserDcQuery()
                        ->filterByRUserTypeId(RUserTypes::KEY_ACCOUNT_MANAGER_USER_TYPE, Criteria::NOT_EQUAL)
                        ->_or()
                        ->filterByRUserTypeId(null, Criteria::EQUAL)
                        ->endUse()
                        ->select('ClDcId')
                        ->distinct()
                        ->find()
                        ->toArray();
    }
}

// ClientsQuery
