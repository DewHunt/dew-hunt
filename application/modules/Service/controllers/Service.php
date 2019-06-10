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
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$data = array(
					'serviceInfo' => $this->ServiceModel->GetAllServiceInfo()
				);
				$this->load->view('list-of-service',$data);			
			}
		}

		public function ServiceAdd()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$this->load->view('service-page');				
			}			
		}

		public function ServiceAddAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->ServiceModel->ServiceAdd();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Service Saved');
					redirect(base_url()."Service/Service/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Service Not Saved');
					redirect(base_url()."Service/Service/Index");
				}
			}
		}

		public function EditService($serviceId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$data = array(
					'serviceInfo' => $this->ServiceModel->GetServiceInfoById($serviceId)
				);

				$this->load->view('edit-service',$data);
			}			
		}

		public function EditServiceAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$serviceId = $this->input->post('service-id');
				$result = $this->ServiceModel->EditServiceAction($serviceId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Service Updated');
					redirect(base_url()."Service/Service/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Service Not Updated');
					redirect(base_url()."Service/Service/Index");
				}
			}				
		}

		public function DeleteService($serviceId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->ServiceModel->DeleteService($serviceId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Delete Service');
					redirect(base_url()."Service/Service/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Service Not Deleted');
					redirect(base_url()."Service/Service/Index");
				}
			}
		}

		public function Published($serviceId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->CommonModel->Published('tbl_services',$serviceId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Published Service On Website');
					redirect(base_url()."Service/Service/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Service Not Published');
					redirect(base_url()."Service/Service/Index");
				}
			}
		}

		public function Unpublished($serviceId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->CommonModel->Unpublished('tbl_services',$serviceId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Unublished Service On Website');
					redirect(base_url()."Service/Service/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Service Not Unpublished');
					redirect(base_url()."Service/Service/Index");
				}
			}
		}
	}
?>