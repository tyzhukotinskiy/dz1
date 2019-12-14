<?php
	class Router{
		private $routes;

		public function __construct(){
			$routesPathFile = ROOT.'/config/routes.php';
			$this->routes = require($routesPathFile);
		}

		public function getURI(){
			if(!empty($_SERVER['REQUEST_URI'])){
				$uri = $_SERVER['REQUEST_URI'];
				return $uri;
			}
		}

		public function run(){
			$uri = $this->getURI();
			
			foreach($this->routes as $uriPattern => $path){
				if(preg_match("~$uriPattern~", $uri)){
					$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

					//очистка от пустых и лишних значений в виде дополнительной папки вначале пути
					$segments = array_diff(explode('/', $internalRoute), array(''));
					array_shift($segments);
					//Определение контроллера и экшена для данного $uri
					$controllerName = array_shift($segments).'Controller';
					$controllerName = ucfirst($controllerName);
					$actionName = 'action'.ucfirst(array_shift($segments));

					//Определение параметров для методов контроллера
					$parametres = $segments;

					//Подключение файлов контроллера
					$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
					if(file_exists($controllerFile)){
						require_once($controllerFile);
					}
					$controllerObject = new $controllerName();
					$result = call_user_func_array(array($controllerName, $actionName), $parametres);
					if($result!=null){
						break;
					}
				}
			}
		}
	}
?>