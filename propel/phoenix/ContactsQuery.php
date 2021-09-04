<?php



/**
 * Skeleton subclass for performing query and update operations on the 'contacts' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class ContactsQuery extends BaseContactsQuery {

	/**
	 * retourne les mais de contacts d'une opération pour envoi des stats
	 * @param type $OpId
	 * @param type $ClId
	 * @return type
	 */
	static public function getByOpIdAndClIdWithSendMail($OpId,$ClId){
		$con=ContactsPeer::getConnection();
        
        $sql="select id_lnk_op_contact_mail,ct_id from lnk_operations_contacts_mail where op_id='".$OpId."' and send_mail=1";
        $aCtId=$con->query($sql)->fetchAll(PDO::FETCH_KEY_PAIR);
        
        if(count($aCtId)>0){
            $select=", case when ct_id in (".  implode(',', $aCtId).") then 1 else 0 end  'send_mail'";
        }else{
            $select=",0 'send_mail'";
        }
        
		$sql="SELECT contacts.*".$select."
			FROM contacts 
			WHERE contacts.CL_ID=:CL_ID 
			ORDER BY send_mail DESC, ct_lastname ASC
			";
        
		$stmt=$con->prepare($sql);
		$stmt->bindValue(':CL_ID', $ClId,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
} // ContactsQuery
