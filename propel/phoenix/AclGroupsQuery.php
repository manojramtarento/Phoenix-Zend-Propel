<?php

/**
 * Skeleton subclass for performing query and update operations on the 'acl_groups' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class AclGroupsQuery extends BaseAclGroupsQuery
{

    /**
     *
     * @param \AclGroups $oGroup
     * @param string $sNewGroupName
     * @return  array
     * @throws \InvalidArgumentException
     */
    public function updateGroupName(\AclGroups $oGroup, $sNewGroupName)
    {
        if (! is_string($sNewGroupName)) {
            throw new \InvalidArgumentException('Argument "$sNewGroupName" expects a , "' . (is_object($sNewGroupName) ? get_class($sNewGroupName) : gettype($sNewGroupName)) . '" given');
        }

        $oPropelConnection = Propel::getConnection();
        $sDisableForeignKeyCheck = 'SET FOREIGN_KEY_CHECKS = 0';
        $sEnableForeignKeyCheck = 'SET FOREIGN_KEY_CHECKS = 1';

        $oPropelConnection->prepare($sDisableForeignKeyCheck)
                ->execute();
        try {
            $oGroup->setGroupName($sNewGroupName);
			$oGroup->setGroupOrganisationId(zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId());
            if ($oGroup->validate()) {
                $oGroup->save();
            } else {
                return $oGroup->getValidationFailures();
            }
        } catch (\Exception $oException) {
            $oPropelConnection->prepare($sEnableForeignKeyCheck)
                    ->execute();
            Phoenix_Logger::getInstanceErreur()->handleException($oException);
            $oGroup->addValidationFailed('renaming_group_name_error');
            return $oGroup->getValidationFailures();
        }

        $oPropelConnection->prepare($sEnableForeignKeyCheck)
                ->execute();

        return array();
    }
}

// AclGroupsQuery
