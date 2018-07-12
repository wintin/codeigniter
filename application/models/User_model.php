<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_by_id($id)
	{
		$data = $this->db->query("SELECT * FROM users WHERE id = " . $id)->row();

		return $data;
	}

	

	public function get_all()
	{
		$data = $this->db->query("SELECT * FROM users")->result();
		return $data;
	}

	public function insert($data)
	{
		$this->db->insert('users', $data);
		return $this->db->insert_id();




	}

	public function update($id, $data)
	{

		$this->db->update('users', $data, array('id' => $id));


		//update users set (ads=asd=a) WHERE id = $id

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->delete('users', array('id' => $id));
		return $this->db->affected_rows();
	}

	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */