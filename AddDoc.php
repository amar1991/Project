<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
 
</head>
<body>
<!-- Main Page--> 
<div id="Register" data-url="Register" data-role="page">
<div data-role="header" data-theme="b">
<h1>Register</h1>
</div>
<div data-role="content">

<?php

$Dfname= strip_tags ($_POST['DFname']);
$DLname= strip_tags ($_POST['PLname']);
$DAddress= strip_tags ($_POST['DAddress']);
$DPostcode = strip_tags ($_POST['DPostcode']);
$DEmail= strip_tags ($_POST['DEmail']);
$DUsername= strip_tags ($_POST['DUsername']);
$DPassword= strip_tags ($_POST['DPassword']);

if (empty ($_POST['DFname']) || empty($_POST['PLname']) ||  empty($_POST['DAddress']) ||  empty($_POST['DPostcode'])||  empty($_POST['DEmail'])||  empty($_POST['DUsername'])||  empty($_POST['DPassword'])) {
	   echo "*Incomplete form. Please go back and complete";
	   exit;//incomplete forms
    } 

$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';
$query = 'SHOW TABLES';


$link = mysql_connect($host, $user, $passwd) or 
      die('Failed to connect to MySQL server. ' . mysql_error() .'<br />');
// Check connection


mysql_select_db($dbname);// select query for username and password to check
$query = "INSERT INTO Doctor (DFname,DLname,DAddress,DPostcode,DEmail,DUsername,DPassword)" .
               "VALUES ('$Dfname', '$DLname', '$DAddress','$DPostcode', '$DEmail','$DUsername','$DPassword')";

if ( !mysql_query($query,$link) ) {
         echo '<p>Insert error</p>';
		 echo '<META HTTP-EQUIV="Refresh" Content="3; URL=DocRegister.php">';
      } else {
         echo "Registered";
		 echo '<META HTTP-EQUIV="Refresh" Content="3; URL=doctor.php">';
		 }
mysql_close($link);
?>

</div>
<a href="index.php" data-role="button">Back</a>
</div>
<span style="color: #111111; font-family: sans-serif; font-size: 15px;">*Before sending make sure the patient id is correct</span>
</form>
</div></div>

</body>
</html>
