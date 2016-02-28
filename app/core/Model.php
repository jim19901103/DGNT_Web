<?php
// echo "core\Model.php<br>";

/**
 * The Model file
 * This class provides a simple interface to connect data from a database.
 * Main model
 *
 * @copyright Copyright (c) 2016 PoYu Lai
 * @author PoYu Lai
 * @package MVC
 */
class Model 
{
	protected $db;

	/**
	 * Setup the model and connect database using PDO.
	 *
	 * @access public
	 * @param connect_info
	 * @return none
	 */
	public function __construct($host='localhost', $dbname='test', $username='root', $password='')
	{
		try {
			$this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

}
