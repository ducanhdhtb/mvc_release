<?php 
use app\core\Response;
class Home extends Controller
	{
		
		function __construct()
		{
			#code
		}

		public function Index()
		{
			//echo "This is function index In controller home";
			return Response::view('index');
		}

		public function Create($var1 ,$var2)
		{
			return Response::View('product');
		}

		public function edit()
		{
			echo "This is function edit In controller home";
		}
	}

 ?>