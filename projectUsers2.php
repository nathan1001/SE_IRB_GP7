
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
	

mysql_query($query) or die('Error, query failed'); 
include 'library/closedb.php';

echo "<br>File $fileName uploaded<br>";
} 

}


?>