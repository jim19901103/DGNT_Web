<?php
// echo "core\Controller.php<br>";

/**
 * The Controll file
 * This class connects the Controller to the Model and View.
 *
 * @copyright Copyright (c) 2016 PoYu Lai
 * @author PoYu Lai
 * @package MVC
 */
class Controller
{
	protected function model($model)
	{
		if ( file_exists(dirname(__FILE__).'/../project/models/' . $model . '.php') )	{
			require_once dirname(__FILE__).'/../project/models/' . $model . '.php';
			return new $model();
		} else {
			return False;
		}
	}

	protected function view($view, $data = array())
	{
		if ( file_exists(dirname(__FILE__).'/../project/views/' . $view . '.blade.php') ) {
			require_once dirname(__FILE__).'/../project/views/' . $view . '.blade.php';
		}
	}
}

