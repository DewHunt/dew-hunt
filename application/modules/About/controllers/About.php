<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class About extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('AboutModel');
		}

		public function Index()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$data = array(
					'aboutInfo' => $this->AboutModel->GetAllAboutInfo()
				);

				$this->load->view('about',$data);
			}
		}

		public function AddAbout()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$this->load->view('add-about');			
			}
		}

		public function AddAboutAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->AboutModel->AddAboutAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully About Saved');
					redirect(base_url()."About/About/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','About Not Saved');
					redirect(base_url()."About/About/Index");
				}
			}
		}
	}
?>