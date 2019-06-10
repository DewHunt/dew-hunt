<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Name extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('NameModel');
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
					'homeInfo' => $this->NameModel->GetNameInfo()
				);
				$this->load->view('name',$data);			
			}
		}

		public function AddName()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
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
				return redirect('Login');
			}
			else
			{
				$result = $this->NameModel->AddNameAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Saved');
					redirect(base_url()."Name/Name/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Saved');
					redirect(base_url()."Name/Name/Index");
				}
			}
		}

		public function EditName($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$data = array(
					'nameInfo' => $this->NameModel->GetNameInfoById($nameId)
				);

				$this->load->view('edit-name',$data);
			}			
		}

		public function EditNameAction()
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->NameModel->EditNameAction();

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Updated');
					redirect(base_url()."Name/Name/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Updated');
					redirect(base_url()."Name/Name/Index");
				}
			}			
		}

		public function DeleteName($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->NameModel->DeleteName($nameId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Deleted');
					redirect(base_url()."Name/Name/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Deleted');
					redirect(base_url()."Name/Name/Index");
				}
			}			
		}

		public function PublishedAndUnpublished($nameId)
		{
			if ($this->session->userdata('userName') == "" || $this->session->userdata('userPassword') == "")
			{
				return redirect('Login');
			}
			else
			{
				$result = $this->CommonModel->PublishedAndUnpublished('tbl_home',$nameId);

				if ($result)
				{
					$this->session->set_userdata('msg','Successfully Name Published On Website');
					redirect(base_url()."Name/Name/Index");
				}
				else
				{
					$this->session->set_userdata('errMsg','Name Not Published On Website');
					redirect(base_url()."Name/Name/Index");
				}
			}			
		}
	}
?>