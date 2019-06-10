<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class AboutModel extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function GetAllAboutInfo()
		{
			$sql = "SELECT * FROM tbl_about_me WHERE Status = 1";

			$query = $this->db->query($sql);

			if ($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}

		public function AddAboutAction()
		{
			$data = array(
				'Title' => $this->input->post('title'),
				'Description' => $this->input->post('description'),
				'Keyword' => $this->input->post('keyword'),
				'Dob' => $this->input->post('dob'),
				'Email' => $this->input->post('email'),
				'Phone' => $this->input->post('phone'),
				'Address' => $this->input->post('address'),
				'Freelance' => $this->input->post('freelance'),
				'CreateBy' => $this->session->userdata('userId'),
				'CreateDateTime' => date('Y-m-d H:i:s')
			);

			$query = $this->db->insert('tbl_about_me',$data);

			return $query;
		}
	}
?>