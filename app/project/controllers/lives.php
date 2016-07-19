<?php
// echo 'controllers\other<br>';

/**
* 
*/
class Lives extends Controller
{
	public function index($params = null)
	{
		$model = $this->model('Lives_model');
		$LivesArrayUse = array($model->getLivesVideoCont(),
							   $model->getLivesCont());
		$this->view('layouts/videolives',
			   array('DouVideo' => $LivesArrayUse[0][0],
				  	 'MainVideo' => $LivesArrayUse[0][1],
				  	 'WenVideo' => $LivesArrayUse[0][2],
				  	 'BokeNekoVideo' => $LivesArrayUse[0][3],
				  	 'JKVideo' => $LivesArrayUse[0][4],
				  	 'PurpleVideo' => $LivesArrayUse[0][5],
				  	 'ShainNaitoVideo' => $LivesArrayUse[0][6],
				  	 'MizuNoShinkuVideo' => $LivesArrayUse[0][7],
				  	 'RokuBanVideo' => $LivesArrayUse[0][8],
				  	 'DouTitle' => $LivesArrayUse[1][0],
				  	 'MainTitle' => $LivesArrayUse[1][1],
				  	 'WenTitle' => $LivesArrayUse[1][2],
				  	 'BokeNekoTitle' => $LivesArrayUse[1][3],
				  	 'JKTitle' => $LivesArrayUse[1][4],
				  	 'PurpleTitle' => $LivesArrayUse[1][5],
				  	 'ShainNaitoTitle' => $LivesArrayUse[1][6],
				  	 'MizuNoShinkuTitle' => $LivesArrayUse[1][7],
				  	 'RokuBanTitle' => $LivesArrayUse[1][8]
				  	 ));
	}

}