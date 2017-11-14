<?php

namespace ShuttFW\Controllers;

use ShuttFW\Models\DB;

class MainController
{

	public $db;
	public $name;

	public function __construct()
	{		
		$this->db = new DB();
	}
	
}