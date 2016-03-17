<html>
<head><title>IRB Application</title></head>
<body>
  <b>ASHESI UNIVERSITY</b><p>
 <b>University Policy on Human Subjects Research</b><p>
 All research, involving human subjects, which is to be conducted by faculty or students from Ashesi University College must be approved by the Human Subjects Review Committee. This committee is the Institutional Review Board (IRB) of Ashesi University. The purpose of this review is to ensure that the research activity is conducted with the safety of the human subject as its highest priority. The criteria for this review are in strict accord with international standards for the protection of human participants in academic research. All research to be conducted by students, faculty, staff, or research affiliates from other institutions must be approved prior to primary data collection or project initiation.
Human Subjects approval must precede submission of all research applications to any sponsor for funding of the research effort. This applies to funding requests for internal or external resources, domestic and international applications. This policy applies to all applications including those to for-profit, not-for-profit, governmental or charitable organizations.
The committee will respond to each proposal within four weeks following its review. If the Committee determines that a submission involves vulnerable populations or greater than minimal risk, the applicant will have an opportunity meet with the Committee to address issues of concern. The applicant will have an opportunity to modify the research design, sampling strategies, process or format of data collection, or any other concern that is raised by the Committee. Appeals can be formally addressed by the Provost with the Chair of the Human Subjects Review Committee. If an appeal is approved, the full committee will revisit the proposal and will entertain all concerns of the Principal Investigator. In the event that an appeal is also denied, the proposal must be closed for further consideration unless methodological and ethical issues are adequately addressed in the form of a new submission.
All submissions must be in digital form. The submission must be approved with signature from the Committee Chair. Submissions are accepted on an ongoing basis.
All submissions must be made using the Ashesi University Human Subjects Review Form. The form is found on the following pages and is also available at: website. Applications that are incomplete will not be forwarded to the Committee for review. Incomplete applications will be returned to the applicant. Applicants are advised to be mindful of schedules and time requirements for the review process and urged to submit proposals as early as possible.<p>
  <b>Request for Human Subjects Approval</b><p>



  
<form action="add.php" method="GET">
	Username: <input type="text" name="username" maxlength="10"/>
	UserGroup:<select name="usergroup">
<option value="1">Admin</option>
<option value="2">Faculty</option>
<option value="3">Students</option>
</select>
<input type="submit" value="add"/>

</form>

</body>
</html>
<?php

if(!isset($_REQUEST["username"])){

exit();

}

$username=$_REQUEST["username"];
$usergroup=$_REQUEST["usergroup"];
$db=new mysqli('127.0.0.1','root','9144','test');
if($db->connect_errno){

	exit();
}
else{

	//echo "connected!";
}

$sql="insert into user set 
username='$username',
 FIRSTNAME='none',
        LASTNAME='none',
        PWORD=MD5('none'),
        USERGROUP='$usergroup'";

;

  if($db->query($sql)){
    echo "Data Added";
  }else{
    echo "Error while adding data";
  }
  

?>