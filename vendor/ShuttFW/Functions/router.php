<?php

namespace ShuttFW\Functions;

use ShuttFW\Controllers\MainController;
use ShuttFW\Controllers\SeoController;

class Router extends MainController
{

	private $helpers;

	/**
	 * Rotas da Url
	 * @since 0.1
	 * @final
	 * @access public
  	 * @param object $helpers [Funções auxiliares]
	*/
	public function __construct($helpers)
	{
		//Instacia de funções auxiliares
		$this->helpers = $helpers;

		// Chama os controllers e models 
		$this->run($this->getUrl());
		
	}

	/**
	 * Trata a requisição da Url, verifica se existe algum Alias para ela e retorna um array 
	 * @since 0.1
	 * @final
	 * @access private
	 * @return array [Frações da Url, Controllers e Parametros]
	 * @param object $helpers [Funções auxiliares]
	*/
	private function getUrl()
	{
		
		$urlParse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
		
		// Verifica se existe um slug/alias para a url e retorna um array
		$seo = new SeoController();
		$urlSlug = $seo->checkSlug( $urlParse );

		//retorna a url
		return $urlSlug;
	}

	/**
	 * Chama o Controller a Ação e os Parametros
	 * @since 0.1
	 * @final
	 * @access private
	 * @param array $url [Frações da Url, Controllers e Parametros]
	*/
	private function run($url)
	{
		print_r($url);
		//$main = new MainController();
		//$this->mainTeste();

	}
}