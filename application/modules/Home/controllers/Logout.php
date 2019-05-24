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
			$this->session->unset_userdata('adminUserName');
			$this->session->unset_userdata('adminPassword');

			$this->load->view('logout');
		}
	}
?>