<?php

namespace ShuttFW\Controllers;

class SeoController
{	
	private $helpers;

	/**
	 * Definições, Controllers e parametros para o SEO
	 * @access public
  	 * @param object $helpers [Funções auxiliares]
	*/
	public function __construct($helpers)
	{
		//Instacia de funções auxiliares
		$this->helpers = $helpers;
	}	
}