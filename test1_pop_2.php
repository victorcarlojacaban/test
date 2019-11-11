<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (isset($_GET["pop"])) {
			sleep(30);
			$message = $_GET["pop"];
		  	echo "<script type='text/javascript'>alert('$message');</script>";
		}    
	?>
</body>
</html>