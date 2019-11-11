<?php
	$passedTime  = $_GET['time'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<title>Project 1 - Page 3</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
		  <h1 class="display-4">Project 1, Page 3</h1>
		  <p class="lead">You are getting record time from the hashed time passed on url.
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<h3>Recorded Time: <?php echo base64_decode($passedTime); ?></h3>
		</div>
	</div>
</body>
</html>