<?php

$db = mysqli_connect('localhost', 'galeria', 'galeria123', 'galeria');
mysqli_select_db($db, 'html');

global $db;

//$query = mysqli_query($db, 'SELECT * FROM users');

//var_dump($db);

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    //exit;
}

class Database 
{
	private static $instance;
	private $db;

	private function __construct() {
		$this->db = mysqli_connect('localhost', 'galeria', 'galeria123', 'galeria');
	}

	public static function getInstance() {
		if(self::$instance === null) {
			self::$instance = new Database();
		}
		return self::$instance->db;
	}
}