
	<?php
	include_once ("adb.php");

	class projectUsers2 extends adb {
	/**
	*gets user records based on the filter
	*@param string mixed condition to filter. If  false, then filter will not be applied
	*@return boolean true if successful, else false
	*/
	function getUsers($filter=false){
		$strQuery="select USERCODE,USERNAME,FIRSTNAME,LASTNAME,PERMISSION,users.USERGROUP_ID,STATUS,PERMISSION+0 as NPERMISSION,STATUS+0 as NSTATUS from users left join usergroups on users.USERGROUP_ID=usergroups.USERGROUP_ID";
		if($filter!=false){
			$strQuery=$strQuery . " where USERNAME =  '$filter'";
		}
		return $this->query($strQuery);

	}

	/**
	*Searches for username
	*@param string text search text
	*@return boolean true if successful, else false
	*/
	function searchUsers($username){
		$filter="$username";
		
		return $this->getUsers($filter);
	}
	

	}


	?>