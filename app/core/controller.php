<?php 
	/**
	* 
	*/
	class Controller
	{
		
		function __construct()
		{
			# code...
		}

		public function model($md)
		{
			require_once '../app/models/'.$md.'.php';
			return new $md;
		}

		public function view($view, $data = null)
		{
			require_once ('../app/views/'. $view . '.php' );
		}
		
	}
 ?>