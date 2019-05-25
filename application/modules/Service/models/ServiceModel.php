<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class ServiceModel extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function ServiceAdd()
		{
			// Start Copy Image and Get Image New Name
			$config['upload_path'] = "assets/web2/images/service/";
			$config['allowed_types'] = "jpg|jpeg|png|gif";
			$this->load->library('upload',$config);

			$iconImage = $_FILES['icon-image']['name'];
			// $slugName = $this->input->post('service-title');

			if ($iconImage == "")
			{
				$dbImageName = "";
			}
			else
			{
				$extension = pathinfo($iconImage, PATHINFO_EXTENSION);
				$slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '_', $this->input->post('service-title')));
				$dbImageName = $slug."_icon.".$extension;
				$copyImageName = $config['upload_path'].$dbImageName;

				copy($_FILES['icon-image']['tmp_name'],$copyImageName);
			}
			// End Copy Image and Get Image New Name

			$data = array(
				'Title' => $this->input->post('service-title'),
				'Icon' => $dbImageName,
				'Description' => $this->input->post('service-description'),
				'CreateBy' => $this->session->userdata('adminId'),
				'CreateDateTime' => date('Y-m-d H:i:s')
			);

			$serviceQuery = $this->db->insert('tbl_services',$data);

			return $serviceQuery;
		}

		public function GetAllServiceInfo()
		{
			$sql = "SELECT * FROM tbl_services WHERE Status = 1";

			$serviceQuery = $this->db->query($sql);

			if ($serviceQuery->num_rows() > 0)
			{
				return $serviceQuery->result();
			}
			else
			{
				return false;
			}
		}

		public function GetServiceInfoById($serviceId)
		{
			$sql = "SELECT * FROM tbl_services WHERE Id = '$serviceId' AND Status = 1";

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
	}
?>