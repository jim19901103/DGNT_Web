<?php
// echo "models\other_model.php<br>";

class Other_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}

	function getOtherCont()
	{
		$body1 = 'other\'s contents';
		return $body1;
	}
}
