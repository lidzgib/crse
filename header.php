<!doctype html>
<html lang="en">
 <head>
<body>
  <?php
session_start();
//echo "<!DOCTYPE html>\n<html><head>";
echo"<link rel = 'stylesheet' href ='styles.css'>";
require_once 'functions.php';
$userstr = '[User]';
$_SESSION['sem']="";
$_SESSION['yr']="";

if (isset($_SESSION['user']))
{
$user = $_SESSION['user'];
$level = $_SESSION['lvl'];
$loggedin = TRUE;
$userstr = "$user";
$sqlasperiod = "select * from aperiod"; //get current assement period
$aprdrslt = queryMySQL($sqlasperiod);
$apr = $aprdrslt->fetch_array(MYSQLI_ASSOC);
$_SESSION['apcode'] =$apr['apcode']; 
$_SESSION['yr']= $apr['yr']; 
$_SESSION['sem'] =$apr['sem']; 
}
else{ $loggedin = FALSE;  include_once 'headall.php';}

include_once 'headall.php';


if ($loggedin)
{
	switch($level)
	{
		case 4:
	/*echo "<div id ='maincontainer'>";
	echo"<CENTER><ul class='menuax'><li><a href='maindispay.html'>Home</a></li>
	 <li><a href='reg0frame.php' target = 'workWindow'>Register</a></li>  ".
	 "<li><a href='stdview00frame.php' target = 'workWindow'>View/Modify-Students</a></li>  " .
	"<li><a href='assessmain.php'>Assessment</a></li>  ".
    " <li><a href='feesmanframe.php' >Sch-Fees</a></li>  ".
	 "<li><a href='headersyssu.php'>System-Setup</a></li>  ".
	"<li><a href='semlogin.php'>Semester</a></li>  ".
 	 "<li><a href='oriframe.php'>Override</a></li></li>  ".
	 "<li><a href='boarddnlodge.php'> Boarding</a></li>".
	"<li><a href=''>Medical</a></li>  ".
	 "<li><a href=''>Discipline</a></li>  ".
	 "<li><a href='sm0frame.php' target = 'workWindow'>ntmsg</a></li> ".
	"<li><a href='scrap.php' target = 'workWindow'>scrap work</a></li> ".
	

	 "<li><a href='logout.php'>Log-out</a></li></ul></CENTER>";
		
		echo"</div>";
*/
	break;
	
	case 3:
	/*
	echo "<div id ='maincontainer'>";
	echo"<CENTER><ul class='menuax'><li><a href='header.php'>Home</a></li>
	 <li><a href='reg0frame.php' target = 'workWindow'>Register</a></li>  ".
	 "<li><a href='stdview00frame.php' target = 'workWindow' >View/Modify-Students</a></li>  " .
	"<li><a href='assessmain.php'>Assessment</a></li>  ".
 	 "<li><a href='oriframe.php'>Override</a></li></li>  ".
	 "<li><a href='boarddnlodge.php'> Boarding</a></li>".
	"<li><a href=''>Medical</a></li>  ".
	 "<li><a href=''>Discipline</a></li>  ".
	 "<li><a href='sm0frame.php' target = 'workWindow'>ntmsg</a></li> ".
	 "<li><a href='logout.php'>Log-out</a></li></ul></CENTER>";
		
		echo"</div>";
*/
	break;
	case 2:
	/*	
	echo "<div id ='maincontainer'>";

	echo"<CENTER><ul class='menuax'><li><a href='header.php'>Home</a></li>  ".
	 	"<li><a href='sm0frame.php' target = 'workWindow'>ntmsg</a></li> ".
		"<li><a href='stdview0frame.php' >Manage Classes</a></li>  " .
		"<li><a href='assessmain.php'>Assessment</a></li>  ";
	echo "<li><a href='logout.php'>Log-out</a></li></ul></CENTER> ";
	echo"</div>";
*/
	break;
	case 1:
	/*echo "<center><ul class='menub'>".
	"<li><a href='header.php'>Home</a></li>" .
	"<li><a href='asstranscripts.php'>Transcript</a></li>".
	"<li><a href='sm0frame.php' target = 'workWindow'>ntmsg</a></li> ".
	"<li><a href='logout.php'>Log out</a></li></ul></center>";
	*/
	break;

	case 0:
		/*
	echo "<center><ul class='menub'>" .
	"<li><a href='header.php'>Home</a></li>" .
	"<li><a href='assaac0.php'>View/Print Student Transcript</a></li>" .
	"<li><a href='sm0frame.php' target = 'workWindow'>ntmsg</a></li> ".
	"<li><a href='logout.php'>Log out</a></li></ul>";
	*/
}
}
else
{
/*
	echo "<ul class='menub'>" .
"<li><a href='index.php'>Home</a></li>" .
"<li><a href='signup.php'>Sign up</a></li>" .
"<li><a href='login.php'>Log in</a></li></li>" .
"<li><a href='setup.php'>Setup</a></li>" .

"<li><a href='closeW.php'>EXIT</a></li></ul>" .
"<span class='info'>&#8658; You must be logged in to " .
"view this page.</span><p> ";
*/
}
?>
</body>
</html>
