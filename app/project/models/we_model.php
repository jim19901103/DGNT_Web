<?php
// echo "models\we_model.php<br>";

class We_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}



	function getWeCont()
	{
		$body1 = 'WE\'s contents';
		return $body1;
	}
}