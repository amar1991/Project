<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>


 
</head>
<body>

<!-- Doctor message summary--> 
<div id="View Booking" data-url="View Booking" data-role="page">
<div data-role="header" data-theme="b">
<h1> Booking Summary</h1>
</div>

<div data-role="content">

<?php
$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';
;

$link = mysql_connect($host, $user, $passwd,$dbname);
mysql_select_db($dbname);

if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from Booking where BookingId='$id'");
if($query1)
{
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=ViewAppointmentlistPatient.php">'; //refresh and redirect to php   
    exit;
}
}
?>



<a href="Doctormain.php" data-role="button">Back</a>
</div></div>

</body>
</html>