<?php

class LogBehavior extends Behavior
{

    public function objectMethods($oBuilder)
    {
    }

    public function preInsert($oBuilder)
    {

        $oTable=$this->getTable();
        $sScript="";
        if ($oTable->hasColumn('date_create')) {
            $sScript.="
                \$this->set".$this->getTable()->getColumn('date_create')->getPhpName()."(time());
";
        }

        if ($oTable->hasColumn('actif')) {
            $sScript.="
                \$this->set".$this->getTable()->getColumn('actif')->getPhpName()."(1);
";
        }

        if (! in_array($oTable->getName(), array('users','lnk_users_acl_groups','lnk_operation_tasks_users_assign','lnk_operation_tasks_users_notify')) && $oTable->hasColumn('user_id')) {
            $sScript.="
                \$this->set".$this->getTable()->getColumn('user_id')->getPhpName()."(Zend_Auth::getInstance()->getStorage()->read()->getUserId());
";
        }

        return $sScript;
    }

    public function preUpdate($oBuilder)
    {

        $oTable=$this->getTable();
        $sScript="";
        if ($oTable->hasColumn('date_modify')) {
            $sScript.="
                \$this->set".$this->getTable()->getColumn('date_modify')->getPhpName()."(time());
";
        }

        if ($oTable->hasColumn('user_modify')) {
            $sScript.="
                \$this->set".$this->getTable()->getColumn('user_modify')->getPhpName()."(Zend_Auth::getInstance()->getStorage()->read()->getUserId());
";
        }

        return $sScript;
    }

}
