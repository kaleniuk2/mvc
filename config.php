<?php
require 'environment.php';



$config = [];

if(ENVIRONMENT == 'development'){
	define("BASE_URL", 'http://localhost/cursobonieky/mvc_sozinho/');
	$config['dbname'] = 'teste_mvc';
	$config['dbhost'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

}else{
	define("BASE_URL", 'http://www.meusitechave.com.br');
	$config['dbname'] = 'teste';
	$config['dbhost'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

}

global $db;

try{

	$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['dbhost'], $config['dbuser'],'');

}catch(PDOException $e){

	echo "ERRO: ".$e->getMessage();
}


?>