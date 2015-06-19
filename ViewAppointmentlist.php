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

<div id="View Appointment" data-url="View Appointment" data-role="page">
<div data-role="header" data-theme="b">
<h1>Appointment Summary</h1>
</div>


<div data-role="content"> 
<?php
$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';

$link = mysql_connect($host, $user, $passwd,$dbname);
mysql_select_db($dbname);

$query1=mysql_query("select BookingId,Type, BDateTime, Binfo, Status ,Booking.DoctorId, Booking.PatientId, PFname, PLname 
from Booking, 
Doctor, Patient Where Doctor.DoctorId = Booking.DoctorId 
and Patient.PatientId = Booking.PatientId and Doctor.DoctorId = '{$_SESSION['DocId']}' Order by BDateTime Desc ; ");
echo "<table><tr><td><strong>Referal Type</strong></td><td><strong>Referral info</strong></td><td><strong>DateTime</strong></td><td><strong>Patient Name</strong></td><td><strong>Lastname</strong></td></td><td><strong>Status</strong></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['Type']."</td>";
echo "<td>".$query2['Binfo']."</td>";
echo "<td>".$query2['BDateTime']."</td>";
echo "<td>".$query2['PFname']."</td>";
echo "<td>".$query2['PLname']."</td>";
echo "<td>".$query2['Status']."</td>";

//change edit.php/delete
echo "<td><a href='Edit.php?id=".$query2['BookingId']."'>Edit</a></td>";
echo "<td><a href='DeleteBooking.php?id=".$query2['BookingId']."'>Cancel</a></td></tr>";
}

?>



<a href="Doctormain.php" data-role="button">Back</a>
</div></div>

</body>
</html>