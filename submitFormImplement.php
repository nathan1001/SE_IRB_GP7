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
    //create object of completedapps class
    $obj= new completedapps();
    
    $ProjectTitle=$_REQUEST['ProjectTitle'];
    $principalInvestigator=$_REQUEST['principalInvestigator'];
          $coprincipalInvestigators=$_REQUEST['coprincipalInvestigators'];
          $principalInvestigatorDept=$_REQUEST['principalInvestigatorDept'];
          $principalInvestigatorPhone=$_REQUEST['principalInvestigatorPhone'];
          $principalInvestigatorEmail=$_REQUEST['principalInvestigatorEmail'];
          $principalInvestigatorFax=$_REQUEST['principalInvestigatorFax'];
          $externalGrant=$_REQUEST['externalGrant'];
          $hsrcExemption=$_REQUEST['hsrcExemption'];
          $demographicA=$_REQUEST['demographicA'];
          $demographicB=$_REQUEST['demographicB'];
          $demographicC=$_REQUEST['demographicC'];
          $demographicD=$_REQUEST['demographicD'];
          $demographicF=$_REQUEST['demographicF'];
          $demographicG=$_REQUEST['demographicG'];
          $Risk=$_REQUEST['Risk'];
          $RiskYes=$_REQUEST['RiskYes'];
          $ConfidentialityA=$_REQUEST['ConfidentialityA'];
          $ConfidentialityB=$_REQUEST['ConfidentialityB'];
          $ConfidentialityCi=$_REQUEST['ConfidentialityCi'];
          $ConfidentialityCii=$_REQUEST['ConfidentialityCii'];
          $ConfidentialityCiii=$_REQUEST['ConfidentialityCiii'];
          $BenefitsA=$_REQUEST['BenefitsA'];
          $BenefitsB=$_REQUEST['BenefitsB'];
          $exclusion=$_REQUEST['exclusion'];
          $extension=$_REQUEST['extension'];
       
       //submits the form
       if($obj->submitForm($ProjectTitle,
   $principalInvestigator,
          $coprincipalInvestigators,
          $principalInvestigatorDept,
          $principalInvestigatorPhone,
          $principalInvestigatorEmail,
          $principalInvestigatorFax,
          $externalGrant,
          $hsrcExemption,
          $demographicA,
          $demographicB,
          $demographicC,
          $demographicD,
          $demographicF,
          $demographicG,
          $Risk,
          $RiskYes,
          $ConfidentialityA,
          $ConfidentialityB,
          $ConfidentialityCi,
          $ConfidentialityCii,
          $ConfidentialityCiii,
          $BenefitsA,
          $BenefitsB,
          $exclusion,
          $extension )){
          echo "Form submitted success";
       }else{
          echo "form not submitted o.";
       }
    }
    
    
    ?>