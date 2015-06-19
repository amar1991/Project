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
<div id="Add Log" data-url="Add Log" data-role="page">
<div data-role="header" data-theme="b">
<h1>Log Entry</h1>
</div>

<div data-role="content">
<form action="SQLPatientLog.php" method="post" >

<div data-role="fieldcontain">
<label for="Loglevel">Enter your level</label>
<input type="number" step="any" name="Loglevel" id="Loglevel" />
</div>

<div data-role="fieldcontain">
<label for="comment">Add comment</label>
<input type="text" name="comment" id="comment" />
</div>


<div data-role="fieldcontain">
<input type="submit" name="submit" value="Submit"/>
<a href="PatientMain.php" data-role="button">Back</a>
</div></div>
</form>

</body>
</html>
