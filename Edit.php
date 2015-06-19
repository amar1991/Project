<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/tr/xhtml1/DTD/xhtml11.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
</head>

<body>


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
$id=$_GET['id'];// get the value id from the list.php
if(isset($_POST['update'])) //if the update button is set
{

$Stat= strip_tags ($_POST['stats']);

$query3=mysql_query("update Booking set Status='$Stat' where BookingId='$id'");//query to update info
if($query3)
{
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=ViewAppointmentlist.php">'; //refresh and redirect to php   
    exit; 
}
}
$query1=mysql_query("select * from Booking where BookingId='$id'");
$query2=mysql_fetch_array($query1);

?>

<form method="post" action="">
<table>



<tr>
	<td>Accept status</td>
	<td><input type="text" name="stats" id = "stats" value="<?php echo $query2['Status']; ?>" ></td>
</tr>



<input name="update" type="submit" id="update" value="Update">
<a href="ViewAppointmentlist.php" data-role="button">Back</a>

</table>
</form>
<?php
}
?>
</body>
</html>