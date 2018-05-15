<?php 
/**
* 
*/
class App
{
	protected $controller = 'home'; // Default controller is home 
	protected $method = 'index'; 	// Default method is index
	protected $params = [];
	function __construct()
	{
		include_once('view.php');
		$url = $this -> parseUrl();

		if(file_exists('../app/controllers/'.$url[0].'.php'))
		{
			$this -> controller = $url[0];
			require_once('../app/controllers/'.$url[0].'.php');
			unset($url[0]);
		}

			$this->controller = new $this->controller;// controller is an object

			if(isset($url[1]))
			{		//method_exists ( $object, $method_name ); --Check method exist in object or no!--
				if(method_exists($this->controller,$url['1']))
				{
					$this -> method = $url[1];
					unset($url[1]);
				}
				else{
					echo " method  not exist"."<br>";
				}
			}
			$this->params = $url ? array_values($url) :[];
			call_user_func_array([$this->controller,$this->method],$this->params);//param = [];

		}

		public function parseUrl()
		{
			if (isset($_GET['url']))
			{
				$geturl = rtrim($_GET['url'],'');
				return $url = explode('/',$geturl);
				
			}
		}
	}

	?>