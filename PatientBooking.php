<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
 
</head>
<body>
<!-- Patient booking Main Page--> 
<div id="Book" data-url="Book" data-role="page">
<div data-role="header" data-theme="b">
<h1>Booking</h1>
</div>
<div data-role="fieldcontain">

<form action="PatientBookAppointmentSQL.php" method="post" >

<div data-role="fieldcontain">
<label for="BookingDateTime">Doctor Id</label>
<?php
$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';
$query = 'SHOW TABLES';

$link = mysql_connect($host, $user, $passwd) or 
      die('Failed to connect to MySQL server. ' . mysql_error() .'<br />');
// Check connection

mysql_select_db($dbname);

$query = mysql_query("SELECT DoctorId,DLname FROM Doctor;"); // Run your query

echo '<select id="doc" name = "doc">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['DoctorId'].'">'.$row['DLname'].'</option>';
}

echo '</select>';// Close your drop down box
?>
</div>


<div data-role="fieldcontain">
<label for="BookingDateTime">Referal Date</label>
<input type="date" name="BookingDateTime" id="BookingDateTime" />
</div>

<div data-role="fieldcontain">
<label for="Bookinginfo">Refereal Type</label>
<select name="mydropdown" id='mydropdown'>
<option value="Dieticians">Dieticians</option>
<option value="Local Retinal Screening">Local Retinal Screening</option>
<option value="Neuropathy">Neuropathy</option>
<option value="Education Programme">Education Programme</option>
</select>
</div>




<div data-role="fieldcontain">
<label for="Bookinginfo">Referral info</label>
<textarea name="Bookinginfo" id="Bookinginfo" rows="" cols="">type booking information here</textarea>
</div>

<div data-role="fieldcontain">
<input type="submit" name="submit" value="Confirm"/>
<a href="PatientMain.php" data-role="button">Back</a>
</div>
<span style="color: #111111; font-family: sans-serif; font-size: 15px;">*Before sending make sure the doctor id is correct</span>
</form>
</div></div>
</form>


</body>
</html>