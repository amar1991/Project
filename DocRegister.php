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

<form action="AddDoc.php" method="post" >


<div data-role="fieldcontain">
<label for="DFname">Firstname</label>
<input type="text" name="DFname" id="DFname" />
</div>

<div data-role="fieldcontain">
<label for="PLname">Lastname</label>
<input type="text" name="PLname" id="PLname" />
</div>

<div data-role="fieldcontain">
<label for="DAddress">Address</label>
<input type="text" name="DAddress" id="DAddress" />
</div>

<div data-role="fieldcontain">
<label for="DPostcode">Postcode</label>
<input type="text" name="DPostcode" id="DPostcode" />
</div>

<div data-role="fieldcontain">
<label for="DEmail">Email</label>
<input type="text" name="DEmail" id="DEmail" />
</div>

<div data-role="fieldcontain">
<label for="DUsername">Username</label>
<input type="text" name="DUsername" id="DUsername" />
</div>

<div data-role="fieldcontain">
<label for="DPassword">Password</label>
<input type="password" name="DPassword" id="DPassword" />
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




