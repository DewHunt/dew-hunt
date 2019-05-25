<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Service extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('ServiceModel');
		}

		public function Index()
		{
			$data = array(
				'serviceInfo' => $this->ServiceModel->GetAllServiceInfo()
			);
			$this->load->view('list-of-service',$data);
		}

		public function ServiceAdd()
		{
			if ($this->session->userdata('adminUserName') == "" || $this->session->userdata('adminPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$this->load->view('service-page');				
			}			
		}

		public function ServiceAddAction()
		{
			if ($this->session->userdata('adminUserName') == "" || $this->session->userdata('adminPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->ServiceModel->ServiceAdd();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Data Saved');
					redirect(base_url()."Service/Service/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Data Not Saved');
					redirect(base_url()."Service/Service/Index");
				}
			}
		}

		public function EditService($serviceId)
		{
			if ($this->session->userdata('adminUserName') == "" || $this->session->userdata('adminPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$data = array(
					'serviceInfo' => $this->ServiceModel->GetServiceInfoById($serviceId)
				);

				$this->load->view('edit-service',$data);
			}			
		}
	}
?>