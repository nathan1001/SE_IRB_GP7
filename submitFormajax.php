<?php
	//check command
	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	/*get command*/
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			submitFormNow();		//if cmd=1 the call delete
			break;
		case 2:
			changeUserStatus();	//if cmd=2 the change status
			break;
		case 4:
			viewUser();
			break;
		default:
			echo "wrong cmd";	//change to json message
			break;
	}
	
	function submitFormNow(){
		//check if there is a user code
		if(!isset($_REQUEST['ProjectTitle'])){
			echo " Please be sure to fill in all the required fields. Thank you.";	//change to json message	
			exit();
		}
		  include_once("completedapps.php");
  include_once("submitFunction.php");
  echo"dey job";


$obj= new completedapps();

 $ProjectTitle=$_REQUEST['ProjectTitle'];

		
		//submit the form
		if($obj->submitForm($ProjectTitle)){
			echo "Form submitted success";
		}else{
			echo "form not submitted o.";
		}
	}
	
	
?>