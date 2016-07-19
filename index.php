<?php
// echo "public\index.php<br>";
/*error_reporting(0);*/
// initialization
try {
	if (! @include_once(dirname(__FILE__) . '/app/init.php')) { // @ - to suppress warnings.
		throw new Exception("Initialization Error", 1001);		
	}
	
	$app = new App();
}
catch(Exception $e) {    
  echo "Message : " . $e->getMessage();
  echo "Code : " . $e->getCode();
}

