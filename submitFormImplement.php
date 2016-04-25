<?php
  /**@author Asante Kobby Emmanuel Annor
   *submitFormImplemnt  class calls the submitFormNow() function which helps to submit a completed form by creating an object of the completedapps class and calling a function from that class. 
   */

   //check command
   if(!isset($_REQUEST['cmd'])){
      echo "cmd is not provided";
      exit();
   }
   /*gets command*/
   $cmd=$_REQUEST['cmd'];
   switch($cmd){
      case 1:
         submitFormNow();//if cmd=1 the call submitFormNow()
         break;
   
      default:
         echo "wrong cmd"; //change to json message
         break;
   }
   
   /**
   *submitFormNow function for submitForm ajax call
   */
   function submitFormNow(){
      //check if there is a ProjectTitle
      if(!isset($_REQUEST['ProjectTitle'])){
         echo " Please be sure to fill in all the required fields. Thank you.";  //change to json message   
         exit();
      }
        include_once("completedapps.php");
    include_once("submitFunction.php");
    echo"dey job";
   
   //create object of completedapps class
   $obj= new completedapps();
   
   $ProjectTitle=$_REQUEST['ProjectTitle'];
   
      
      //submits the form
      if($obj->submitForm($ProjectTitle)){
         echo "Form submitted success";
      }else{
         echo "form not submitted o.";
      }
   }
   
   
   ?>