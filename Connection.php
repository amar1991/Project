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
<h1>Error</h1>
</div>

<!-- Doctor selection page--> 
<div data-role="content">

<?php
$docusername= strip_tags ($_POST['Dusername']);
$docpassword= strip_tags ($_POST['Dpassword']);
$docid= strip_tags ($_POST['DoctorId']);


$host = 'studb.cms.gre.ac.uk';
$user = 'na213';
$passwd = 'staruw6J';
$dbname = 'mdb_na213';
$query = 'SHOW TABLES';

$link = mysql_connect($host, $user, $passwd) or 
      die('Failed to connect to MySQL server. ' . mysql_error() .'<br />');
// Check connection

mysql_select_db($dbname);// select query for username and password to check
$query = "SELECT * FROM `Doctor` WHERE DUsername='$docusername' and DPassword='$docpassword'and DoctorId = '$docid'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if ($count == 1){
	
session_start();

$_SESSION['login'] = "1";
$_SESSION['DocId'] = $docid;
die("<script>location.href = 'Doctormain.php'</script>");

}

if ($count == 0) {
	
echo "Invalid Credential";
echo '<META HTTP-EQUIV="Refresh" Content="3; URL=index.php">'; //redirect after 3 sec


}

mysql_close($link);
?>

</div></div>



</body>
</html>
