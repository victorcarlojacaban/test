<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<title>Project 2 - Page 1</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Project 2, Page 1</h1>
		  <p class="lead">Click buttons, system will save last clicked button in cookie with cokie name <i>prev_button_clicked</i>
		  </p>
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<?php
				if(isset($_COOKIE['prev_button_clicked'])) {
				    echo "<h3>Previous button : " . $_COOKIE['prev_button_clicked'] ."</h3>";
				}
			?>

			<a href="page2.php" onClick="setCookie('prev_button_clicked','page2','-1')"><button type="button" name="accept" class="btn btn-primary">Page 2</button></a>
		</div>
	</div>
	<script src="helper.js" type="text/javascript"></script>
</body>
</html>