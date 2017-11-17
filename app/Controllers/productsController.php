<?php 

namespace Shutt\Controllers;

class ProductsController
{
	public $main;

	public function __construct($main)
	{
		$this->main = $main;
		// var_dump($main->getParams());
	}

	public function index()
	{
		echo "lista products";
	}

	public function show()
	{
		echo "show";
		var_dump($this->main->getParams());
	}
	
}