<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class NameModel extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function GetNameInfo()
		{
			$sql = "SELECT * FROM tbl_home WHERE Status = 1";

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

		public function AddNameAction()
		{
			$data = array(
				'Name' => $this->input->post('name'),
				'CreateBy' => $this->session->userdata('userId'),
				'CreateDateTime' => date('Y-m-d H:i:s')
			);

			$query = $this->db->insert('tbl_home',$data);

			return $query;
		}

		public function GetNameInfoById($nameId)
		{
			$sql = "SELECT * FROM tbl_home WHERE Id = $nameId";

			$query = $this->db->query($sql);

			if ($query->num_rows() > 0)
			{
				return $query->row();
			}
			else
			{
				return false;
			}
		}

		public function EditNameAction()
		{
			$nameId = $this->input->post('name-id');

			$data = array(
				'Name' => $this->input->post('name'),
				'UpdateBy' => $this->session->userdata('userId'),
				'UpdateDateTime' => date('Y-m-d H:i:s')
			);

			$this->db->where('Id',$nameId);
			$updateQuery = $this->db->update('tbl_home',$data);

			return $updateQuery;
		}

		public function DeleteName($nameId)
		{
			$data = array(
				'Status' => 0,
				'DeleteBy' => $this->session->userdata('userId'),
				'DeleteDateTime' => date('Y-m-d H:i:s')
			);

			$this->db->where('Id',$nameId);
			$deleteQuery = $this->db->update('tbl_home',$data);

			return $deleteQuery;			
		}
	}
?>