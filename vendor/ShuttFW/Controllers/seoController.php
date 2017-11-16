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
		$query = "SELECT * FROM `friendly_url` WHERE url = ?";
		$res = $this->db->query($query,array($term));
		
		if(!$res){
			return FALSE;
		}
		return $res->fetchAll();



		//$this->db->insert("tabela", $data);
		//$main = new MainController();
	}
}