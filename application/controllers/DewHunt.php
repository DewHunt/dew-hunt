<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DewHunt extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('DewHuntModel');
		}

		public function index()
		{
			$data['serviceInfo'] = $this->DewHuntModel->ServiceInfo();

			$this->load->view('web2/include/header');
			$this->load->view('web2/include/main-body',$data);
			$this->load->view('web2/include/footer');
		}
	}
?>
