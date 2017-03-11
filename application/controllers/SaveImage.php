<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveImage extends CI_Controller {

	public function index()
	{
		$this->uploadImage("ss","featured");
	}
	private function uploadImage($name,$inputName){
		$config['upload_path'] = 'images';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1024';
		$config['max_width'] = '1024';
		$config['max_height'] = '1024';
		$config['remove_spaces'] = TRUE;
		$config['file_name'] = $name;
		$this->load->library("upload",$config);
		if ($this->upload->do_upload($inputName)) {
			// Files Upload Success
			echo "OK Good";
			$upload_data = $this->upload->data();  
  $file_name =   $upload_data['file_name'];
			echo $file_name;
	 
		} else {
			// Files Upload Not Success!!
			$errors = $this->upload->display_errors();
			echo $errors;
		}
	}
	
}
