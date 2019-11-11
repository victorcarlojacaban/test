<?php

$numViews = 0;
$countFile = "count.txt";

if (file_exists($countFile)){
    $numViews = (int)file_get_contents($countFile);
}
// increment
$numViews++;

// save
file_put_contents($countFile, $numViews);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Test 2</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Test 2</h1>
		  <p class="lead">Reload page to update number of views count.</b></p>
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			Number of times page is visited : <?php echo $numViews;?>
		</div>
	</div>
</body>
</html>