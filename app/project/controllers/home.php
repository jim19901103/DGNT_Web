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
		$contents = $model->getBodyTop();
		$this->view('layouts/default', array('page' => 'home', 'contents' => $contents));
	}
}