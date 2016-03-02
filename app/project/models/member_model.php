<?php
// echo "models\we_model.php<br>";

class Member_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}

	function getMemberCont()
	{
		$body1 = 'Member\'s contents';
		return $body1;
	}
}