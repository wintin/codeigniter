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
			
	}

	public function index()
	{
		$this->load->view('upload/form_upload_view');
	}

	public function submit()
	{

		/*var_dump($_FILES);

		$new_file = 'uploads/' . basename($_FILES["file"]["name"]);

		$is_success = move_uploaded_file($_FILES["file"]["tmp_name"], $new_file);
		if ($is_success)
		{
			echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		}else{
			echo "Sorry, there was an error uploading your file.";
		}*/

		$config = array( 
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|png|gif|docx|xlsx|zip',
			'max_size' => 1024*1024*10,

		);

		$this->load->library('upload', $config);

		$response = array( 
			'success' => FALSE,
			'link' => ''
		);

		 if ($this->upload->do_upload('file'))
		 {
		 	//var_dump( $this->upload->data() );

		 	$data = $this->upload->data();

		 	$link = '/uploads/' . $data['file_name'];

		 	$response['link'] = $link;
		 	$response['success'] = TRUE;

		 }else{

		 	$response['message'] = $this->upload->display_errors();

		 	//var_dump($this->upload->display_errors());
		 	
		 }

		 echo json_encode($response);


		// echo "{success:". $response['success'] . ", link: '". $response['link'] . "'}";




	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/backend/Upload.php */