<?php
/**
*@author Nathan Yaw Oppong Donkor 
*/
include_once("adb.php");
/**
*@class users
*/
class users extends adb{
	function users(){
	}
	//query to login user
	function loginUser($username,$password){
		$strQuery="select USERNAME,PWORD from users where USERNAME='$username' AND PWORD='$password'";
		$result= $this->query($strQuery);
		return $this->fetch($result);
	}
	
}
?>