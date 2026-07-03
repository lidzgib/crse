<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title></title>
 </head>
 <body>
 <?php
 include_once 'functions.php';
  date_default_timezone_set("Pacific/Port_Moresby");
$curdates =date("F d, Y");
$curdaten =date("d/m/Y");

$_SESSION['csdates']=$curdates;
$_SESSION['csdaten']=$curdaten;
$day = date('d');
$mth = date('m');
$yer = date('Y');
$tmrw =date("l F d, Y",mktime(0,0,0,$mth,$day,$yer));

 /* echo "<title>$appname</title><link rel='stylesheet' " .
"href='styles.css' type='text/css'>" .
"</head><body>" ."<table border ='0'  align ='center' ><tr valign ='left'>".
"<td ><div class='menub'><img src='img/kbcl.png' width='90' height='90' border='0'></div></td ><td  align ='left'><font  face ='copperplate gothic bold' size='5' color='#0000a0'>".$appname."</font><font color ='red' face ='comic sans ms'></font><br><img src='img/hd1.png' width='300' height='25' border='0' alt='$headdetail1'></strong></font> <br>$headdetail2<br>$headdetail3&nbsp;$headdetail4
</li></ul></div></div></td><td>".
"</td><td><br><br><br><td><div  class='infohead'><br><br>";*/

//$mmsg=apmode();

//echo"</td><td> <strong>User </strong>: ".$userstr." <br><strong>Mode</strong>: ".$mmsg."<br><strong>Ass. Period</strong>: ".$_SESSION['yr']." Semester  #".$_SESSION['sem']."<br> <strong>Date</strong>: ".$curdates."</td>
//</tr></table>"; 
 ?>
 </body>
</html>
