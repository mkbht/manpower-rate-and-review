<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function adminLogin($username, $password) {
		$this->db->where(array('username' => $username));
		$query = $this->db->get('admin');
		if($query->num_rows() !=0) {
		$row = $query->row();
		if(password_verify($password, $row->pass)) {
			$this->session->set_userdata(array(
				'logged' => 1,
				username => $username
				));
			return 1;
		}
		}
		return 0;
	}

	public function getUsers() {
		$this->db->select('id, username, fname, lname, paddress');
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function getManpowers() {
		$this->db->select('id, name, address, phone, description, thumb');
		$query = $this->db->get('manpower');
		return $query->result_array();
	}

	public function addManpower() {
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$description = $this->input->post('description');
		$thumb = $this->input->post('thumb');
		$data = array(
				'name' => $name,
				'address' => $address,
				'phone' => $phone,
				'description' => $description,
				'thumb' => $thumb
			);
		$this->db->insert('manpower', $data);
	}

}

/* End of file Admin_Model.php */
/* Location: ./application/models/Admin_Model.php */