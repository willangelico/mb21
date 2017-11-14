<?php

namespace ShuttFW;

class Config
{
	public function __construct()
	{
		$this->defaults();
		$this->globalVars();
		$this->security();
		$this->debug();
	}

	private function defaults()
	{		
		// Set Timezone
		date_default_timezone_set('America/Sao_Paulo');
	}

	private function globalVars()
	{
		// Project and Default Title Name
		define( 'NAME', 'Shutt');
		// Root Path
		define( 'ABSPATH', dirname( __FILE__ ));
		// Path application
		define( 'APPLICATION', '/app' );
		// Path upload dir
		define( 'UP_ABSPATH', ABSPATH . '/public/files' );
		// Home URI
		define( 'HOME_URI', '/' );
		// Main Domain 
		define( 'URL', 'http://www.shutt.com.br' );
		// System Folders
		define( 'FOLDERS', "admin|acesso");
		// App Namespace
		define( 'APP_NAMESPACE', "Shutt\\");

		// DB Hostname
		define( 'DB_HOST', '198.136.59.195' );
		// DB Name
		define( 'DB_NAME', 'shuttcom_db' );
		// DB User
		define( 'DB_USER', 'shuttcom_user' );
		// DB Pass
		define( 'DB_PASSWORD', ')Ei9b4t&oJ.5' );
		// DB Charset
		define( 'DB_CHARSET', 'utf8' );

		// E-mail Host
		define( 'MAIL_HOST', '' );
		// E-mail Port
		define( 'MAIL_PORT', '' );
		// E-mail Username
		define( 'MAIL_USER', '' );
		// E-mail Password
		define( 'MAIL_PASSWORD', '' );
		//TLS encryption, `ssl` also accepted do email
        define( 'MAIL_SMTPSecure', 'tls');
        //email recipient
        define( 'MAIL_FROM', 'contato@shutt.com.br');
        //email reply
        define( 'MAIL_REPLY', 'contato@shutt.com.br');

        // Debug 
		define( 'DEBUG', true);

	}

	private function security()
	{
		// Evita que usuários acesse este arquivo diretamente
        if ( ! defined('ABSPATH')) die;
        // Inicia a sessão
        session_start();
	}

	private function debug()
	{
		// Verifica o modo para debugar
        if ( ! defined('DEBUG') || DEBUG === false ) {
            // Esconde todos os erros
            error_reporting(0);
            ini_set("display_errors", 0); 
            exit;            
        } 
        // Mostra todos os erros
        error_reporting(E_ALL);
        ini_set("display_errors", 1); 
	}
}