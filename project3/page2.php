<?php
	require_once('helper.php');

	$logFile = 'log.txt';

	if (isset($_GET['button'])) {
		logIpAndButton($logFile, $_GET['button']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<title>Project 3 - Page 2</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Project 3, Page 2</h1>
		  <p class="lead">Click buttons, system will save last button clicked on <i>project3/log.txt</i> file.
		  </p>
		   <p>Please specficy button on url like <i>page3.php?button=3</i>
		  </p>
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<?php if (isset($_GET['button'])) : ?>
				<h3>Recorded IP and previous button: <?php echo getIpAndButtonLogged($logFile, $_GET['button']); ?></h3><br/>
			<?php endif;?>
				<ul class="list-group">
	              <li class="list-group-item"><button class="btn btn-primary" onclick="location.href='page3.php?button=3'">Page 3</button></li>
	              <li class="list-group-item"><button class="btn btn-primary" onclick="location.href='page4.php?button=4'">Page 4</button></a></li>
	            </ul>

		</div>
	</div>
</body>
</html>