<?php

	//include users.php
	include_once("projectUsers2.php");
		//check for user code
	   if(isset($_REQUEST['usercode'])){
	   	//create an object of users and delete the user
		$obj = new projectUsers2();

		$result = $obj->searchUsers($_REQUEST['username']);
		
		if ($result){

			$result = $obj->fetch();
			if($_REQUEST['password'] == $result['PASSWORD']){

			//access the page
			}
			else{
				echo "invalid username/password";
				//redirect to homepage
				header("Location :userslist.php");
			}


		}


	   }
	  

?>