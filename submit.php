<html>
<head><title>Form Sample</title></head>
<body>
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