<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>


 
</head>
<body>

<!-- Doctor Login Page-------------------------------> 
<div id="DocLogin" data-url="DocLogin" data-role="page" data-theme="b">
<div data-role="header" data-theme="b">
<h1>Login</h1>
</div>

<div data-role="content">
<div data-role="fieldcontain">
<form action="Connection.php" method="post" >
<div data-role="fieldcontain">
<label for="username">Username</label>
<input type="text" name="Dusername" id="Dusername" />
</div>

<div data-role="fieldcontain">
<label for="password">Password</label>
<input type="password" name="Dpassword" id="Dpassword" />
</div>

<div data-role="fieldcontain">
<label for="DoctorId">EnterID</label>
<input type="text" name="DoctorId"/>
</div>


<input name="btndoc" type="submit" value="Login"/>
<input type="button" name="back" value="Back" onClick="location.href='index.php'" /> 
<input type="button" value="Register" onClick="location.href='DocRegister.php'" /> 
</form>
</div></div>
<!-- ------------------------------------------> 

</body>
</html>
