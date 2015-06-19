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

<!-- Doctor message summary--> 
<div id="Get Log" data-url="Get Log" data-role="page">
<div data-role="header" data-theme="b">
<h1> Log Summary</h1>
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

$query3 = mysql_query("Select Log from PatientLog Where PatientId='{$_SESSION['PID']}';");
$num = mysql_num_rows($query3);



$query1=mysql_query("Select Log, Ldate, comment from PatientLog Where  PatientId='{$_SESSION['PID']}' Order by Ldate Desc;");
if($query1)
{
echo "<table> <tr><td><strong>Log</strong></td><td><strong>Date</strong></td><td><strong>Comment</strong></td><td><strong>Details</strong></td>";
while($query2=mysql_fetch_array($query1))
{

$timee = $query2['Log'];

echo "<tr><td>".$query2['Log']."</td>";
echo "<td>".$query2['Ldate']."</td>";
echo "<td>".$query2['comment']."</td>";

switch($timee)
{
    case ($timee < '5'):
        echo "<td>"."Low"."</td>";
	break;

    case ($timee < '10'):
        echo "<td>"."Good"."</td>";
	break;

	case ($timee > '10'):
        echo "<td>"."High"."</td>";
	
	break;

}

}
}


?>


<a href="PatientMain.php" data-role="button">Back</a>
</div></div>

</body>
</html>

