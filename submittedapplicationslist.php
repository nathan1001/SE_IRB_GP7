<html>
	<head>
		<title>Add New User</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			<!--add validation js script here
		</script>
	</head>
	<body>
		<table>
			<tr>
				<td colspan="2" id="pageheader">
					Application Header
				</td>
			</tr>
			<tr>
				<td id="mainnav">
					<div class="menuitem">menu 1</div>
					<div class="menuitem">menu 2</div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<input type="text" id="txtSearch" />
						<span class="menuitem">search</span>		
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Content space
					<form action="" method="GET">
						<input type="text" name="txtSearch">
						<input type="submit" value="search" >		
					</form>		
<?php

	//1) Create object of users class
	include_once("users.php");
	$obj=new users();
	
	//2) Call the object's getUsers method and check for error
if (isset($_REQUEST['txtSearch'])){
		$result=$obj->searchUsers($_REQUEST['txtSearch']);
	}else {
		$result=$obj->getUsers();
	}

	
	if (!$result){
		echo "Error retrieving information";
	}
		

	
	
	//3) show the result
	echo "<table border=1 >";
	echo "<tr><td>USERCODE</td><td>USERNAME</td><td>FIRSTNAME</td><td>LASTNAME</td>
	<td>PERMISSION</td><td>USERGROUP</td><td>GROUPNAME</td><td>STATUS</td></tr>";
	while($row=$obj->fetch()){
 $usercode=$row['USERCODE'];
		 $username=$row['USERNAME'];
		 $status=$row['STATUS'];
		echo "<tr>
		<td>{$row['USERCODE']}</td>
		<td>{$row['USERNAME']}</td>
		<td>{$row['FIRSTNAME']}</td>
		<td>{$row['LASTNAME']}</td>
		<td>{$row['PERMISSION']}</td>
		<td>{$row['USERGROUP']}</td>
		<td>{$row['GROUPNAME']}</td>
		<td><a href=usersdelete.php?status=$status&usercode=$usercode>{$row['STATUS']}</a></td>
		<td><a href=usersdelete.php?uc=$usercode>delete</a></td>
		<td><a href=usersedit.php?user=$usercode>Edit</a></td>
		</tr>";

 	}
	
?>						
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	
