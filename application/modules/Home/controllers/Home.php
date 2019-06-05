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
			$this->load->model('HomeModel');
		}

		public function Index()
		{
			$data = array(
				'homeInfo' => $this->ServiceModel->GetAllServiceInfo()
			);
			$this->load->view('list-of-service',$data);
		}

		public function Name()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$data = array(
					'homeInfo' => $this->HomeModel->GetNameInfo()
				);
				$this->load->view('name',$data);			
			}
		}

		public function AddName()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$this->load->view('add-name');			
			}			
		}

		public function AddNameAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->AddNameAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Saved');
					redirect(base_url()."Home/Home/Name");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Saved');
					redirect(base_url()."Home/Home/Name");
				}
			}
		}

		public function EditName($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$data = array(
					'nameInfo' => $this->HomeModel->GetNameInfoById($nameId)
				);

				$this->load->view('edit-name',$data);
			}			
		}

		public function EditNameAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->EditNameAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Updated');
					redirect(base_url()."Home/Home/Name");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Updated');
					redirect(base_url()."Home/Home/Name");
				}
			}			
		}

		public function DeleteName($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->DeleteName($nameId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Deleted');
					redirect(base_url()."Home/Home/Name");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Deleted');
					redirect(base_url()."Home/Home/Name");
				}
			}			
		}

		public function PublishedName($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->PublishedName($nameId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Published On Website');
					redirect(base_url()."Home/Home/Name");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Published On Website');
					redirect(base_url()."Home/Home/Name");
				}
			}			
		}

		public function Designation()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$data = array(
					'designationInfo' => $this->HomeModel->GetAllDesignationInfo()
				);
				$this->load->view('designation',$data);			
			}
		}

		public function AddDesignation()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$this->load->view('add-designation');			
			}			
		}

		public function AddDesignationAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->AddDesignationAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Saved');
					redirect(base_url()."Home/Home/Designation");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Saved');
					redirect(base_url()."Home/Home/Designation");
				}
			}
		}

		public function EditDesignation($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$data = array(
					'designationInfo' => $this->HomeModel->GetDesignationInfoById($nameId)
				);

				$this->load->view('edit-designation',$data);
			}			
		}

		public function EditDesignationAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->EditDesignationAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Updated');
					redirect(base_url()."Home/Home/Designation");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Updated');
					redirect(base_url()."Home/Home/Designation");
				}
			}			
		}

		public function DeleteDesignation($designationId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->DeleteDesignation($designationId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Deleted');
					redirect(base_url()."Home/Home/Designation");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Deleted');
					redirect(base_url()."Home/Home/Designation");
				}
			}			
		}

		public function PublishedDesignation($designationId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->PublishedDesignation($designationId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Published On Website');
					redirect(base_url()."Home/Home/Designation");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Published On Website');
					redirect(base_url()."Home/Home/Designation");
				}
			}			
		}

		public function UnpublishedDesignation($designationId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Home/Login');
			}
			else
			{
				$result = $this->HomeModel->UnpublishedDesignation($designationId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Unpublished On Website');
					redirect(base_url()."Home/Home/Designation");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Unpublished On Website');
					redirect(base_url()."Home/Home/Designation");
				}
			}			
		}
	}
?>