<?php
// echo "models\we_model.php<br>";

class Member_model extends Model
{
	function __construct()
	{
		//parent::__construct('localhost', 'web', 'root', '');
	}

	function getFlagTitle()
	{
		$FlagTitle = array(
			"../../public/Images/MemberPage/LeaderBA.png",
			"../../public/Images/MemberPage/CoreBA.png",
			"../../public/Images/MemberPage/WorkTeamBA.png");
		return $FlagTitle;
	}

	function getFlagChildrenTitle()
	{
		$FlagChildrenTitle = array(
			"../../public/Images/MemberPage/LeaderTeam/GeniusCat.png",
			"../../public/Images/MemberPage/LeaderTeam/OslandWen.png",
			"../../public/Images/MemberPage/LeaderTeam/DouKaLuCha.png",
			"../../public/Images/MemberPage/CoreTeam/BinzuOtoto.png",
			"../../public/Images/MemberPage/CoreTeam/NekoOtoto.png",
			"../../public/Images/MemberPage/CoreTeam/BokeNeko.png",
			"../../public/Images/MemberPage/CoreTeam/KaiKai.png",
			"../../public/Images/MemberPage/WorkTeam/RokuBan.png",
			"../../public/Images/MemberPage/WorkTeam/MizuNoShinku.png",
			"../../public/Images/MemberPage/WorkTeam/GoNeko.png",
			"../../public/Images/MemberPage/WorkTeam/Purachina.png",
			"../../public/Images/MemberPage/WorkTeam/JoshiKousei.png",
			"../../public/Images/MemberPage/WorkTeam/Murasaki.png",
			"../../public/Images/MemberPage/WorkTeam/ShainNaito.png",
			"../../public/Images/MemberPage/WorkTeam/ShiroiFeza.png"
		);
		return $FlagChildrenTitle;
	}

	function getFlagChildrenTitleChange()
	{
		$FlagChildrenTitleChange = array(
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/HomePage/4.png",
			"../../public/Images/HomePage/1.png",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/",
			"../../public/Images/MemberPage/"
		);
		return $FlagChildrenTitleChange;
	}

	function getCharacterImage()
	{
		$CharacterImage = array(
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png",
			"../../public/Images/MemberPage/CharacterImage/purple.png"
		);
		return $CharacterImage;
	}

	function getCharacterName()
	{
		$CharacterName = array(
			"豆仔　　DouKaLuCha",
			"建文　　Osland Wen",
			"阿貓　　JimCat",
			"凱凱　　Kai Kai",
			"呆貓",
			"貓弟",
			"豆弟",
			"白羽",
			"耀夜",
			"小紫",
			"傑克　　JK",
			"鉑",
			"御貓",
			"水沉",
			"六號　　Rokugo");
		return $CharacterName;
	}

	function getCharacterBirthday()
	{
		$CharacterBirthday = array(
			"生日：10/14",
			"生日：03/08",
			"生日：11/03",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx",
			"生日：xx/xx"
			);
		return $CharacterBirthday;
	}

	function getCharacterJob()
	{
		$CharacterBirthday = array(
			"總召/實況主",
			"副召/實況主",
			"副召/網頁/幕後",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX",
			"XX/XX");
		return $CharacterBirthday;
	}

	function getCharacterContentParagraphOne()
	{
		$CharacterContentOne = array(
			"名稱理念為總召團大學時所住的租屋處之路名，總是叫著「龍北龍北」，久而久之就成為掛在嘴邊的名詞了。",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1",
			"Intruction 1");
		return $CharacterContentOne;
	}

	function getCharacterContentParagraphTwo()
	{
		$CharacterContentTwo = array(
			"成員分為代號78與代號100，代號78是總召團+核心團隊，代號100為工作團隊，由核心團隊輔助工作團隊，工作團隊與核心團隊合作，建立一個類聯播網的概念，互相成長與鼓勵！",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2",
			"Intruction 2");
		return $CharacterContentTwo;
	}
}

?>