<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.php");

}

?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
 
</head>

<body>
<div id="Connection" data-url="Connection" data-role="page" data-theme="b">
<div data-role="header" data-theme="b">
<h1>Booking</h1>
</div>


<div data-role="content">

<?php
$DoctorId= strip_tags ($_POST['doc']);
$reftype= strip_tags ($_POST['mydropdown']);
$BDateTime= strip_tags ($_POST['BookingDateTime']);
$BookingInfo= strip_tags ($_POST['Bookinginfo']);


$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';
$query = 'SHOW TABLES';


$link = mysql_connect($host, $user, $passwd) or 
      die('Failed to connect to MySQL server. ' . mysql_error() .'<br />');
// Check connection


mysql_select_db($dbname);// select query for username and password to check
$query = "INSERT INTO Booking (BDateTime, Type ,Binfo, Status , PatientId,DoctorId)" .
               "VALUES ('$BDateTime','$reftype' ,'$BookingInfo','Waiting' ,'{$_SESSION['PID']}','$DoctorId')";

// If result matched $myusername and $mypassword, table row must be 1 row
if ( !mysql_query($query,$link) ) {
         echo '<p>Insert error</p>';
		 echo '<META HTTP-EQUIV="Refresh" Content="3; URL=PatientMain.php">';
      } else {
         echo "Booked";
		 echo '<META HTTP-EQUIV="Refresh" Content="3; URL=PatientMain.php">';
		 }
mysql_close($link);
?>

</div></div>



</body>
</html>