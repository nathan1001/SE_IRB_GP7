<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">
		
		function deleteRecordComplete(xhr,status){
			if(status!="success"){
				divStatus.innerHTML="error while deleting a page";
				return;
			}
			divStatus.innerHTML=xhr.responseText;
			return;
			var table=document.getElementById(tableUsers);
			table:deleteRow(1);
		}

		function deleteRecord(recordID){
			var ajaxPageUrl="userajax.php?cmd=1"+recordID;
			$.ajax(ajaxPageUrl,
				{
					async:true,
					complete:deleteRecordComplete
				}
			);
		}
		var currentObject=null;

		function changeUserStatusComplete(xhr,status){
			

		}
		function changeUserStatus(recordID, obj){

		}
	</script>
</head>
<body>
	<div class="status" id="divStatus">Ready</div>
	<table class='reportTable' id="tableUsers">
		<tr class='header'>
			<td>Code</td>
			<td>User Name</td>
			<td>Full Name</td>
			<td>Group</td>
			<td></td>
		</tr>
		<tr class='$style' width='100%'>
			<td>1</td>
			<td>adafla</td>
			<td>Dafla,Aelaf</td>
			<td>Faculty</td>
			<td>
				<span onclick='deleteRecord(1)'>delete</span>
				<span onclick='changeUserStatus(1, this)'>disable</span>
			</td>
	</table>
</body>
</html>