<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* VMTIEN  Create Read Update Delete
*/



class Blog_manage extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
			
	}

	public function index()
	{
		$data = array();
		$data['posts'] = $this->Blog_model->get_all();

		$this->load->view('blog/post_list_view', $data);
	}


	public function create()
	{
		$post_data = $this->input->post();
		//var_dump($post_data);

		if (!empty($post_data['title']))
		{
			$this->Blog_model->insert($post_data);	
		}

		

		$this->load->view('blog/post_create_view');
	}

	public function edit($id)
	{
		$post = $this->Blog_model->get_by_id($id);

		if (empty($post))
		{
			echo 'Khong co du lieu';
			return FALSE;

		}



		$method =  $this->input->method();

		$msg = NULL;

		if ($method == 'post')
		{
			
			$post_data = $this->input->post(['title', 'thumb', 'body'], TRUE);

		


			$this->load->library('form_validation');			

			$this->form_validation->set_data($post_data);
			$this->form_validation->set_rules('title', 'Tên', 'required');
			$this->form_validation->set_rules('thumb', 'Hình', 'required');
			$this->form_validation->set_rules('body', 'Nôi dung', 'required');

			$this->form_validation->set_message('required', 'Chưa nhập {field} ');

			$this->form_validation->set_message('valid_email', 'Chưa đúng định dạng {field} ');




			$is_valid = $this->form_validation->run();

			if (! $is_valid)
			{
				$msg = validation_errors();
			}else
			{

				$is_edited = $this->Blog_model->update($id, $post_data);

				if ($is_edited > 0)
				{
					$msg = 'Chỉnh sửa xong';
					$post = $this->Blog_model->get_by_id($id);
				}
			}



			/*if (empty($post_data['name']))
			{
				$msg = 'Chưa nhập tên';

			}else if (empty($post_data['email']) )
			{
				$msg = 'Chưa nhập email';
			}else if (empty($post_data['phone']) )
			{
				$msg = 'Chưa nhập sdt';
			}else{


				


			}*/





			
		}


		$data = array( 
			'post' => $post,
			'msg' => $msg
		);
		$this->load->view('blog/post_edit_view', $data);
	}

	function delete()
	{
		$id = $this->input->post('id', TRUE);
		//$is_deleted = $this->User_model->delete($id);
		
		$is_deleted = TRUE;


		if ($is_deleted)
		{
			echo 'Đã xóa xong';
		}else{
			echo 'Chưa xóa ';
		}

	}

}

/* End of file Blog_manage.php */
/* Location: ./application/controllers/Blog_manage.php */