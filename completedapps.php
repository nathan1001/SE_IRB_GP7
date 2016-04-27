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
   function submitForm($ProjectTitle,
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
         $extension ){
     $strQuery="insert into completed set
       ProjectTitle='$ProjectTitle',
   
       principalInvestigator='$principalInvestigator',
      coprincipalInvestigators='$coprincipalInvestigators',
    principalInvestigatorDept='$principalInvestigatorDept',
     principalInvestigatorPhone='$principalInvestigatorPhone',
     principalInvestigatorEmail='$principalInvestigatorEmail',
      principalInvestigatorFax='$principalInvestigatorFax',
      externalGrant='$externalGrant',
      hsrcExemption='$hsrcExemption',
      demographicA='$demographicA',
      demographicB='$demographicB',
      demographicC='$demographicC',
      demographicD='$demographicD',
      demographicF='$demographicF',
      demographicG='$demographicG',
      Risk='$Risk',
      RiskYes='$RiskYes',
      ConfidentialityA='$ConfidentialityA',
      ConfidentialityB='$ConfidentialityB',
      ConfidentialityCi='$ConfidentialityCi',
      ConfidentialityCii='$ConfidentialityCii',
      ConfidentialityCiii='$ConfidentialityCiii',
      BenefitsA='$BenefitsA',
      BenefitsB='$BenefitsB',
      exclusion='$exclusion',
      extension='$extension'
   
       ";
       return $this->query($strQuery);    
   }
   }
   ?>