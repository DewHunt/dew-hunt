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
			$imagePath = "assets/web2/images/service/";
			$imageName = $_FILES['icon-image']['name'];
			$imageTitle = $this->input->post('service-title')."_icon";

			$dbImageName = $this->CommonModel->AddImage($imagePath,$imageName,$imageTitle);

			$data = array(
				'Title' => $this->input->post('service-title'),
				'Icon' => $dbImageName,
				'Description' => $this->input->post('service-description'),
				'CreateBy' => $this->session->userdata('userId'),
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

		public function EditServiceAction($serviceId)
		{
			$imageName = $_FILES['icon-image']['name'];
			$previousImageName = $this->input->post('previous-icon-image');
			$imagePath = "assets/web2/images/service/";
			$imageTitle = $this->input->post('service-title')."_icon";

			$dbImageName = $this->CommonModel->UpdateImage($imageName,$previousImageName,$imagePath,$imageTitle);

			$data = array(
				'Title' => $this->input->post('service-title'),
				'Icon' => $dbImageName,
				'Description' => $this->input->post('service-description'),
				'UpdateBy' => $this->session->userdata('userId'),
				'UpdateDateTime' => date('Y-m-d H:i:s')
			);

			$this->db->where('id',$serviceId);
			$updateQuery = $this->db->update('tbl_services',$data);

			return $updateQuery;
		}

		public function DeleteService($serviceId)
		{
			$sql = "DELETE FROM tbl_services WHERE Id = $serviceId AND Status = 1";

			$query = $this->db->query($sql);

			if ($query)
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