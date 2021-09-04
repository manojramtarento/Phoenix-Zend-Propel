<?php


class UtilsBehavior extends Behavior
{

    public function staticMethods($oBuilder)
    {
        $sScript=$this->addPeerGetConnection();
        return $sScript;
    }


    public function addPeerGetConnection()
    {

        $sScript="
		/**
		* Return connection object
		* @return PropelPDO
		*/
		public static function getConnection(){
			return Propel::getConnection(self::DATABASE_NAME);
		}";
        return $sScript;
    }

    public function objectMethods($oBuilder)
    {
        $sScript=$this->addGetConnection();
        return $sScript;
    }


    public function addGetConnection()
    {
        $oTable = $this->getTable();
        $sPeerName=$oTable->getPhpName()."Peer";

        $sScript='
		/**
		* Return connection object
		* @return PropelPDO
		*/
		public function getConnection(){
			return Base'.$sPeerName.'::getConnection();
		}';
        return $sScript;
    }


}
