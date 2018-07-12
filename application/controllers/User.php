<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* VMTIEN 
*/

class User extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');

	}

	public function index()
	{
		$data = array();
		$data['users'] = $this->User_model->get_all();

		$this->load->view('user/list_view', $data);
		


	}

	public function create()
	{
		$post_data = $this->input->post();
		//var_dump($post_data);

		if (!empty($post_data['email']))
		{
			$this->User_model->insert($post_data);	
		}

		

		$this->load->view('user/create_view');
	}

	public function edit($id)
	{
		$user = $this->User_model->get_by_id($id);

		if (empty($user))
		{
			echo 'Khong co du lieu';
			return FALSE;

		}



		$method =  $this->input->method();

		$msg = NULL;

		if ($method == 'post')
		{
			//$post_data = $this->input->post('name');			
			$name = $this->input->post('name', TRUE);

			/*$post_data = array( 
				'name' => $name,
				'email' => $this->input->post('email', TRUE),
				'phone' => $this->input->post('phone', TRUE)
			);*/

			$post_data = $this->input->post(['name', 'email', 'phone'], TRUE);

			/*foreach(['name', 'email', 'phone'] as $k)
			{
				$data[$k] = $this->input->post($k, TRUE);

			}*/



			$this->load->library('form_validation');			

			$this->form_validation->set_data($post_data);
			$this->form_validation->set_rules('name', 'Tên', 'required');
			$this->form_validation->set_rules('email', 'Địa chỉ email', 'required|valid_email');
			$this->form_validation->set_rules('phone', 'Số điện thoại', 'required');

			$this->form_validation->set_message('required', 'Chưa nhập {field} ');

			$this->form_validation->set_message('valid_email', 'Chưa đúng định dạng {field} ');




			$is_valid = $this->form_validation->run();

			if (! $is_valid)
			{
				$msg = validation_errors();
			}else
			{

				$is_edited = $this->User_model->update($id, $post_data);

				if ($is_edited > 0)
				{
					$msg = 'Chỉnh sửa xong';
					$user = $this->User_model->get_by_id($id);
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
			'user' => $user,
			'msg' => $msg
		);
		$this->load->view('user/edit_view', $data);
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

/* End of file User.php */
/* Location: ./application/controllers/User.php */