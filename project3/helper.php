<?php

/**
 * Log IP and button to a file
 */
function logIpAndButton ($logFile, $button) {
	$ip = getIp();

	// check if log file exist otherwise create
	if (file_exists($logFile)) {
	  $fileHandler = fopen($logFile, 'a');
	} else {
	  $fileHandler = fopen($logFile, 'w');
	} 
	
	$pageButton = 'page'. $button;
	$file = file_get_contents($logFile);
	$stringData = $ip .'|'.$pageButton . "\r";

	// check IP first if exist on log
	if(strpos($file, $ip) === false) {
	   	fwrite($fileHandler, $stringData);
	   	fclose($fileHandler);
	} else {
		$contentsArr = preg_split("/\\r\\n|\\r|\\n/", $file);
		$updatedContents = "";

		foreach ($contentsArr as &$currentData) {   
	        if (strpos($currentData, $ip) !== false) {
	            $updatedContents  .= $ip .'|'.$pageButton; 
	        } else {
	 			$updatedContents  .= $currentData . "\r";
	        }
	    }

	    file_put_contents($logFile, $updatedContents );
	}
}

/**
 * Get contents from a file
 *
 * @return  string
 */
function getIpAndButtonLogged($logFile, $buttonParam) {
	$file = file_get_contents($logFile);
	$contentsArr = preg_split("/\\r\\n|\\r|\\n/", $file);

	if (!isset($buttonParam)) {
		return 'No button on param!';
	}

	if (isset($buttonParam)) {
		$stringData = getIp() .'|'. $buttonParam . "\r";

		foreach ($contentsArr as &$currentData) { 
	        if (strpos($currentData, getIp()) !== false) {
	            return $stringData;
	        } 
	    }
	}

	return 'Cannot find data!';
}

/**
 * Get IP of current user
 * 
 * @return string
 */
function getIp(){
	return isset($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);
}
?>