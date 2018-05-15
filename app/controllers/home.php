<?php 
use app\core\Response;
use models\Model;
class Home extends Controller
	{
		
		function __construct()
		{
			#code
		}

		public function Index()
		{
			$x = $this->model('user');
			$data['ten'] = 'Anh';
			
			$this -> view('home/example',$data);
		}

		public function Create()
		{
			
		}

		public function edit()
		{
			echo "This is function edit In controller home";
		}
	}

 ?>