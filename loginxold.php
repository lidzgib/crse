<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <link rel ="stylesheet" href="styles.css">
  <script>

 </head>
 <body>

<?php

include_once "functions.php";

 $loggedin =false;

 if(isset($_POST['uname']) and isset($_POST['pwd'])or isset($_SESSION['level']) ){
 $sql = "select * from users where uname ='".$_POST['uname']."' and password='".$_POST['pwd']."'";
 $result = queryMySQL($sql);

 $rows =  $result->num_rows;
 $row =  $result->fetch_array(MYSQLI_ASSOC);
 $_SESSION['level']= $row['level'];
// echo $_SESSION['level'];
 if($rows>0){
 $loggedin =true;
 }
 }
 

if(!$loggedin){
echo"<div id='login' style='font-size:10 pt; font-family:Calibri,sans-serif; color: #667657;' >";
echo"<form method='post' action='login.php'>";
echo"<table border ='0'>";
echo"<tr align ='right'><td>User name:</td><td><input type='text' name='uname' size= 15 required ></td></tr>";	
echo"<tr align ='right'><td>Password:</td><td><input type='password' name='pwd' size= 15 required></td></tr>";

echo"<tr align ='right'><td></td><td><input type='submit' value ='GO'></td></tr>";
echo"</table>";

echo"</form>";

echo"</div>";
}
/*
else
	 {
   // include_once "header.php";
	include_once "switch.php";

 }*/
 

?>


 </body>
</html>

