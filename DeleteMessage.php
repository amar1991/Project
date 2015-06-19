<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>


 
</head>
<body>

<!-- Doctor summary--> 
<div id="View Message" data-url="View Message" data-role="page">
<div data-role="header" data-theme="b">
<h1> Message Summary</h1>
</div>

<div data-role="content">

<?php
$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';


$link = mysql_connect($host, $user, $passwd,$dbname);
mysql_select_db($dbname);

if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from Message where Mid='$id'");
if($query1)
{
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=DoctorMessagelist.php">'; //refresh and redirect to php   
    exit;
}
}
?>




</div></div>

</body>
</html>