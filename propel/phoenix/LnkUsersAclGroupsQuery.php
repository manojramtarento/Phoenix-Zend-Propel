<?php

/**
 * Skeleton subclass for performing query and update operations on the 'lnk_users_acl_groups' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class LnkUsersAclGroupsQuery extends BaseLnkUsersAclGroupsQuery
{

    /**
     * Return un indexed array of users tHaving the given role id
     * The array is indexed as following : user_id => "user_lastname user_firstname" or "user_id user_firstname" if the user_lastname is missing
     *
     * @param  integer $iRoleId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getUsersHavingRoleByRoleId($iRoleId)
    {
        if (!is_int($iRoleId)) {
            throw new \InvalidArgumentException('Argument "$iRoleId" expects an integer, "' . (is_object($iRoleId) ? get_class($iRoleId) : gettype($iRoleId)) . '" given');
        }
        return self::create()->filterByGroupId($iRoleId)
                        ->useUsersQuery()
                        ->endUse()
                        ->withColumn('CASE WHEN user_nom IS NOT NULL THEN CONCAT(users.user_nom, \' \', user_prenom) ELSE CONCAT(users.user_id, \' \', user_prenom) END', 'label')
                        ->withColumn('users.user_id', 'value')
                        ->select('label')
                        ->orderBy('label', Criteria::ASC)
                        ->find()
                        ->toArray('value', false, Basepeer::TYPE_FIELDNAME);
    }
}

// LnkUsersAclGroupsQuery
