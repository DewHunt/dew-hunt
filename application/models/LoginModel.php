<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class LoginModel extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function GetAllUsers()
		{
			$sql = "SELECT * FROM tbl_users WHERE Status = 1";

			$query = $this->db->query($sql);

			if ($query->num_rows() > 0)
			{
				return $query->result();
			}
		}
	}
?>