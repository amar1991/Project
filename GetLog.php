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

if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("Select Log, Ldate, comment from PatientLog Where  PatientId='$id' Order by Ldate Desc;");
if($query1)
{
echo "<table> <tr><td><strong>Log</strong></td><td><strong>Date</strong></td><td><strong>comment</strong></td>";
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
}
?>


<a href="Doctormain.php" data-role="button">Back</a>
</div></div>

</body>
</html>