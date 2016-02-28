<?php
// echo 'controllers\we<br>';

/**
* 
*/
class We extends Controller
{
		public function index($params = null)
	{
		$model = $this->model('we_model');
		$contents = $model->getWeCont();
		//$js = parent::getBodyCenter();
		$this->view('layouts/default', array('page' => 'we', 'contents' => $contents));
	}

}