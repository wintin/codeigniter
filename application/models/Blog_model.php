<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_by_id($id)
	{
		$id = (int) $id;

		$data = $this->db->query("SELECT * FROM posts WHERE id = " . $id)->row();

		return $data;
	}


	public function get_all()
	{
		$data = $this->db->query("SELECT * FROM posts")->result();
		return $data;
	}

	public function insert($data)
	{
		$this->db->insert('posts', $data);
		return $this->db->insert_id();




	}

	public function update($id, $data)
	{

		$this->db->update('posts', $data, array('id' => $id));


		//update users set (ads=asd=a) WHERE id = $id

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->delete('posts', array('id' => $id));
		return $this->db->affected_rows();
	}

	

}

/* End of file Blog_model.php */
/* Location: ./application/models/Blog_model.php */