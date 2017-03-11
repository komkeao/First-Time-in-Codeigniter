<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveImage extends CI_Controller {

	public function index()
	{
		$config['upload_path'] = 'images';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '10000';
		$config['max_width'] = '1024';
		$config['max_height'] = '1024';
		$config['remove_spaces'] = TRUE;
		$this->load->library("upload",$config);
		if ($this->upload->do_upload('featured')) {
// Files Upload Success
echo "OK Good";
var_dump($this->upload->data('featured'));
 
} else {
// Files Upload Not Success!!
$errors = $this->upload->display_errors();
echo $errors;
 
} // End else
	}

	
}

/* End of file SaveImage.php */
/* Location: ./application/controllers/SaveImage.php */