<?php
session_start();

require 'config.php';

spl_autoload_register(function($classe){

	if(file_exists('controller/'.$classe.'.php')){

		require 'controller/'.$classe.'.php';
	}
	if(file_exists('core/'.$classe.'.php')){

		require 'core/'.$classe.'.php';
	}
	if(file_exists('model/'.$classe.'.php')){

		require 'model/'.$classe.'.php';
	}



});


$core = new core;
$core->start();



?>