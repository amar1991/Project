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

<div id="View Patient" data-url="View Patient" data-role="page">
<div data-role="header" data-theme="b">
<h1>Patients Summary</h1>
</div>


<div data-role="content"> 




<?php
$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';

if (isset($_POST['DoctorId']))    
{    
          // Instructions if $_POST['value'] exist
		  $docid= strip_tags($_POST['DoctorId']);
}    


$link = mysql_connect($host, $user, $passwd,$dbname);
mysql_select_db($dbname);

$query1=mysql_query("select PatientId, PFname, PLname  from 
Doctor, Patient Where Doctor.DoctorId = Patient.DoctorId And Doctor.DoctorId = '{$_SESSION['DocId']}';");
echo "<table><tr><td><strong>First name</strong></td><td><strong>Last name</strong></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['PFname']."</td>";
echo "<td>".$query2['PLname']."</td>";


echo "<td><a href='GetLog.php?id=".$query2['PatientId']."'>View Log</a></td><tr>";
}


?>




<a href="Doctormain.php" data-role="button">Back</a> 
</div></div>

</body>
</html>