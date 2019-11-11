<?php

$path = 'assets/images';

$imageData = $path . '/no-image.png';

if (isset($_GET['img'])) {
	$image = $path . '/' .$_GET['img'] . '.jpeg';

	if (file_exists($image)) {
		$imageData = $path . '/' .$_GET['img'] . '.jpeg';
	}
} 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Test 1</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Test 1</h1>
		  <p class="lead">1. Assign pop to query param like. <b>domain/test1.php?pop=yes</b></p>
		  <p class="lead">2. Assign img to query param like. <b>domain/test1.php?img=1</b></p>
		  <p class="lead">2. Assign fade yes for image to query param like. <b>domain/test/test1.php?fade=yes</b></p>
		  <hr class="my-4">
		  
		</div>

		<div id="mainDiv">
			<?php if (isset($_GET['pop'])) : ?>
				<div class="alert alert-primary" role="alert">
				  	<div id="counter"></div>
				</div>
			<?php endif; ?>

			<?php if (isset($_GET['img'])) : ?>
					<img src="<?php echo $imageData ?>">
			<?php endif; ?>
			
			<?php if (isset($_GET['fade'])) : ?>
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Image fading</h5>
				    <div id="imageFade"></div>
				  </div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</body>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- jquery-3.4.1.min.js cdn -->

<script type="text/javascript">

	let urlParams = new URLSearchParams(location.search);

	// Process counting until alert
	if (urlParams.has('pop')) {
		let timeLeft = 30;
		    let elem = document.getElementById('counter');
		    
		    let timerId = setInterval(countdown, 1000);
		    
		    function countdown() {
		      if (timeLeft == 0) {
		        clearTimeout(timerId);
		        alert(urlParams.get('pop'));
		      } else {
		        elem.innerHTML = timeLeft + ' seconds remaining until popup display';
		        timeLeft--;
		      }
	    }
	}


    let imageDiv = $('#imageFade');

 	if (urlParams.get('fade') == 'yes') {
	    $(document).ready(function () {
	      fadeFirstImg();
	    });
	}

	// fade first image
    function fadeFirstImg() {
      imageDiv.fadeIn(500).html('<img class="img-fluid" src="assets/images/1.jpeg" />').delay(1000).fadeOut(200, function () { 
      	fadeSecondImage(); 
      });
    }

    // fade second image
    function fadeSecondImage() {
      imageDiv.fadeIn(500).html('<img class="img-fluid" src="assets/images/2.jpeg" />').delay(1000).fadeOut(200, function () { 
      		fadeFirstImg(); 
      });
    }
</script>
</html>