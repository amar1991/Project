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
<div id="Doctormain" data-url="Doctormain" data-role="page" data-theme="b">
<div data-role="header" data-theme="b">
<h1>DoctorMain</h1>
</div>

<!-- Doctor selection page--> 
<div data-role="content">

<a href="ViewPatients.php" data-role="button">View Patient</a>
<a href="DoctorMessagelist.php" data-role="button">View Message</a>
<a href="SendMessage.php" data-role="button">Send Message</a> <!--Send message add date--> 
<a href="ViewAppointmentlist.php" data-role="button">View Referral</a>
<a href="DPlogout.php" data-role="button">Logout</a>

</div></div>



</body>
</html>

