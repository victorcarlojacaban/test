<?php
/**
 * Count clicks
 */
$clicks = 1;
$logFile  = 'log.txt';

$currentIp = isset($_SERVER['HTTP_CLIENT_IP']) ?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);


// check if log file exist otherwise create
if (file_exists($logFile)) {
  $fileHandler = fopen($logFile, 'a');
} else {
  $fileHandler = fopen($logFile, 'w');
} 

$file = file_get_contents($logFile);
$stringData = $currentIp .'||'. $clicks . "\r";

// check IP first if exist on log
if(strpos($file, $currentIp) === false) {
   	fwrite($fileHandler, $stringData);
	fclose($fileHandler);
} else {
	$counter = 0;
	$contentsArr = preg_split("/\\r\\n|\\r|\\n/", $file);
	$updatedContents = "";

	foreach ($contentsArr as &$currentData) {
		$data = explode('||', $currentData);

        if (strpos($currentData, $currentIp) !== false) {
        	$counter = $data[1] + 1;
            $updatedContents  .= $currentIp .'||'. $counter; 
        } else {
 			$updatedContents  .= $currentData . "\r";
        }
    }

    file_put_contents($logFile, $updatedContents);

    return $counter;
}

