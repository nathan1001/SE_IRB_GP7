<?php
	/**
	*returns a data set of all user groups
	* @return mixed dataset if successful or false
	*/
	include_once("setting.php");
	function getAllUserGroups(){
		//connect
		$db=new mysqli("localhost","root","9144","test");
		if($db->connect_errno){
			//no connection, exit
			return false;
		}
	
		//query
		$strQuery="select USERGROUP_ID,GROUPNAME from usergroups";
		return $db->query($strQuery);
	}
	/**
	*gets a record of one user using user code
	*@return mixed array of data if successful, else false
	*/
	function getUserByCode($usercode){
		$db= new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);;


		if($db->connect_errno){
			return false;
		}
		$result=$db->query("select USERCODE,USERNAME,FIRSTNAME,LASTNAME,PERMISSION,USERGROUP
		 from user where USERCODE=$usercode");
		if($result==false){
			return false;
		}
		
		return $result->fetch_assoc();
	}
	
	/**
	*updates a user record
	* returns mixed number of updated or false
	*/	
	function updateUser($usercode,$username,$firstname,$lastname,$permission,$usergroup){
		$db= new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
		if($db->connect_errno){
			return false;
			//exit();
		}
		$result=$db->query("update user set
						USERNAME='$username',
						FIRSTNAME='$firstname',
						LASTNAME='$lastname',
						PERMISSION='$permission',
						USERGROUP='$usergroup',
						where USERCODE=$usercode");
		return $result;
	}


	
?>