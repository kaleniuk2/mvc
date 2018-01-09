<?php


class controller{

	public function loadView($view, $dados = []){
		extract($dados);
		require 'view/'.$view.'.php';

	}

	public function loadTemplate($view, $dados = []){
		extract($dados);
		require 'view/template.php';

	}

	
}


?>