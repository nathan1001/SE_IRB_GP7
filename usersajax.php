	<?php
	/**
	*@author NAthan YAw Oppong Donkor
	*THis is the page the runs Login function
	*It takes in requests
	*@request cmd

	*/

	$cmd = $_REQUEST['cmd'];
	switch($cmd){
		case 3:
		loginUser();
		break;
		default:
	}
	/**
	*login logs the user via username and password
	*/


		function loginUser(){
		/**
	First, this functions checks for the username
	*/

		if(!isset($_REQUEST['usnID'])){

		echo "username is not given";

		return;
		}
			/**
	First, this checks for the password
	*/
		if(!isset($_REQUEST['pwordID'])){

		echo "please provide password";

		return;
		}
		include("users.php");

		$obj = new users();
		$username = $_REQUEST['usnID'];
		$password = $_REQUEST['pwordID'];
		

			/**
	If the result ends up being true, then the user will successfully be logged in
	*/
		
		
		if ($obj->loginUser($username,$password)){
		echo '{"result":1,"message":"Successful Login"}';
		}
		else{
		echo '{"result":0,"message":"Unsuccessful Login"}';
		}
		}


	?>