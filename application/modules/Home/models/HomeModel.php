<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class HomeModel extends CI_MODEL
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

		public function PublishedName($nameId)
		{
			$removePublishedSql = "UPDATE tbl_home SET Display = 0 WHERE Display = 1 AND Status = 1";

			$removePublishedQuery = $this->db->query($removePublishedSql);

			$setPublishedSql = "UPDATE tbl_home SET Display = 1 WHERE Id = $nameId";

			$setPublishedQuery = $this->db->query($setPublishedSql);

			if ($setPublishedQuery)
			{
				return true;
			}
			else
			{
				return false;
			}
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

		public function PublishedDesignation($designationId)
		{
			$publishedSql = "UPDATE tbl_home_designation SET Display = 1 WHERE Id = $designationId";

			$publishedQuery = $this->db->query($publishedSql);

			if ($publishedQuery)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function UnpublishedDesignation($designationId)
		{
			$unpublishedSql = "UPDATE tbl_home_designation SET Display = 0 WHERE Id = $designationId";

			$unpublishedQuery = $this->db->query($unpublishedSql);

			if ($unpublishedQuery)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>