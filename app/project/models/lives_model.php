<?php
// echo "models\other_model.php<br>";

class Lives_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}

	function getLivesVideoCont()
	{
		$VideoLink = array(
			"https://livehouse.in/embed/channel/329044/video?autoplay=0",
			"https://livehouse.in/embed/channel/388060/video?autoplay=0",
			"https://livehouse.in/embed/channel/392992/video?autoplay=0",
			"https://livehouse.in/embed/channel/392919/video?autoplay=0",
			"https://livehouse.in/embed/channel/382194/video?autoplay=0",
			"https://livehouse.in/embed/channel/324154/video?autoplay=0",
			"https://livehouse.in/embed/channel/378423/video?autoplay=0",
			"https://livehouse.in/embed/channel/226861/video?autoplay=0",
			"https://livehouse.in/embed/channel/477069/video?autoplay=0");
		return $VideoLink;
	}

	function getLivesCont()
	{
		$VideoCont = array(
			"豆仔",
			"主台",
			"建文",
			"呆貓",
			"JK",
			"小紫",
			"耀夜",
			"水沉",
			"六號");
		return $VideoCont;
	}
}
