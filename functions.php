 
  <?php
$dbhost = 'localhost'; // Unlikely to require changing
$dbname = 'assets'; // Modify these...
$dbuser = 'boss'; // ...variables according
global $headdetail1; 
global $headdetail2;
$headdetail1 = 'Kokopo Business College';
$headdetail2 = 'P O. Box 504  Kokopo,ENB';
$headdetail3='Ph: 9828552 / 9828954';
$headdetail4='Email: kokopobiz@education.gov.pg';
//$dbpass = 'sarb0ssman20'; // ...to your installation
$dbpass = '143dbB0ss@ti'; // ...to your installation
$appname = "Assets"; // ...and preference
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);

function createTable($name, $query)
{
queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
echo "Table '$name' created or already exists.<br>";
}

function createTablex($name, $query)
{
queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
//echo "Table '$name' created or already exists.<br>";
}

function queryMysql($query)
{
global $connection;
$result = $connection->query($query);
if (!$result) die($connection->error);
return $result;
}

function destroySession()
{
$_SESSION=array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-2592000, '/');
session_destroy();
}

function sanitizeString($var)
{
global $connection;
$var = strip_tags($var);
$var = htmlentities($var);
$var = stripslashes($var);
return $connection->real_escape_string($var);
}


function gsno($xpro)
	{
	//get yr and semester 
	$yrsmrslt = queryMySQL("SELECT * FROM aperiod");
	//$rwsm =   $yrsmrslt->num_rows;
	$rsm =   $yrsmrslt->fetch_array(MYSQLI_ASSOC);
	$currap = $rsm['apcode'];
	$myr = substr($rsm['apcode'],2,2);
	$msm = substr($rsm['apcode'],4,1);
	$srnod='';
	//get deptcode from programs
	//echo" and this ->>>";
	$sqlstr ="SELECT dptcode FROM programs where procode ='".$xpro."'";
	$prorslt = queryMySQL($sqlstr);
	//$rprm =   $prorslt->num_rows;
	$rpr =   $prorslt->fetch_array(MYSQLI_ASSOC);
	$dpt  =$rpr ['dptcode'];
    //count students in the selected course program in the current sementer.
	$sqlstra ="SELECT *  FROM stdpsnl  where procode ='".$xpro."' and apcode ='".$currap."'";
	$nostdrslt  = queryMySQL($sqlstra);
	$nosr =   $nostdrslt->fetch_array(MYSQLI_ASSOC);
	$rw  =   $nostdrslt->num_rows;
	$nstdr=0;
	if($rw==false){$nstdr=0;} else {$nstdr=$rw;}
		$nstdr++;
		echo $nstdr;
	// setup student no to have leading zeros;**and apcode =$currap
			switch($nstdr)
				{
				
					 case $nstdr<10:
						$srnod = '00'.$nstdr;
						break;

					 case $nstdr<100:
						$srnod = '0'.$nstdr;
						break;

					 case $nstdr < 1000:
						$srnod  = $nstdr;
						break;
				 }
			//echo "<br>";
		$newxno=$myr.$dpt.$srnod ;

	return $newxno;
}




function apmode()
{
$hdassmode ='';
$apmode='';
include_once "functions.php";
$assresult = queryMySQL("SELECT asstoken FROM aperiod");
$apmrow = $assresult->fetch_array(MYSQLI_ASSOC);
$apmode = $apmrow['asstoken'];
	switch ($apmode)
	{
		case "ASS":
			$hdassmode = 'Assessment';
		break;
		case "CLS":
			$hdassmode = 'Closed';
		break;
		case "REG":
			$hdassmode = 'Registration';
		break;
	}

return $hdassmode;

}

?>
