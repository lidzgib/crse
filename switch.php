<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>switch</title>
    <link rel ="stylesheet" href="styles.css">

 </head>
 <body>


 
 <?php
  //echo "<a href='menumx.html' class ='button'>Backxx</a></br>";



  if(isset($_REQUEST['lvl'])){
	SESSION_START();
	$_SESSION['level'] = $_REQUEST['lvl'];
  }

switch($_SESSION['level']){
	 case 1:
		echo"<div >";
		echo "level: ".$_SESSION['level'];
		$lvl=$_SESSION['level'];
		echo"<ol >
		<li class = 'button'><a href='mealcheck.php?lvl=".$lvl."'>check meal</a></li>
		<li class = 'button'><a href='mealsu.php'>meal setup</a></li>
		
		</ol>";
		echo"</div>";
		break;
		case 4:
			echo"<div >";
			echo $_SESSION['level'];
			echo"<ol >
			<li class = 'button'><a href='start.html'>check meal</a></li>
			<li class = 'button'>add user</li>
			<li class = 'button'><a href='addstudent.php'>add Student</a>t</li>
			<li class = 'button'><a href='reports.php'>Reports</a></li>
			<li class = 'button'><a href='login.php'>Logout</a></li>
			</ol>";
			echo"</div>";
			break;
	
	default:
		//Include_once "start.php";
	//echo"<a href='start.html' class = 'button'>check meal</a>";
		
		break;

		}

  ?>
 </body>
</html>
