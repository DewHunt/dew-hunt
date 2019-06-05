<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Logout extends CI_Controller
	{		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('LoginModel');
		}

		public function Index()
		{
			$this->session->unset_userdata('userName');
			$this->session->unset_userdata('userPassword');

			$this->load->view('logout');
		}
	}
?>