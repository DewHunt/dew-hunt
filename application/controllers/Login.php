<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Login extends CI_Controller
	{		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('LoginModel');
		}

		public function Index()
		{
			$data['errMsg'] = "";
			// $this->session->unset_userdata('userName');
			// $this->session->unset_userdata('userPassword');

			$errMsg = $this->input->get('errMsg');

			if ($errMsg)
			{
				$data['errMsg'] = $errMsg;
			}

			$this->load->view('login',$data);
		}

		public function LoginCheck()
		{
			$userName = $this->input->post('user-name');
			$password = $this->input->post('password');

			$allUsers = $this->LoginModel->GetAllUsers();

			foreach ($allUsers as $value)
			{
				if ($value->UserName == $userName && $value->Password == $password)
				{
					$sessionInfo = [
						'userName' => $value->UserName,
						'userPassword' => $value->Password,
						'userId' => $value->Id
					];

					$this->session->set_userdata($sessionInfo);
					redirect(base_url()."Admin/Dashboard");
				}
				else
				{
					$errMsg = "Login Failed. User Name Or Password Doesn't Matched";
					redirect(base_url()."Login/Index?errMsg=$errMsg");
				}
			}
		}
	}
?>