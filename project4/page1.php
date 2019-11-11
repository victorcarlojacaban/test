<?php
	require_once('helper.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<title>Project 4 - Page 1</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Project 4, Page 1</h1>
		    <p class="lead">Click buttons, system will save last button and IP clicked on <i>project4/log.txt</i> file.
		  </p>
		  <p>If somehow not updating, try to reload page to update count.</p>
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<h3><span class="contentLog"><?php echo getIpCount(); ?></span></h3>

			<a class="page-btn btn btn-primary" href="page2.php" data-click-id="page2">Page 2</a>
		</div>
	</div>
	<!-- jquery-3.4.1.min.js cdn -->
	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<script src="helper.js" type="text/javascript"></script>
</body>
</html>