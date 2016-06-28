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
				  'BodyTopContents' => $HomeArrayUse[0][0],
				  'BodyTopContents2' => $HomeArrayUse[0][1],
				  'FrameLinkContents' => $HomeArrayUse[1],
				  'MarqueePreButton' => $HomeArrayUse[2][0],
				  'MarqueeNextButton' => $HomeArrayUse[2][1],
				  'MarqueeLinkContent1' => $HomeArrayUse[2][2],
				  'MarqueeLinkContent2' => $HomeArrayUse[2][3],
				  'MarqueeLinkContent3' => $HomeArrayUse[2][4],
				  'MarqueeLinkContent4' => $HomeArrayUse[2][5],
				  'MarqueePigContent1' => $HomeArrayUse[2][6],
				  'MarqueePigContent2' => $HomeArrayUse[2][7],
				  'MarqueePigContent3' => $HomeArrayUse[2][8],
				  'MarqueePigContent4' => $HomeArrayUse[2][9],
				  'TeamStatusTitle' => $HomeArrayUse[3][0],
				  'TeamStatusContent' => $HomeArrayUse[3][1],
				  'TeamRecruitingTitle' => $HomeArrayUse[3][2],
				  'TeamRecruitingContent' => $HomeArrayUse[3][3],
				  'ContactUsTitle' => $HomeArrayUse[3][4],
				  'DouNatUsTitle' => $HomeArrayUse[3][5],
				  'SocialLinkFB' => $HomeArrayUse[3][6],
				  'SocialLinkTr' => $HomeArrayUse[3][7],
				  'SocialLinkIg' => $HomeArrayUse[3][8]));
	}
}
