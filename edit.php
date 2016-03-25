<?php
/**
*/
include_once("adb.php")
/**
*edit  class
*/
class edit extends adb{
	function edit(){
	}
	/**
	*saves application data into incomplete application table
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
	*@param string informedConsent string value for  informed consent from participants file directory on file server
	*@param string demographicF classification  and specification for research methods
	*@param string demographicG description of data sources used in research
	*@param array Risk potential risks invovled with research
	*@param string RiskYes if any risks are selected applicant describes how to mitigate them
	*@param string ConfidentialityA answer provisions made for confidentiality
	*@param string ConfidentialityB answers data storing and privacy measures for research
	*@param string ConfidentialityCi how research is disseminated
	*@param string ConfidentialityCii how subjects are informed of results
	*@param string ConfidentialityCiii how subjects will be protected
	*@param string BenefitsA description of how subjects will be rewarded
	*@param string BenefitsB description of what benefits 
	*@param string researchProposal the string value of the directory where research proposal or research narrative is stored
	*@param string instruments the string value of the director where research instruments are uploaded
	*@param string flyers the string value for the directory where flyers are uploaded
	*@param string exclusion explaination for why an element should be excluded form the HSRC
	*@param string extension why an extension should be granted to the project
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
						instruments='$instruments',
						flyers='$flyers',
						exclusion='$exclusion',
						extension='$extension';"

		return $this->query($strQuery);				
	}
	/**
	*gets Application data in the incomplete table
	*@param int incompleteID ID for the application saved by user
	*@return boolean returns true if successful or false
	*/
function getIncomplete($incompleteID){
	$strQuery= "select * from incomplete where incompleteID='incompleteID'";
	return $this->query($strQuery);
	}
}