<?php
   /**
   *completedapps  class has the submitForm($ProjectTitle) function which helps to submit a completed form by submit the form details into the database
   */
   include_once("adb.php");
   
   class completedapps extends adb{
   function completedapps(){
   }
   /**
    *submits a completed IRB application
    *@param string ProjectTitle login name
    *@return boolean returns true if successful or false 
    */
   function submitForm($ProjectTitle){
     $strQuery="insert into completed set
       ProjectTitle='$ProjectTitle'
       ";
       return $this->query($strQuery);    
   }
   }
   ?>