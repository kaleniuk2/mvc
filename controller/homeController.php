<?php 

	class homeController extends controller{

		public function index(){
			$dados = ["cumprimentar"=>"Ola parceiro"];

			$dahora = new dahora;
			$dados['dahora'] = $dahora->getdahora();

			$this->loadTemplate('home', $dados);
				
			
		}
	}

?>