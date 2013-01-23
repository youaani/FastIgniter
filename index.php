<?php
/* FastIgniter */

define('FI_ROOT_PATH', dirname(__FILE__));
require FI_ROOT_PATH.'/app/conf/config.php';

// Command line argument
if(isset($argv[1])){
	$route		= $argv[1];
	// Command line debug
	if($argv[2] == 'debug'){
		$cli_debug 	= true;
	}
}else{
	// Use whatever is after index.php
	preg_match('/\.php\/?(.*?)(?:\?.*?)?$/', $_SERVER['REQUEST_URI'], $preg_route);
	$route 		= $preg_route[1];
}


// Initialize the Framework
require FI_ROOT_PATH.'/fi/init.php';
