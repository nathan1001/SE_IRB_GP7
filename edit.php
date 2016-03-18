<?php
/**
*/
include_once("adb.php");
include_once("upload.php")
/**
*edit  class
*/
class edit extends adb{
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
