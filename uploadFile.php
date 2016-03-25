

<html>
<body>

<form action="uploadFile.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php
include_once ("projectUsers.php");
	$obj= new projectUsers;

	//$obj->UploadDoc();
	$r = $obj->UploadDoc();

	if ($r=false){
			echo "Error";
		}
		else {
			echo "User added";
		}



?>