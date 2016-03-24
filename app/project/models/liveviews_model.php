<?php
// echo "models\other_model.php<br>";

class LiveViews_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}

	function getLiveViewsCont()
	{
		$body1 = 'Liveviews\'s contents';
		return $body1;
	}
}
