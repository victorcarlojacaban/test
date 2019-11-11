<?php
	$passedTime  = $_GET['time'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<title>Project 1 - Page 2</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Project 1, Page 2</h1>
		  <p class="lead">You are getting record time from the hashed time passed on url.
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<h3>Recorded Time: <?php echo base64_decode($passedTime); ?></h3>

			<ul class="list-group">
			  <li class="list-group-item"><button class="btn btn-primary btn-lg" onclick="location.href='page3.php?time=<?php echo $passedTime?>&button=page3'">Page 3</button></li>
			  <li class="list-group-item"><button class="btn btn-primary btn-lg" onclick="location.href='page4.php?time=<?php echo $passedTime?>&button=page4'">Page 4</button></li>
			</ul>
		</div>
	</div>
</body>
</html>