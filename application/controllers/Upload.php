<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* VMTIEN 
*/

class Upload extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');	
	}

	public function index()
	{
		var_dump($_FILES);
		
	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */