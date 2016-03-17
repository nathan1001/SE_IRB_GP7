<?php
//Asante Kobby Emmanuel Annor
  //connects to the database
  $mysqli=new mysqli('localhost','ashesics_aea4740','w1c6g2mec593','ashesics_emmanuel_annor');

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

/*sort=1’ then it should sort the users in
 ascending order. If sort=2, then it should sort the users in descending order*/
else if(isset($_REQUEST['sort']))
{
  $getRequest=$_REQUEST['sort'];
  
  //Shows all usernames  sorted in ascending order
  if($getRequest==1){
    echo " Displaying usernames in ascending order";
    $result=$mysqli->query("select * from user order by username ASC");
  }
  
  //Shows all usernames  sorted in descending order
  else if($getRequest==2)
  {
    echo " Displaying usernames in desscending order";
    $result=$mysqli->query("select * from user order by username DESC");
  }
  //shows the following message to help the user if sort is neither=1 nor =2
  else{
    echo " Use either sort=1 to sort usernames in ascending order or sort=2 to sort usernames in descending order";
    exit();
    
  }
}
//Shows all usernames  belonging to a particular group 
else if(isset($_REQUEST['group']))
{
  $getRequest=$_REQUEST['group'];
  if($getRequest==$_REQUEST['group']){
    echo " Displaying users in group $getRequest";
    $result=$mysqli->query("select * from user where USERGROUP=$getRequest");
  }
  
}

//displays the data in a formatted table 
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
    
    //helps the rows to have alternate backgroup
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