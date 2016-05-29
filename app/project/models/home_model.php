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
		$BodyTop = '嗨！我們是【Dragnorth Workshop】龍北工作室，我們是個正在起步的團隊，致力於分享遊戲與生活的喜悅給漫遊在網路上的人們。<br /><br />我們工作室，是以招募各方各界對實況圈有喜好的朋友，以互聯互助的形式，彙整成類似「聯播網」，讓來到我們工作室的朋友們可以看到各種直播節目，接收最新訊息，一起同樂！';
		return $BodyTop;
	}

	function getFrameLink()
	{
		$FrameLink = "https://livehouse.in/embed/channel/388060/video";
		return $FrameLink;
	}

	function getMarqueeLink()
	{
		$MarqueeLinkArray = array(
			"../../public/Images/Common/left.png",
			"../../public/Images/Common/right.png",
			"https://livehouse.in/embed/channel/388060/video",
			"http://www.facebook.com/",
			"https://twitter.com/",
			"http://instagram.com/",
			"../../public/Images/HomePage/1.png",
			"../../public/Images/HomePage/2.png",
			"../../public/Images/HomePage/3.png",
			"../../public/Images/HomePage/4.png");
		return $MarqueeLinkArray;
	}

	function getRelatedInformationContent()
	{
		$InformationContentArray = array(
			"Team Status",
			"Team Recruitment",
			"DGNT Workshop持續招募喜愛實況、喜歡繪圖、想學習團隊事務的朋友，一起加入我們的行列，與我們共事並一起慢慢成長！有興趣的朋友請點以下按鈕進入了解詳情吧！",
			"Contact Us ",
			"http://www.facebook.com/",
			"https://twitter.com/",
			"http://instagram.com/");
		return $InformationContentArray;
	}
}
?>
