<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Home extends CI_Controller
	{		
		public function __construct()
		{
			parent::__construct();
		}

		public function Index()
		{
			echo "This Home Modules";
		}

		public function Test()
		{
			$this->load->view('test');
		}
	}
?>