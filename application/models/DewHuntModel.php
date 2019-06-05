<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class DewHuntModel extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function ServiceInfo()
		{
			$sql = "SELECT * FROM tbl_services WHERE Status = 1";
			$query = $this->db->query($sql)->result();

			return $query;
		}

		public function HomeInfo()
		{
			$sql = "SELECT * FROM tbl_home WHERE Status = 1 AND Display = 1";
			$query = $this->db->query($sql)->row();

			return $query;
		}

		public function HomeDesignationInfo()
		{
			$sql = "SELECT * FROM tbl_home_designation WHERE Status = 1 AND Display = 1";
			$query = $this->db->query($sql)->result();

			return $query;
		}
	}
?>