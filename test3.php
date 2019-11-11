<?php

// You can play around with IP's by assigning random IP to below block,
//$_SERVER['HTTP_CLIENT_IP'] = '3.4.1.1';

$logFile 	 = 'logip.txt';
$prevLogFile = 'previousip.txt';

$ip = isset($_SERVER['HTTP_CLIENT_IP']) ?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);


$previousIPData = file_get_contents($logFile);

// check IP first if exist on log
if(strpos($previousIPData, $ip) === false) {
	file_put_contents($logFile, $ip);
	file_put_contents($prevLogFile, $previousIPData);
} 

$currentIp  = file_get_contents($logFile);
$previousIP = file_get_contents($prevLogFile);


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Test 3</title>
</head>
<body>
	<div class="container">

		<div class="jumbotron">
		  <h1 class="display-4">Test 3</h1>
		  <p class="lead">You can play around with IP's by assigning random IP to below block on <i>test3.php</i> file.</p>
		  <p>
		  	ex. $_SERVER['HTTP_CLIENT_IP'] = '3.4.1.1';
		  </p>
		  <p>
		  	You can see logged current ip on <i>logip.txt</i> file and previous ip on <i>previousip.txt</i> file.
		  </p>
		  <hr class="my-4">
		</div>

		<div id="mainDiv">
			<table class="table">
				<tr>
					<td><h4>Current  IP Address</h4></td>
					<td><?php echo $currentIp;?></td>
				<tr/>
				<tr>
					<td><h4>Previous IP Address</h4></td>
					<td><?php echo $previousIP;?></td>
				<tr/>
			</table>
		</div>
	</div>
</body>
</html>