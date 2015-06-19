<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";?>



<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>


 
</head>
<body>

<!-- DPlogout Page-------------------------------> 
<?php
session_start();
session_destroy();
die("<script>location.href = 'index.php'</script>");
exit;

?>


<!-- ------------------------------------------> 

</body>
</html>

