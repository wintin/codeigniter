<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* VMTIEN 
*/

class MY_Controller extends CI_Controller 
{
	protected $temp;
	public function __construct()
	{
		parent::__construct();
		$this->temp = array(
			'template' => '',
			'data' => array()
		 );
			
	}

	public function render()
	{
		$this->load->view('layout/layout_view', $this->temp);
		
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */