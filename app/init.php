<?php
// echo "app\init.php<br>";

// What status is our application in?
if ($_SERVER['APP_ENVIRONMENT'] == 'dev') {
	// Development, show all errors
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
} else {
	error_reporting(0);
	ini_set('display_errors', 0);
}

// need include if namespace is not used
try {
	if (! @include_once(dirname(__FILE__) . '/core/App.php')) { 
		throw new Exception("Initialization Error", 1002);		
	}
	if (! @include_once(dirname(__FILE__) . '/core/Controller.php')) { 
		throw new Exception("Initialization Error", 1003);		
	}
	if (! @include_once(dirname(__FILE__) . '/core/Model.php')) { 
		throw new Exception("Initialization Error", 1004);		
	}
}
catch(Exception $e) {    
  echo "Message : " . $e->getMessage();
  echo "Code : " . $e->getCode();
}