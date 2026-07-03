<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Login</title>
 <head> <link rel ="stylesheet" href="styles.css"></head>

 <body>
  <!-- login.php -->
<?php
//require_once 'headeridx.php';
$login=0;
require_once "functions.php";
echo "<div class='main'>";
$error = $user = $pass = "";
if (isset($_POST['user']))
{
//Echo $_POST['user'];
$user = sanitizeString($_POST['user']);
$pass = sanitizeString($_POST['pass']);


$result = queryMySQL("SELECT uid, uname , password, level FROM users 
WHERE uname='$user' AND password ='$pass'");
if ($result->num_rows == 0)
{
$error = "<span class='error'>Username/Password
invalid</span><br><br>";

//Echo $_POST['user']."  ".$pass." ".$error ;
}
else
{
//Echo $_POST['user']." ok";
$lurow = $result->fetch_array(MYSQLI_ASSOC);
$_SESSION['user'] = $user;
$_SESSION['pass'] = $pass;
$_SESSION['lvl']=$lurow['level'];
$_SESSION['uid']=$lurow['uid'];

$login=1;
//include_once "smsadd.php";
///add log data here
//include_once 'addlog.php';
//require_once 'header.php';
//die("You are now logged in. Please <a href='workmenu.php?view=$user'>" .
//"click here</a> to continue.<br><br>");
//die("You are now logged in<br>".
//echo $login;
echo"<button type='button' onclick='displaymenu()' style='cursor: pointer; border-radius:5px;'>GO</button>";
//);

}

}

if($login==0){
echo "<form method='post' action='login.php'>";
echo"<table border ='0' cellpadding ='4'>";
echo "<tr align = 'right'>";
echo"<td id='uni'><span class='afield'>Username <input type='text' maxlength='16' name='user' value='$user' required></span></td>";
echo "</tr>";
echo "<tr align = 'right'>";
ECHO "<td id ='pwi'><span class='afield'>Password <input type='password' maxlength='16' name='pass' value='$pass' required></span></td>";
echo"</tr>";
echo "<tr align = 'right'>";
echo "<td id ='smi' align ='right'><input type='submit' value='Login' name ='goin' style='cursor: pointer; border-radius:5px;'></td><td></td>";
echo"</tr>";
echo "</table>";
}
?>



<script>
function displaymenu(){
 window.open("menumx.html","mfr");
 window.open("space.html","wfr");
}
</script>

</form>
</body>
</html>
