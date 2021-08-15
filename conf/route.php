<?php

class Route
{
	public static function createRoute() {

		/*Контроллер и action по умолчанию*/
		$controllerName = "IndexController";
		$modelName = "IndexModel";
		$action = "action";

		$route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

		$i = count($route) - 1;

		while ($i > 0) {
			if ($route[$i] != 'index.php') {
				if ($route[$i] != '') {
					if (is_file(CONTROLLER_PATH . ucfirst($route[$i]). "Controller.php") ) {
						$controllerName = ucfirst($route[$i]. "Controller");
						break;
					} else {
						$action = $route[$i];
					}
				}
			} else {
				break;
			}
			$i--;
		}

		// /*Определяем контроллер*/
		// if($route[1] != '') {
		// 	$controllerName = ucfirst($route[1]. "Controller");
		// 	$modelName = ucfirst($route[1]. "Model");
		// }


		require_once CONTROLLER_PATH . $controllerName . ".php"; //IndexController.php
		//require_once MODEL_PATH . $modelName . ".php"; //IndexModel.php

		// if(isset($route[2]) && $route[2] !='') {
		// 	$action = $route[2];
		// }

		$controller = new $controllerName();
		$controller->$action(); // $controller->index();

	}

	function ErrorPage404()
	{
        // $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        // header('HTTP/1.1 404 Not Found');
		// header("Status: 404 Not Found");
		// header('Location:'.$host.'404');
    }
}