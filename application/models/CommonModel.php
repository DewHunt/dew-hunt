<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class CommonModel extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function AddImage($imagePath,$imageName,$imageTitle)
		{
			$config['upload_path'] = "assets/web2/images/service/";
			$config['allowed_types'] = "jpg|jpeg|png|gif";
			$this->load->library('upload',$config);

			if ($imageName == "")
			{
				$dbImageName = "";
				return $dbImageName;
			}
			else
			{
				$extension = pathinfo($imageName, PATHINFO_EXTENSION);
				$slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '_', $imageTitle));
				$dbImageName = $slug.".".$extension;
				$copyImageName = $config['upload_path'].$dbImageName;

				copy($_FILES['icon-image']['tmp_name'],$copyImageName);
				return $dbImageName;
			}
		}

		public function UpdateImage($imageName,$previousImageName,$imagePath,$imageTitle)
		{
			if ($imageName != "")
			{
				// Copy Image and Get Image New Name
				$config['upload_path'] = $imagePath;
				$config['allowed_types'] = "jpg|jpeg|png|gif";
				$this->load->library('upload',$config);

				$extension = pathinfo($imageName, PATHINFO_EXTENSION);
				$slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '_', $imageTitle));
				$dbImageName = $slug.".".$extension;
				$copyImageName = $config['upload_path'].$dbImageName;

				// if ($previousImage != "")
				// {					
				// 	$deleteImage = $config['upload_path'].$previousImage;

				// 	if (file_exists($deleteImage))
				// 	{
				// 		chown($deleteImage, 666);
				// 		unlink($deleteImage);
				// 	}
				// }

				copy($_FILES['icon-image']['tmp_name'],$copyImageName);
				return $dbImageName;
			}
			else
			{
				$dbImageName = $previousImageName;
				return $dbImageName;
			}
		}
	}
?>