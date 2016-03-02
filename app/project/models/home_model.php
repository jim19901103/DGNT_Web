<?php
// echo "models\home_model.php<br>";

class Home_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}

	function getBodyTop()
	{
		$body1 = '嗨！我們是【Dragnorth Workshop】龍北工作室，我們是個正在起步的團隊，致力於分享遊戲與生活的喜悅給漫遊在網路上的人們。<br />我們工作室，是以招募各方各界對實況圈有喜好的朋友，以互聯互助的形式，彙整成類似「聯播網」，讓來到我們工作室的朋友們可以看到各種直播節目，接收最新訊息，一起同樂！';
		return $body1;
	}
}
?>
