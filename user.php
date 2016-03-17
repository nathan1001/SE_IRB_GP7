<?php
//connects to the database
  $mysqli=new mysqli('127.0.0.1','root','9144','test');

//error message displays if connection is unsuccessfull
if($mysqli->connect_errno){
  echo "Error";
  exit();
}

//show all users in a table if no special request is made in the url bar of the web browser
if(!isset($_REQUEST['st'])){
  $result=$mysqli->query("select * from user");
}

/*Shows all users with username that has the characters specified in the url bar of the web browser and lists them.*/
if(isset($_REQUEST['st']))
{
  $getRequest=$_REQUEST['st'];
   $result=$mysqli->query("select * from user where username like '%$getRequest%'");
 }

echo "<table border=1>";
echo "<tr>
  <td bgcolor=blue span style=color:white><b>USERNAME</b></td>
  <td bgcolor=blue span style=color:white><b>FIRSTNAME</b></td>
  <td bgcolor=blue span style=color:white><b>LASTNAME</b></td>
  <td bgcolor=blue span style=color:white><b>USERGROUP</b></td>
  <td bgcolor=blue span style=color:white><b>STATUS</b></td>
  </tr>";
  
  
  $value=$result->fetch_assoc();
  $key=0;
  while ($value!=false) {
    
    if($key%2==0){
      echo "<tr>";
      echo "<td bgcolor=Aqua>  <b>{$value["USERNAME"]}</b></td>";
      echo " <td bgcolor=Aqua>   {$value["FIRSTNAME"]}</td>";
      echo "<td bgcolor=Aqua>   {$value["LASTNAME"]}</td>";
      echo " <td bgcolor=Aqua>   {$value["USERGROUP"]}</td>";
      echo "<td bgcolor=Aqua>   {$value["STATUS"]}</td>";      
      echo "</tr>";
    }
    
 else{
   echo "<tr>";
      echo "<td bgcolor=LightBlue>  <b>{$value["USERNAME"]}</b></td>";
      echo " <td bgcolor=LightBlue   >   {$value["FIRSTNAME"]}</td>";
      echo "<td bgcolor=LightBlue   >   {$value["LASTNAME"]}</td>";
      echo " <td bgcolor=LightBlue>   {$value["USERGROUP"]}</td>";
      echo "<td bgcolor=LightBlue>   {$value["STATUS"]}</td>";
      echo "</tr>";
    }
    
    
    $value=$result->fetch_assoc();
    $key++;
    
  }
  echo "</table>";
  ?>