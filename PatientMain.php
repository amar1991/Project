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
<div id="Patient" data-url="Patient" data-role="page" data-theme="b">
<div data-role="header" data-theme="b">
<h1>Patient</h1>
</div>

<div data-role="content">
<a href="PatientLog.php" data-role="button">Add Log</a>
<a href="ViewGraph.php" data-role="button">View Log</a>
<a href="ViewMessagePatient.php" data-role="button">View Message</a>
<a href="PatientSendMessage.php" data-role="button">Send Message</a>
<a href="Location.php" data-role="button">Local Services</a>
<a href="PatientBooking.php" data-role="button">Request Referral</a>
<a href="ViewAppointmentlistPatient.php" data-role="button">View Referral</a>
<a href="DPlogout.php" data-role="button">Logout</a>
</div></div>



</body>
</html>