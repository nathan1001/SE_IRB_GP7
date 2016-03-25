<?php
include_once ("adb.php");

class projectUsers extends adb {
	
	
	
	//function users(){
		//check conncetion to database
		//if (!this->connect()){
		//	return false;
		//}
	//}
 

	function uploadDoc(){
		$folder="IRBapplication/";
		print_r($_FILES);
$temp = explode(".", $_FILES["uploaded"]["name"]);
$newfilename = round(microtime(true)).'.'. end($temp);
$db_path ="$folder".$newfilename  ;
$listtype = array(
'.doc'=>'application/msword',
'.docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
'.rtf'=>'application/rtf',
'.pdf'=>'application/pdf'); 

		if ( is_uploaded_file( $_FILES['uploaded']['tmp_name'] ) )
{
if($key = array_search($_FILES['uploaded']['type'],$listtype))
{
	if (move_uploaded_file($_FILES['uploaded']  ['tmp_name'],"$folder".$newfilename))
{
include('connection.php');
$sql ="INSERT INTO tb_upload
(filePath) VALUES ('$db_path')";
}
}
else    
{
echo "File Type Should Be .Docx or .Pdf or .Rtf Or .Doc";
}
		
	}
	
	function uploadReg($name,$size, $type,$content){
		
		$query = "INSERT INTO document set
									NAME= '$name',
									SIZE= '$size',
									TYPE= '$type',
									CONTENT= '$content";
									
		$result= $this->query($query);
		
	}
	/**
	*gets user records based on the filter
	*@param string mixed condition to filter. If  false, then filter will not be applied
	*@return boolean true if successful, else false
	*/
	function getUsers($filter=false){
		$strQuery="select USERCODE,USERNAME,FIRSTNAME,LASTNAME,PERMISSION,users.USERGROUP_ID,STATUS,PERMISSION+0 as NPERMISSION,STATUS+0 as NSTATUS from users left join usergroups on users.USERGROUP_ID=usergroups.USERGROUP_ID";
		if($filter!=false){
			$strQuery=$strQuery . " where USERNAME =  '$filter'";
		}
		return $this->query($strQuery);

	}

	/**
	*Searches for username
	*@param string text search text
	*@return boolean true if successful, else false
	*/
	function searchUsers($username){
		$filter="$username";
		
		return $this->getUsers($filter);
	}
	

mysql_query($query) or die('Error, query failed'); 
include 'library/closedb.php';

echo "<br>File $fileName uploaded<br>";
} 

}


?>

