<?php
// echo 'controllers\blog<br>';

/**
*
*/
class Blog extends Controller
{
	public function index($params = null)
	{
		$model = $this->model('blog_model');
		$contents = $model->getBlogBody();
		$contents2 = $model->getBlogBody2();
		$this->view('layouts/default', array('page' => 'blog', 'contents' => $contents, 'contents2' => $contents2));
	}
}