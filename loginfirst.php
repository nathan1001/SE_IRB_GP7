	<html>
		<head>
			<title>IRB Login Portal</title>
			<link rel="stylesheet" href="css/style.css">
			<script>
				<!--add validation js script here
			</script>
		</head>
		<body>

		<form>
						<div id="divPageMenu">
							<label> USERNAME</label>
							<input type="text" id="username" name="username"/>

									
						</div>
						<div id="divPageMenu">
							<label> PASSWORD</label>
							<input type="text" id="password" name="password"/>

									
						</div>
						<input type="submit" value="login" name="login" >
						</form>
		</body>
	</html>	
		<?php
	include_once("projectUsers2.php");
		//1) Create object of users class
		$obj = new projectUsers();
		//2) Call the object's getUsers method and check for error	
		if(isset($_REQUEST['login']) ) {
				//check for user code
	   if(isset($_REQUEST['usercode'])){
	   	//create an object of users and delete the user
		$obj = new projectUsers();

		$result = $obj->searchUsers($_REQUEST['username']);
		
		if ($result){

			$result = $obj->fetch();
			if($_REQUEST['password'] == $result['PASSWORD']){

			//access the page
			}
			else{
				echo "invalid username/password";
				//redirect to homepage
				return;
			}


		}


	   }
			

		}