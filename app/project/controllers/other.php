<?php
// echo 'controllers\other<br>';

/**
* 
*/
class Other extends Controller
{
	public function index($params = null)
	{
		$model = $this->model('other_model');
		$contents = $model->getOtherCont();
		$this->view('layouts/default', array('page' => 'other', 'contents' => $contents));
	}

}