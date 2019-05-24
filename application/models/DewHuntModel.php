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
	}
?>