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
<div id="Send Message" data-url="Send Message" data-role="page">
<div data-role="header" data-theme="b">
<h1>Message</h1>
</div>
<div data-role="content">

<form action="DocMessageSQL.php" method="post" >
<div data-role="fieldcontain">
<label for="BookingDateTime">Patient</label>
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

$query = mysql_query("SELECT PatientId,PLname FROM Patient;"); // Run your query

echo '<select id="pat" name = "pat">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['PatientId'].'">'.$row['PLname'].'</option>';
}

echo '</select>';// Close your drop down box
?>
</div>

<div data-role="fieldcontain">
<label for="MessageDate">Date Time</label>
<input type="datetime-local" name="MessageDate" id="MessageDate" />
</div>


<div data-role="fieldcontain">
<label for="Message">Message</label>
<textarea name="Message" id="Message" rows="" cols="">type your message here</textarea>
</div>

<div data-role="fieldcontain">
<input type="submit" name="submit" value="Send"/>
<a href="Doctormain.php" data-role="button">Back</a>
</div>
<span style="color: #111111; font-family: sans-serif; font-size: 15px;">*Before sending make sure the patient id is correct</span>
</form>
</div></div>

</body>
</html>