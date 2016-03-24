<?php
// echo 'controllers\other<br>';

/**
* 
*/
class Liveviews extends Controller
{
	public function index($params = null)
	{
		$model = $this->model('LiveViews_model');
		$contents = $model->getLiveViewsCont();
		$this->view('layouts/default', array('page' => 'liveviews', 'contents' => $contents));
	}

}