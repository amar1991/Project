<head>
</head>
<body>
<?php

$cookie_name = 'pontikis_net_php_cookie';
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
$res = setcookie($cookie_name, '', time() - 3600);
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Login.html">';    
    exit; 


?>

</body>
</html>
