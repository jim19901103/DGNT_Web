<?php
// echo "models\blog_model.php<br>";

class Blog_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}
	
	function getBlogBody()
	{
		$body1 = '前端入門心得';
		return $body1;
	}
	function getBlogBody2()
	{
		$body2 = '遊戲橘子首創 帶薪休假無上限';
		return $body2;
	}
}
