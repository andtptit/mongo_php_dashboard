<?php

namespace App;
use MongoDB;

class Controller {

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = (new MongoDB\Client("mongodb://localhost:27017"))->skdashboard;
		
		} catch (Exception $e) {
			exit ("Error! " . $e->getMessage());
		}
	}

	public static function session($key) {
		
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		}
		
		return null;
	}
}