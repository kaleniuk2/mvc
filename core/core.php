<?php

class core{


	public function start(){


		
		$params = [];
		if(!empty($_GET['url'])){
			$url = $_GET['url'];
			$url = explode('/', $url);
			$currentController = $url[0].'Controller';
			array_shift($url);

			if(count($url) > 0){

				if($url[0] == ''){

					$currentAction = 'index';
				}else{

					$currentAction = $url[0];
					array_shift($url);

					if(count($url)>0){

						if($url[0] != ''){

							$params = $url;
						}
					}

				}
				
			}else{

				$currentAction = 'index';
			}


		}else{

			$currentController = 'homeController';
			$currentAction = 'index';
		}


		
		if(!file_exists('controller/'.$currentController.'.php')){

			$currentController = 'notfoundController';
			$currentAction = 'index';

		}
		

		if(!method_exists($currentController, $currentAction)){

			$currentController = 'notfoundController';
			$currentAction = 'index';
		}

		/*echo "CONTROOLER: ".$currentController; echo "<br>";
		echo "Action: ".$currentAction;  echo "<br>";
		var_dump($params); exit;*/
		$c = new $currentController;
		call_user_func_array(array($c, $currentAction), $params);
	}
}

?>