<?php
// echo "core\App.php<br>";

/**
 * The front file
 * This class provides the initial action (parse url and route).
 *
 * @copyright Copyright (c) 2016 PoYu Lai
 * @author PoYu Lai
 * @package MVC
 */
class App
{

	/**
	 * The URL that the user has visited.
	 *
	 * @access private
	 * @var string
	 */
	private static $_url;

	/**
	 * The controller that the user has visited.
	 *
	 * @access private
	 * @var object
	 */
	private static $_controller = 'home';

	/**
	 * The method in the controller.
	 *
	 * @access private
	 * @var string
	 */
	private static $_method = 'index';

	/**
	 * The paraments for the method.
	 *
	 * @access private
	 * @var array
	 */
	private static $_params = array();

	function __construct()
	{

		self::parseUrl();

		// controller
		if( file_exists(dirname(__FILE__).'/../project/controllers/' . self::$_url[1] . '.php') ) {
			self::$_controller = self::$_url[1];
			unset(self::$_url[1]);
		} 
		require_once dirname(__FILE__).'/../project/controllers/' . self::$_controller . '.php';
		self::$_controller = new self::$_controller;

		// method
		if ( isset(self::$_url[2]) ) {
			if ( method_exists(self::$_controller, self::$_url[2]) ) {
				self::$_method = self::$_url[2];
				unset(self::$_url[2]);
			}
		}

		// params
		self::$_params = self::$_url ? array_values(self::$_url) : '';

		call_user_func_array( array(self::$_controller, self::$_method), array(self::$_params) );
	}

	private static function parseUrl()
	{
		self::setUrl();
		self::$_url = explode('/', filter_var(rtrim(self::$_url, '/'), FILTER_SANITIZE_URL));
		unset(self::$_url[0]);
	}

	private static function setUrl($url = null)
	{
		self::$_url = $url ?: $_SERVER['REQUEST_URI'];
	}
}