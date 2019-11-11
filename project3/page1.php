<?php
	require_once('helper.php');

	$logFile = 'log.txt';

	logIpAndButton($logFile, $_GET['button']);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<title>Project 3 - Page 1</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Project 3, Page 1</h1>
		  <p class="lead">Click buttons, system will save last button clicked on <i>project3/log.txt</i> file.
		  </p>
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<h3>Recorded IP and previous button: <?php echo getIpAndButtonLogged($logFile, $_GET['button']); ?></h3><br/>
			<button class="btn btn-primary" onclick="location.href='page2.php?button=2'">Page 2</button>
		</div>
	</div>
</body>
</html>