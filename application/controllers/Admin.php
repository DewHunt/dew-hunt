<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			// $this->load->view('web/include/header');
			// $this->load->view('web/include/main-body');
			// $this->load->view('web/include/footer');
		}

		public function Login()
		{
			$this->load->view('login');
		}

		public function Registration()
		{
			$this->load->view('sign-up');
		}

		public function Dashboard()
		{
			if ($this->session->userdata('adminUserName') == "" || $this->session->userdata('adminPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$this->load->view('dashboard');
			}
		}
	}
?>
