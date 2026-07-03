<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Manage meals</title>
  <link rel="stylesheet" href="styles.css">
 </head>
 <body>
 <?php
 session_start();

 Include_once "localhost:8080/../functions.php";
 date_default_timezone_set("Pacific/Port_Moresby");

 $step0=false;
if(isset($_POST['step'])){

	
			
			//$reslultu = queryMySQL("update meals set NowServing=0 where NowServing=1");
			//$reslulti = queryMySQL("insert into meals set date='".$_POST['mldate']."', type ='".$_POST['mltype']."', menu ='".$_POST['menu']."', NowServing=1");
  
			$rsqlsu="select mealid from meals where NowServing=1";
			$reslsu =queryMySQL($rsqlsu);
			$rosu =  $reslsu->fetch_array(MYSQLI_ASSOC);
			$_SESSION['mlno']=$mlno = $rosu['mealid'];
			echo "Add stock for meal no: ".$mlno."<br>";
			include_once "invoicedproducts_list.php";
	   $step0=true;
	 

	   
}
 
//echo"View Chechout list <a href='stockcheckoutview.php' target ='fr2' class ='button'>&nbsp;&nbsp;&nbsp;&nbsp;</a><br>";
 
if(!$step0){
  echo"<div>";
  echo "Setup a meal:";
  
  
  echo"<form method='post' action='mealsusteps.php'>";
	echo"Date:<br><input type='date' name='mldate'  required><br>";
	echo"Meal Type<br><select name='mltype'>";
		echo"<option value='Breakfast' >Breakfast</option>";
		echo"<option value='Lunch' >Lunch</option>";
		echo"<option value='Dinner' >Dinner</option>";
		echo"<option value='Brunch'>Brunch</option>";
		$_SESSION['step']=0;
	echo"</select><br>";
    echo"Menu:<br><textarea name='menu' rows='' cols=''></textarea><br>";
	//"Stock used:<br><textarea name='stock' rows='' cols=''></textarea><br>";
	//echo"Meal cost(Omit K):<br><input type='number' name='cost'><br>";
	echo"Comment(s):<br><textarea name='cmnt' rows='' cols=''></textarea><br>";
 //echo "<br>STEP1 form1>> ".$step1;
//echo "<br>STEP0 form1>>".$step0;
 echo"<input type='hidden' name='step' value=0>";
 echo "<input type='submit' value ='Next' class='button'>";
 echo"</form>";
 echo"</div>";
 }
 
//echo "<a href='invoicedproducts_list.php' class 'button'>Add Stock</a>";
  ?>
 </body>

</html>

