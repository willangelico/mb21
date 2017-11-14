<?php

namespace ShuttFW\Controllers;

use ShuttFW\Controllers\MainController;


class SeoController extends MainController
{	
	private $helpers;

	/**
	 * Definições, Controllers e parametros para o SEO
	 * @access public
  	 * @param object $helpers [Funções auxiliares]
	*/
	public function __construct($helpers)
	{
		parent::__construct();
		//Instacia de funções auxiliares
		$this->helpers = $helpers;
	}	

	/**
	 * Verifica se o termo é uma url amigável
	 * @access public
  	 * @param string $term [Termo na Url que não é um controller]
	*/
	public function isFriendlyUrl($term)
	{

		//$this->db->insert("tabela", $data);
		//$main = new MainController();
	}
}