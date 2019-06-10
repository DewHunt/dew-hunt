<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class DesignationModel extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function GetAllDesignationInfo()
		{
			$sql = "SELECT * FROM tbl_home_designation WHERE Status = 1";

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

		public function AddDesignationAction()
		{
			$data = array(
				'Designation' => $this->input->post('designation'),
				'CreateBy' => $this->session->userdata('userId'),
				'CreateDateTime' => date('Y-m-d H:i:s')
			);

			$query = $this->db->insert('tbl_home_designation',$data);

			return $query;
		}

		public function GetDesignationInfoById($nameId)
		{
			$sql = "SELECT * FROM tbl_home_designation WHERE Id = $nameId";

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

		public function EditDesignationAction()
		{
			$designationId = $this->input->post('designation-id');

			$data = array(
				'Designation' => $this->input->post('designation'),
				'UpdateBy' => $this->session->userdata('userId'),
				'UpdateDateTime' => date('Y-m-d H:i:s')
			);

			$this->db->where('Id',$designationId);
			$updateQuery = $this->db->update('tbl_home_designation',$data);

			return $updateQuery;
		}

		public function DeleteDesignation($designationeId)
		{
			$data = array(
				'Status' => 0,
				'DeleteBy' => $this->session->userdata('userId'),
				'DeleteDateTime' => date('Y-m-d H:i:s')
			);

			$this->db->where('Id',$designationeId);
			$deleteQuery = $this->db->update('tbl_home_designation',$data);

			return $deleteQuery;			
		}
	}
?>