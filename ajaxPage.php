<html>
   <head>
      <title>IRB Application</title>
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
      <script type="text/javascript">
         /**
         *callback function for submitForm ajax call
         */
         function submitFormComplete(xhr,status){
         
            if(status!="success"){
               divStatus.innerHTML="error while deleteing a page";
               return;
            }
            divStatus.innerHTML=xhr.responseText;
            
         }
         /**
         *makes an AJAX call to the server
         */
         
         function submitForm(){
                    
         var ProjectTitle=$("#ProjectTitle").val();  
         var principalInvestigator=$("#principalInvestigator").val();  
         var principalInvestigatorDept=$("#principalInvestigatorDept").val();  
         var principalInvestigatorPhone=$("#principalInvestigatorPhone").val();  
         var principalInvestigatorEmail=$("#principalInvestigatorEmail").val();  
         var principalInvestigatorFax=$("#principalInvestigatorFax").val();  
         var externalGrant=$("#xternalGrant").val();  
         var hsrcExemptionhsrcExemption=$("#hsrcExemption").val();  
         var demographicA=$("#demographicA").val();  
         var demographicB=$("#demographicB").val();  
         var demographicC=$("#demographicC").val();  
         var demographicD=$("#demographicD").val(); 
         var demographicF=$("#demographicF").val(); 
         var demographicG=$("#demographicG").val(); 
         var principalInvestigator=$("#principalInvestigator").val(); 
         var principalInvestigator=$("#principalInvestigator").val(); 
         var principalInvestigator=$("#principalInvestigator").val(); 
         var principalInvestigator=$("#principalInvestigator").val(); 
         var Risk=$("#Risk").val(); 
         var RiskYes=$("#RiskYes").val(); 
         var ConfidentialityA=$("#ConfidentialityA").val(); 
         var ConfidentialityB=$("#ConfidentialityB").val(); 
         var ConfidentialityCi=$("#ConfidentialityCi").val(); 
         var ConfidentialityCii=$("#ConfidentialityCii").val(); 
         var ConfidentialityCiii=$("#onfidentialityCiii").val(); 
         var BenefitsA=$("#BenefitsA").val(); 
         var BenefitsB=$("#BenefitsB").val(); 
         var exclusion=$("#exclusion").val(); 
         var extension=$("#extension").val(); 
         
            var ajaxPageUrl="submitFormImplement.php?cmd=1&ProjectTitle="+ProjectTitle+
            "&principalInvestigator="+principalInvestigator
         "&principalInvestigatorDept="+principalInvestigatorDept
         "&principalInvestigatorPhone="+principalInvestigatorPhone
         "&principalInvestigatorEmail="+principalInvestigatorEmail
         "&principalInvestigatorFax="+principalInvestigatorFax
         "&externalGrant="+externalGrant
         "&hsrcExemptionhsrcExemption="+hsrcExemption
         "&demographicA="+demographicA
         "&demographicB="+demographicB
         "&demographicC="+demographicC
         "&demographicD="+demographicD
         "&demographicF="+demographicF
         "&demographicG="+demographicG
         "&principalInvestigator="+principalInvestigator
         "&principalInvestigator="+principalInvestigator
         "&principalInvestigator="+principalInvestigator
         "&principalInvestigator="+principalInvestigator
         "&Risk="+Risk
         "&RiskYes="+RiskYes
         "&ConfidentialityA="+ConfidentialityA
         "&ConfidentialityB="+ConfidentialityB
         "&ConfidentialityCi="+ConfidentialityCi
         "&ConfidentialityCii="+ConfidentialityCii
         "&ConfidentialityCiii="+ConfidentialityCiii
         "&BenefitsA="+BenefitsA
         "&BenefitsB="+BenefitsB
         "&exclusion="+exclusion
         "&extension="+extension
            ;  
         
         
            $.ajax(ajaxPageUrl,
         {async:true,complete:submitFormComplete}  
            );
         }
         var currentObject=null;
         
         
         
         /**
               *Javascript feature for user to fill and submit when completed
               */
               
      </script>
   </head>
   <body>
      <div id="container">
         <div id="header">
            <h1><b>ASHESI UNIVERSITY COLLEGE IRB APPLICATION PORTAL</b> </h1>
         </div>
         <div id="content">
            <b></b>
            <p align="justify"> 
               <b>University Policy on Human Subjects Research</b>
            <p align="justify"> 
               All research, involving human subjects, which is to be conducted by faculty or students from Ashesi University College must be approved by the Human Subjects Review Committee. This committee is the Institutional Review Board (IRB) of Ashesi University. The purpose of this review is to ensure that the research activity is conducted with the safety of the human subject as its highest priority. The criteria for this review are in strict accord with international standards for the protection of human participants in academic research. All research to be conducted by students, faculty, staff, or research affiliates from other institutions must be approved prior to primary data collection or project initiation.
               Human Subjects approval must precede submission of all research applications to any sponsor for funding of the research effort. This applies to funding requests for internal or external resources, domestic and international applications. This policy applies to all applications including those to for-profit, not-for-profit, governmental or charitable organizations.
               The committee will respond to each proposal within four weeks following its review. If the Committee determines that a submission involves vulnerable populations or greater than minimal risk, the applicant will have an opportunity meet with the Committee to address issues of concern. The applicant will have an opportunity to modify the research design, sampling strategies, process or format of data collection, or any other concern that is raised by the Committee. Appeals can be formally addressed by the Provost with the Chair of the Human Subjects Review Committee. If an appeal is approved, the full committee will revisit the proposal and will entertain all concerns of the Principal Investigator. In the event that an appeal is also denied, the proposal must be closed for further consideration unless methodological and ethical issues are adequately addressed in the form of a new submission.
               All submissions must be in digital form. The submission must be approved with signature from the Committee Chair. Submissions are accepted on an ongoing basis.
               All submissions must be made using the Ashesi University Human Subjects Review Form. The form is found on the following pages and is also available at: website. Applications that are incomplete will not be forwarded to the Committee for review. Incomplete applications will be returned to the applicant. Applicants are advised to be mindful of schedules and time requirements for the review process and urged to submit proposals as early as possible.
            <p>
               <b>Request for Human Subjects Approval</b>
            <p>
               <b>________________________________________</b>
            <p align="justify"> 
               <b>General Research Application Form</b>
            <p>
               <b>Use this form for general research only. It is not for health or medical research
               Use this form for initial approvals and protocol modifications. To renew an approval after one year, please use the Continuation Form.
               Submit this completed form and your proposal with all required elements as email attachments to the office of the Provost, Ashesi University College: (irb@ashesi.edu.gh).
               Also, send one hard copy of signed original approval form with a complete copy of your research proposal and all required elements to: Human Subjects Review Committee, Ashesi University, Berekuso, E.R., Ghana.
               </b>
            <p>
               <b>____________________________________________________________________________________</b>
            <p>
               Title of Project: <input type="text" id="ProjectTitle"  maxlength="100"/>
            <p>
              Principal Investigator: <input type="text" name="principalInvestigator" value="<?php echo $principalInvestigator ?>" maxlength="100"/>
                  <p>
                    Co-Principal Investigator(s):<input type="text" name="coprincipalInvestigators" value="<?php echo $coprincipalInvestigators ?>" maxlength="100"/>
                  <p>
                    Principal Investigator Department <input type="text" name="principalInvestigatorDept" value="<?php echo $principalInvestigatorDept ?>" maxlength="100"/>
                  <p>
                    Principal Investigator Phone <input type="text" name="principalInvestigatorPhone" value="<?php echo $principalInvestigatorPhone ?>" maxlength="100"/>
                  <p>
                    Email<input type="text" name="principalInvestigatorEmail" value="<?php echo $principalInvestigatorEmail ?>" maxlength="100"/>
                    Fax <input type="text" name="principalInvestigatorFax" value="<?php echo $principalInvestigatorFax ?>" maxlength="100"/>
                  <p>
                    If an external grant is being sought, or already approved for this project, state the funding source and submission deadline or date of project initiation
                  <p>
                    Grant:<input type="text" name="externalGrant" value="<?php echo $externalGrant ?>" maxlength="100"/>
                  <p>
                    <b>General Instructions</b>
                  <p>
                    This application form must be submitted with the research proposal, consent forms to be used with subjects in the research, questionnaires and vernacular translations if appropriate, and any additional documents that will assist reviewers to fully understand the purposes, methods, and field procedures that will be used. Please complete every section of this application form. If any section is not relevant to your research indicate with “N/A” or write “Not Applicable”.
                    Please do not attempt to squeeze answers into the spaces provided on this form. It is produced in M.S. Word and you can enter text below each question. Be sure to review your application before submission to make certain that it is complete. If it is not complete a decision about the application will be delayed. If you have a question about this application, please email your question to irb@asehsi.edu.gh
                  <p>
                    <b>I. If you are requesting an exemption from Human Subjects Review Committee (HSRC) review,
                    explain the basis for the requested exemption (see attached list of exempt project types):</b>
                  <p>
                    :<input type="text" name="hsrcExemption" value="<?php echo $hsrcExemption ?>" size="100" maxlength="100"/>
                  <p>
                    <b>II. Numbers, Types and Recruitment of Subjects </b>
                  <p>
                    A. Identify the numbers and characteristics of subjects (e.g., age ranges, sex, ethnic background, health status, disabilities, etc.).
                    :<input type="text" name="demographicA" value="<?php echo $demographicA ?>" size="100" maxlength="100"/>
                  <p>
                    B. Special Classes. If applicable, explain the rationale for the use of special classes or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particularly vulnerable.
                  <p> :<input type="text" name="demographicB" value="<?php echo $demographicB ?>" size="100" maxlength="100"/>
                  <p>
                    C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withdraw at any time without negative consequences?
                  <p> :<input type="text" name="demographicC" value="<?php echo $demographicC ?>" size="100" maxlength="100"/>
                  <p>
                    D. To what extent and how are the subjects to be informed of research procedures before their participation?
                  <p>h1:<input type="text" name="demographicD" value="<?php echo $demographicD ?>" size="100" maxlength="100"/>
                  <p>
                    E. Attach a copy of the written "Informed Consent” form or a written statement of the oral consent. If this is produced in vernacular languages please provide a copy in each language being used in field work. The consent form should include the purpose of the research, that the engagement is voluntary, duration of engagement with the subject, risk and benefit, contact information. See template below
                  <p>Upload:<input type="file" name="fileToUpload" id="fileToUpload">
                  <p>
                    F. How will you classify your research method ? (experiment, observation, modeling, etc.) Specify all methods you anticipate to use.
                  <p> :<input type="text" name="demographicF" value="<?php echo $demographicF ?>" size="100" maxlength="100"/>
                  <p>
                    G. Specify the data sources you will use for your research (e.g. questionnaire, audio recording of interview, human resource files, experiment data, etc.)
                  <p> :<input type="text" name="demographicG" value="<?php echo $demographicG ?>" size="100" maxlength="100"/>
                  <p>
                    <b>III. Risks Involved in the Research</b>
                  <p>
                    <b>If your nature of your study is biomedical, public health, or clinical psychological research, then you cannot use this form. Please use the right form.</b>
                  <p>Upload:<input type="file" name="fileToUpload" id="fileToUpload">
                  <p>
                  Identify potential risks for subjects to be involved in this project/research. What procedures will be in place to minimize any risks to subjects?
                  <p><b>Does the research involve any of the following procedures?</b>
                  <p>
                  <div>
                    <input type="checkbox" value="1" name="risk[]" <?php echo (in_array("1", $procedurerows_array) ? 'checked' : ''); ?>> Deception of the participant?
                    <p>
                      <input type="checkbox" value="2" name="risk[]" <?php echo (in_array("2", $procedurerows_array) ? 'checked' : ''); ?>> Punishment of the participant?
                    <p>
                      <input type="checkbox" value="3" name="risk[]" <?php echo (in_array("3", $procedurerows_array) ? 'checked' : ''); ?>> Materials commonly regarded as socially unacceptable
                      such as pornography, inflammatory text, ethnic portrayals?
                    <p>
                      <input type="checkbox" value="4" name="risk[]" <?php echo (in_array("4", $procedurerows_array) ? 'checked' : ''); ?>>Any other procedure that might be considered to be an
                      invasion of privacy?
                    <p>
                      <input type="checkbox" value="5" name="risk[]" <?php echo (in_array("5", $procedurerows_array) ? 'checked' : ''); ?>>Disclosure of the name of individual participants?
                    <p>
                      <input type="checkbox" value="6" name="risk[]" <?php echo (in_array("6", $procedurerows_array) ? 'checked' : ''); ?>>Any other physically invasive procedure?
                    <p>
                  </div>
                  If the answer to any of the above is "Yes,” please explain this procedure in detail and describe procedures for protecting against or minimizing any potential risk.
                  <p>
                  <p> :<input type="text" name="RiskYes" value="<?php echo $RiskYes ?>" size="100" maxlength="100"/>
                  <p>
                    <b>Confidentiality</b>
                  <p>
                    A. To what extent is the information confidential and to what extent are provisions made so that
                    subjects are not identified?
                  <p>
                  <p> :<input type="text" name="ConfidentialityA" value="<?php echo $ConfidentialityA ?>" size="100" maxlength="100"/>
                  <p>
                    B. What are the procedures for handling and storing data so that confidentiality of the subjects
                    and privacy are protected? Particular attention should be given if research data will
                    include the use of photographs, video and audio recordings, computer files, organizational
                    records, medical records, financial records with individual or corporate information)?
                  <p>
                  <p> :<input type="text" name="ConfidentialityB" value="<?php echo $ConfidentialityB ?>" size="100" maxlength="100"/>
                  <p>
                    C. How will the results of the research be disseminated?
                  <p>
                  <p> :<input type="text" name="ConfidentialityCi" value="<?php echo $ConfidentialityCi ?>" size="100" maxlength="100"/>
                  <p>
                    How will the subjects be informed of the results?
                  <p>
                  <p> :<input type="text" name="ConfidentialityCii" value="<?php echo $ConfidentialityCii ?>" size="100" maxlength="100"/>
                  <p>
                    How will confidentiality of subjects or organizations be protected in the dissemination?
                  <p>
                  <p> :<input type="text" name="ConfidentialityCiii" value="<?php echo $ConfidentialityCiii ?>" size="100" maxlength="100"/>
                  <p>
                    <b>V. Describe any anticipated benefits to subjects from participation in this research.</b>
                    A. Will participants/subjects/respondents be compensated or rewarded in any way?
                  <p> :<input type="text" name="BenefitsA" value="<?php echo $BenefitsA ?>" size="100" maxlength="100"/>
                  <p>
                    B. What intrinsic benefits will participants/subjects/respondents receive?
                  <p> :<input type="text" name="BenefitsB" value="<?php echo $BenefitsB ?>" size="100" maxlength="100"/>
                  <p>
                    <b> VI. Submitting Your Protocol – CHECKLIST</b>
                  <p>
                    Attach a full copy of your research proposal (grant, thesis, dissertation proposal, etc.)
                  <p>Upload:<input type="file" name="fileToUpload" id="fileToUpload">
                  <p>
                  <p>
                    In the alternative to full copy of proposal, attach a narrative summary of your proposal
                  <p>Upload:<input type="file" name="fileToUpload" id="fileToUpload">
                  <p>
                    ☐ Regardless of whether or not a full research proposal is available, attach a concise, two-page summary on a separate page that includes:
                  <p>
                     A brief summary of the background literature stimulating this research
                  <p>
                     The rationale for the proposed study, including specific aims and hypotheses
                  <p>
                     A description of the participants and how they will be recruited
                  <p>
                     A detailed description of study methodology
                  <p>
                     Budget and Schedule (timeline) details of your research proposal
                  <p>
                  <p>Upload:<input type="file" name="fileToUpload" id="fileToUpload">
                  <p>
                    <b>NOTE: </b>You may “cut-and-paste” as needed from your full proposal, if available, and the committee may refer to the full proposal for clarification.
                  <p>☐Consent Agreement(s) including description of how informed consent will be obtained--
                  <p>
                    <b>NOTE: </b> Please add the following statement to the final copy of your Informed Consent
                    Agreement:
                  <p>
                    <i> “This research protocol has been reviewed and approved by the Ashesi University Human Subjects Review Committee.
                    If you have questions about the approval process, please contact Chair,
                    Ashesi University HSCR, <b>(chair’s Ashesi e-mail address).</b></i>
                  <p>
                    ☐Copies of all instruments, questionnaires, or tests to be used (if instruments are not fully developed yet, attach drafts, and so indicate).
                  <p>
                    Qualitative discussion categories are provided.
                  <p>
                    ☐ Flyers to be posted on or off campus for participant enlistment (NOTE: These must be stamped with Committee Approval prior to posting)

                  <p>
                    <b>Submit this completed form and your proposal with all required elements as email attachments to (we need a submission e-mail box and a physical mailbox). Also, send one hard copy of signed original approval form with proposal and all required elements to: Ashesi University Human Subjects Review Committee, Office of the Provost, Ashesi University, Berekuso, E.R. Ghana
                    </b>
                  <p>
                    <b>Optional: Use this only if necessary for your project.
                    Rationale for Exclusion of a Required Element:</b>
                    :<input type="text" name="exclusion" value="<?php echo $exclusion ?>" maxlength="100"/>
                  <p>
                    Extension:
                    :<input type="text" name="extension" value="<?php echo $extension ?>" maxlength="100"/>
                  <p>
                    <b>Consent Form Template</b>
                  <p>
                    Note: This template is just a guide. As long as a consent form has all the elements of this template, you are free to design your consent form that fits your research and subject. A consent can be written or verbal, but in both cases a consent from has to be prepared and designed.
                  <p> We/I like to ask your permission to be part of ….
                  <p>
                     The purpose of this study is….
                  <p>
                     Your participation will be ….
                  <p>
                  <p> You are free to be part of this activity, and you are free to stop at any moment during the activity.
                     This risk of being part of this study is….
                  <p>
                     The benefit is ……
                  <p>
                     If you have any question, you can ask…..
                  <p>
                     If you agree to be part of the study, …..
                  <p>
                     For further information, you can contact my supervisor …..
                  <p>
                     This study and consent form has been reviewed by Ashesi IRB for Human Subjects Research. For further information contact the committee through irb@ashesi.edu.gh
                  <p>
                    <b>Exempt Activities</b>
                  <p>
                    Investigators may not determine their own research to be exempt from HSRC review. Exemption decisions are made through the expedited review process.
                  <p>
                    Activities that are not research are exempt from HSRC review. Research is defined as: “A systematic investigation designed to develop or contribute to generalizable knowledge.”
                  <p>Research that does not involve human subjects is also exempt from HSRC review. A human subject is defined as “a living individual about whom an investigator conducting research obtains (1) data through intervention or interaction with the individual, or (2) identifiable private information.”
                  <p>Research activities in which the only involvement of human subjects will be in one or more of the following categories may be determined to be exempt from Ashesi University HSRC review. Requests for exemption must cite the statutory basis for the requested exemption from the categories listed below:
                    I. Research
                  <p>
                    A. Research conducted in established or commonly accepted educational settings, involving normal education practices.
                  <p>B. Research involving the use of educational tests (cognitive, diagnostic, aptitude, achievement), if information taken from these sources is recorded in such a manner that subjects cannot be identified, directly or indirectly, through identifiers linked to the subjects.
                  <p>C. Research involving observation of public behavior or survey or interview procedures for all of the conditions below. This exemption does not apply for research involving children except when the investigator does not participate in activities being observed.
                  <p>(1) The research does not place subjects at the risk of civil or criminal liability or damage the subject's financial standing or employability, AND
                  <p>(2) The research does not deal with sensitive aspects of the subject's own behavior, such as illegal conduct, drug use, sexual behavior or use of alcohol, AND
                  <p>(3) The research does not use materials, procedures or settings likely to be embarrassing, upsetting or intrusive to the subjects, AND
                  <p>(4) The subject cannot be identified and confidentiality is protected
                  <p>D. All research involving survey or interview procedures is exempt, without exception, when the subject is an elected or appointed official or a candidate for public office.
                    13
                  <p>E. Research involving the collection or study of existing data, documents, records, pathological specimens, or diagnostic specimens, if these sources are publicly available or if the information is recorded in such a manner that subjects cannot be identified directly or indirectly through identifiers linked to the subject.
                  <p>II. Program Review
                  <p>A. Government Regulations Exemptions. Research and demonstration projects that are conducted by or subject to the approval of Ghana government department or agency heads, and that are designed to study, evaluate, or otherwise examine 1) public benefit or service programs; 2) procedures for obtaining benefits or services under those programs; 3) possible changes in or alternatives to those programs or procedures; or 4) possible changes in methods or levels of payment for benefits or services under those programs.
                  <p>B. Ashesi Academic Program Review Data. Data collected for the purpose of the evaluation, review, and improvement of Ashesi University academic and extra-curricular programs is exempt from review unless these data are collected: 1) for use beyond program review (e.g. publication), and/or 2) for publication beyond the review process for Ashesi programs administered by Ashesi, by its associated accrediting agencies, and by other related educational bodies. Program Review research proposals that meet the criteria for exemption from review do not need to be sent to the Ashesi HSRC, however, it is advisable to do so as a courtesy and also to provide pre-project approval in case that decisions about external dissemination or publication change during the course of the project.
                  <p>Note: The above exemptions do not apply to research involving venerable groups like prisoners or mentally-ill, institutionalized patients as subjects.
                  <p>
               <!--  <input type="submit" size="90" value="Submit Completed Form"/> -->
               <button value ="Submit"  
                  onclick ="submitForm()">Submit Completed Form</button>
            <p>                                                                                                   .
            <p>
               .         
         </div>
      </div>
      <footer id="footer">
         <div>
            <a class="button" href="#popup1">Save Progress</a>
            <div id="popup1" class="overlay">
               <div class="popup">
                  <h2> Save Succesful</h2>
                  <a class="close" href="#">&times;</a>
               </div>
            </div>
         </div>
         <b>
            <h3>
            Copyright &copy; 2016 ASHESI UNIVERSITY COLLEGE IRB BOARD__________________________________________  
            <h3>
         </b>
      </footer>
   </body>
</html>