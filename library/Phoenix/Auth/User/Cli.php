<?php

class Phoenix_Auth_User_Cli extends Phoenix_Auth_User_Abstract
{
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->setMail(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_APPLICATION));
    }

    /**
     * Gets groups
     *
     * @return array
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    
    /**
     * Set group if organisation is linked to System group
     * @param string $sOrganisationName
     * @throws \LogicException
     */
    public function setOrganisation(string $sOrganisationName)
    {
        $oAclGroup = AclGroupsQuery::create()->filterByGroupName(AclGroups::GROUP_SYSTEM_NAME)->useOrganisationsQuery()->filterByOrganisationName($sOrganisationName)->endUse()->findOne();
        if ($oAclGroup instanceof AclGroups) {
            $this->setGroups(array($oAclGroup->getGroupId() => $oAclGroup->toArray(\BasePeer::TYPE_FIELDNAME)));
        } else {
            throw new \LogicException('Property "$oAclGroup" expects an instance of AclGroups "' . (is_object($oAclGroup) ? get_class($oAclGroup) : gettype($oAclGroup)) . '" defined');
        }
    }

}
