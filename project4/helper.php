<?php

/**
 * Get contents from a file
 *
 * @return  string
 */
function getIpCount() {
	$ip = isset($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);

	$file = file_get_contents('log.txt');
	$contentsArr = preg_split("/\\r\\n|\\r|\\n/", $file);

	foreach ($contentsArr as &$currentData) { 
		$data = explode('||', $currentData);

        if (strpos($currentData, $ip) !== false) {
            return 'IP :'. $ip .'|| Number of button clicks :'. $data[1];
        } 
    }

	return 'Cannot find data!';
}