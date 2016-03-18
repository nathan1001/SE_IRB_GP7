<?php
  //check for project title
  if (isset($_REQUEST['ProjectTitle'])){
  include_once("completedapps.php");
  $usercode=$_REQUEST['ProjectTitle']; 
  //create an object of completedapps and submits the completed form
  $obj= new completedapps();
  $ProjectTitle=$_REQUEST['ProjectTitle'];
  $result=$obj->submitForm($ProjectTitle);
  if (!$result){
    echo " Error while submitting form. You haven't filled all the required fields. Please do so.";
  }else {
    echo " Form Submitted. Thank you for your submission";
    exit();
  }
}
?>