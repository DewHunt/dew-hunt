<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Icon extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('IconModel');
		}

		public function Index()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				echo "Icon Page";			
			}
		}
	}
?>