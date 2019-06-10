<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Designation extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('DesignationModel');
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
					'designationInfo' => $this->DesignationModel->GetAllDesignationInfo()
				);
				$this->load->view('designation',$data);			
			}
		}

		public function AddDesignation()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
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
				return redirect('Login');
			}
			else
			{
				$result = $this->DesignationModel->AddDesignationAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Saved');
					redirect(base_url()."Designation/Designation/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Saved');
					redirect(base_url()."Designation/Designation/Index");
				}
			}
		}

		public function EditDesignation($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$data = array(
					'designationInfo' => $this->DesignationModel->GetDesignationInfoById($nameId)
				);

				$this->load->view('edit-designation',$data);
			}			
		}

		public function EditDesignationAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->DesignationModel->EditDesignationAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Updated');
					redirect(base_url()."Designation/Designation/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Updated');
					redirect(base_url()."Designation/Designation/Index");
				}
			}			
		}

		public function DeleteDesignation($designationId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->DesignationModel->DeleteDesignation($designationId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Deleted');
					redirect(base_url()."Designation/Designation/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Deleted');
					redirect(base_url()."Designation/Designation/Index");
				}
			}			
		}

		public function Published($designationId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->CommonModel->Published('tbl_home_designation',$designationId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Published On Website');
					redirect(base_url()."Designation/Designation/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Published On Website');
					redirect(base_url()."Designation/Designation/Index");
				}
			}			
		}

		public function Unpublished($designationId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->CommonModel->Unpublished('tbl_home_designation',$designationId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Designation Unpublished On Website');
					redirect(base_url()."Designation/Designation/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Designation Not Unpublished On Website');
					redirect(base_url()."Designation/Designation/Index");
				}
			}			
		}
	}
?>