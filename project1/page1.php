<?php
	// get time from param, otherwise get current time
	$time = $_GET['time'] ?? date('h:i');

	//ex. 11:02 is base64 equevalent to MTE6MDI=
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<title>Project 1 - Page 1</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Project 1, Page 1</h1>
		  <p class="lead">Assign base64 encoded time to query param like. <b>domain/test/project1/page1.php?time=MTE6MDI=</b>
		  	where <i>MTE6MDI=</i> is equevalent to <i>11:02</i>
		  </p>
		  <p>If time is not set on url, system will get the current time.</p>
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<h3>Recorded Time: <?php echo base64_decode($time); ?></h3>

			<button class="btn btn-primary btn-lg" onclick="location.href='page2.php?time=<?php echo $time?>&button=page2'">Page 2</button>
		</div>
	</div>
</body>
</html>