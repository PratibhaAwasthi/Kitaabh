<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel = "stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div class = "container">
<h2 class = "text-center text-success"> Welcome <?php echo $_SESSION['name']; ?> </h2>
<a href = "logout.php"> LOGOUT </a> 
</div>
</body>
</html>  
