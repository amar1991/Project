<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>


 
</head>
<body>

<!-- Patient Login Page-------------------------------> 
<div id="DocLogin" data-url="DocLogin" data-role="page" data-theme="b">
<div data-role="header" data-theme="b">
<h1>Login</h1>
</div>

<div data-role="content">
<div data-role="fieldcontain">
<form action="PatientConnection.php" method="post" > <!-- Change php--> 
<div data-role="fieldcontain">
<label for="username">Username</label>
<input type="text" name="Pusername" id="Pusername" />
</div>

<div data-role="fieldcontain">
<label for="password">Password</label>
<input type="password" name="Ppassword" id="Ppassword" />
</div>

<div data-role="fieldcontain">
<label for="PId">Enter ID</label>
<input type="text" name="PId"/>
</div>


<input name="btndoc" type="submit" value="Login"/>
<input type="button" name="back" value="Back" onClick="location.href='index.php'" /> 
<input type="button" value="Register" onClick="location.href='Register.php'" /> 

</form>
</div></div>
<!-- ------------------------------------------> 

</body>
</html>