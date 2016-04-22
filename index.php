				<html>
						<head>
							<title>IRB Login</title>
							<link rel="stylesheet" href="css/style.css">
							<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
				<script type="text/javascript">
					
					function loginUserComplete(xhr,status){
						if(status!="success"){
							alert("Invalid Username/Password");
							return;
						}
					
						var obj=$.parseJSON(xhr.responseText);

						if(obj.result==1){
						//opens welcome page when the login was successful
						alert(obj.message);
						window.open(welcomepage.php);
						
						}
						else{

						//window.open(index.php);
						alert(obj.message);
						}

						
					}

					//function called in the usersajax ,with the settings etc.
					function loginUser(usnID,pwordID){

						var ajaxPageUrl="usersajax.php?cmd=3&usnID="+usnID.value+"&pwordID="+pwordID.value;
						$.ajax(ajaxPageUrl,
							{
								async:true,
								complete:loginUserComplete
							}
						);
					}
					var currentObject=null;

					
				</script>
						</head>
						<body  >
								<table border="1" align="middle">
								<tr>
									<td colspan="3" >
									<center><img src="ashesi.jpg" alt="Ashesi Logo" align="middle"></center>
										
									</td>
								</tr>
								<tr>
									<td id="links">
									<div class="menuitem">Home</div>
									<div class="menuitem">Focus</div>
									<div class="menuitem">Courseware</div>

								</td>

								<td id= "content">
									

									<div> USERNAME 
									<input type="text" name="username" value="" id='usnID'/>
									</div>


									<div> PASSWORD
									<input type="password" name="password" value="" id='pwordID'/>
									</div>

									<div>
									<button onclick='loginUser(usnID,pwordID)'>Login </button>

									</div>
								
								</td>

									<td id="links">
									<div class="menuitem">Contact us</div>
									<div class="menuitem">Feedback</div>
									<div class="menuitem">About . . .</div>

								</td>

								</tr>

								
								
								</table>





						</body>
					</html>	