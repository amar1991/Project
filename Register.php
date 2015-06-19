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

<form action="AddPat.php" method="post" >
<div data-role="fieldcontain">
<label for="PFname">First Name</label>
<input type="text" name="PFname" id="PFname" />
</div>

<div data-role="fieldcontain">
<label for="PLname">Last name</label>
<input type="text" name="PLname" id="PLname" />
</div>

<div data-role="fieldcontain">
<label for="Paddress">Address</label>
<input type="text" name="Paddress" id="Paddress" />
</div>

<div data-role="fieldcontain">
<label for="PPostcode">Postcode</label>
<input type="text" name="PPostcode" id="PPostcode" />
</div>

<div data-role="fieldcontain">
<label for="PEmail">Email</label>
<input type="text" name="PEmail" id="PEmail" />
</div>

<div data-role="fieldcontain">
<label for="PUsername">Username</label>
<input type="text" name="PUsername" id="PUsername" />
</div>

<div data-role="fieldcontain">
<label for="PPassword">Password</label>
<input type="password" name="PPassword" id="PPassword" />
</div>

<div data-role="fieldcontain">
<label for="PPassword">Select your doctor</label>
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

echo '<select id="kev" name = "kev">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['DoctorId'].'">'.$row['DLname'].'</option>';
}

echo '</select>';// Close your drop down box
?>

</div>


<div data-role="fieldcontain">
<input type="submit" name="submit" value="Confirm"/>
<a href="index.php" data-role="button">Back</a>
</div>

<span style="color: #111111; font-family: sans-serif; font-size: 15px;">*Before sending make sure the details are correct</span>
</form>
</div></div>

</body>
</html>




