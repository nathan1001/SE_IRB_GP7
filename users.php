<?php
/**
*/
include_once("adb.php");
/**
*Users  class
*/
class users extends adb{
	function users(){
	}
	/**
	*Adds a new user
	*@param string username login name
	*@param string firstname first name
	*@param string lastname last name
	*@param string password login password
	*@param string usergroup group id
	*@param int permission permission as an int
	*@param int status status of the user account
	*@return boolean returns true if successful or false 
	*/
	function addUser($username,$firstname='none',$lastname='none',$password='none',$usergroup=0,$permission=1,$status=1){
		$strQuery="insert into users set
						USERNAME='$username',
						FIRSTNAME='$firstname',
						LASTNAME='$lastname',
						PWORD=MD5('$password'),
						PERMISSION=$permission,
						USERGROUP=$usergroup,
						STATUS=$status";
		return $this->query($strQuery);				
	}
	/**
	*gets user records based on the filter
	*@param string mixed condition to filter. If  false, then filter will not be applied
	*@return boolean true if successful, else false
	*/
	function getUsers($filter=false){
		$strQuery="select USERCODE,USERNAME,FIRSTNAME,LASTNAME,PERMISSION,users.USERGROUP_ID,STATUS,GROUPNAME,PERMISSION+0 as NPERMISSION,STATUS+0 as NSTATUS from users left join usergroups on users.USERGROUP_ID=usergroups.USERGROUP_ID";
		if($filter!=false){
			$strQuery=$strQuery . " where $filter";
		}
		//echo $strQuery;
		return $this->query($strQuery);
	}
	
	/**
	*Searches for user by username, fristname, lastname 
	*@param string text search text
	*@return boolean true if successful, else false
	*/
	function searchUsers($text=false){
		$filter=false;
		if($text!=false){
			$filter=" USERNAME like '$text' or FIRSTNAME like '$text' or LASTNAME like '$text' ";
		}
		
		return $this->getUsers($filter);
	}
	
	/**
	*delete user
	*@param int usercode the user code to be deleted
	*returns true if the user is deleted, else false
	*/
	function deleteUser($usercode){
		/*Compelete the function*/
		
		$strQuery="delete from user where USERCODE = $usercode";
	
				  return $this->query($strQuery);
				
		
	}
	/**
	*Changes the user's status
	*/
	function changeUserStatus($usercode,$status){
		$strQuery="update users set STATUS=$status where USERCODE=$usercode";
		return $this->query($strQuery);
	}
	
	function getUser($usercode){
		$filter=" USERCODE=$usercode ";
		
		if(!$this->getUsers($filter)){
			return false;
		}
		
		return $this->fetch();
		
	}

function changeUserNam($usercode,$username){
		$strQuery="update user set USERNAME='$username' where USERCODE='$usercode'";
		echo $strQuery;
		echo "john";
		return $this->query($strQuery);
	}}

/*
$obj=new users();
$row=$obj->getUser(2);
print_r($row);
*/
?>




