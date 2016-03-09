<?php
// echo 'controllers\home<br>';

/**
*
*/
class Home extends Controller
{
	public function index($params = null)
	{
		$model = $this->model('home_model');
		$HomeArrayUse = array($model->getBodyTop(),
							  $model->getFrameLink(),
							  $model->getMarqueeLink(),
							  $model->getRelatedInformationContent());
		$this->view('layouts/default',
			array('page' => 'home',
				  'BodyTopContents' => $HomeArrayUse[0],
				  'FrameLinkContents' => $HomeArrayUse[1],
				  'MarqueeLinkContent1' => $HomeArrayUse[2][0],
				  'MarqueeLinkContent2' => $HomeArrayUse[2][1],
				  'MarqueeLinkContent3' => $HomeArrayUse[2][2],
				  'MarqueeLinkContent4' => $HomeArrayUse[2][3],
				  'MarqueePigContent1' => $HomeArrayUse[2][4],
				  'MarqueePigContent2' => $HomeArrayUse[2][5],
				  'MarqueePigContent3' => $HomeArrayUse[2][6],
				  'MarqueePigContent4' => $HomeArrayUse[2][7],
				  'TeamStatusTitle' => $HomeArrayUse[3][0],
				  'TeamRecruitingTitle' => $HomeArrayUse[3][1],
				  'TeamRecruitingContent' => $HomeArrayUse[3][2],
				  'ContactUsTitle' => $HomeArrayUse[3][3],
				  'SocialLinkFB' => $HomeArrayUse[3][4],
				  'SocialLinkTr' => $HomeArrayUse[3][5],
				  'SocialLinkIg' => $HomeArrayUse[3][6]));
	}
}
