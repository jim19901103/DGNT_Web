<?php
function getHead(){
$head = <<<EOF
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/MVCTest/www/public/DGNT.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="cycle-master/jquery.cycle.all.js"></script>
	<script type="text/javascript">
 	jQuery(document).ready(function($) {
	$('#MiddleCenterBlock').cycle({
          fx:    'scrollLeft',
          timeout:  4200,
          random:  1
         });
 	}); </script>
	<title>Dragnorth's Page</title>
EOF;
return $head;
}
?>
