<?php
// echo 'controllers\we<br>';

/**
*
*/
class Member extends Controller
{
	public function index($params = null)
	{
		$model = $this->model('member_model');
		$contents = $model->getMemberCont();
		$this->view('layouts/peoplelist', array('page' => 'member', 'contents' => $contents));
	}

}