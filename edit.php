<?php
/**
*/
include_once("projectuser2.php")
/**
*edit  class
*/
class edit extends projectuser2{
	function edit(){
	}
	/**
	*edits a saved application
	*@param string projectTitle project name
	*@param string principalInvestigator applicant name
	*@param string coprincipalInvestigators colleague(s) name
	*@param string principalInvestigatorDept applicant's department
	*@param int principalInvestigatorPhone applicant's phone
	*@param string principalInvestigatorEmail applicant's email
	*@param int principalInvestigatorFax applicant's fax
	*@param string externalGrant  information on external grant if sought
	*@param string hsrcExemption reasons project should be excluded from HSRC
	*@param string demographicA the numbers and characteristics of subjects (e.g., age ranges, sex, ethnic background, health status, disabilities, etc.)
	*@param string demographicB special classes for participants
	*@param string demographicD how informed the participants are
	*@param BLOB informedConsent informed consent from participants
	*@param string demographicF classification  and specification for research methods
	*@param string demographicG description of data sources used in research
	*@param array
	*@return boolean returns true if successful or false 
	*/
	function save($projectTitle,$principalInvestigator='none',$coprincipalInvestigators='none',$principalInvestigatorDept='none',$principalInvestigatorPhone,$principalInvestigatorEmail,$principalInvestigatorFax,$externalGrant,$hsrcExemption,$demographicA,$demographicB,$demographicC,$demographicD,$informedConsent,$demographicF,$demographicG,$Risk,$RiskYes,$ConfidentialityA,$ConfidentialityB,$ConfidentialityCi,$ConfidentialityCii,$ConfidentialityCiii,$BenefitsA,$BenefitsB,$reserachProposal,$researchProposalNo,$summary,$consentAgreements,$instruments,$flyers,$exclusion,$extension){
		$strQuery="insert into incomplete set
						projectTitle='$projectTitle',
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
						informedConsent='$informedConsent',
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
						reserachProposal='$reserachProposal',
						researchProposalNo='$researchProposalNo',
						summary='$summary',
						consentAgreements='$consentAgreements',
						instruments='$instruments',
						flyers='$flyers',
						exclusion='$exclusion',
						extension='$extension';"

		return $this->query($strQuery);				
	}
}
function openApplication($incompleteID){
	$strQuery= "select * from incomplete where incompleteID='incompleteID'";
	return $this->query($strQuery);
	}
}