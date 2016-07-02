<?php
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation','', 'form');
		$this->load->model('admin_model', 'admin');
		$this->load->library('session');
	}

	function login() {
		$this->form->set_rules('username', 'Username', 'required|callback_password_check');
		$this->form->set_rules('pass', 'Password', 'required');
		if($this->form->run()) {
			redirect(base_url("admin/home"));
		}
		else {
			$this->load->view('adminlogin');
		}
	}

	function password_check($str) {
		$pass = $this->input->post('pass');
		if($this->admin->adminLogin($str, $pass) != 1) {
			$this->form->set_message('password_check', 'Username and Password does not match.');
			return FALSE;
		}
		else
			echo TRUE;

	}

	function home($type="") {
		if($type== "") {
			$data['username'] = $this->session->userdata('username');
			$data['users'] = $this->admin->getUsers();
			$this->load->view('admin/home', $data);
		}
		elseif($type=="manpower") {
			$data['username'] = $this->session->userdata('username');
			$data['manpower'] = $this->admin->getManpowers();
			$this->load->view('admin/manpower', $data);
		}
	}

	function addmanpower() {
		$this->form->set_rules('name', 'Manpower Name', 'required|min_length[4]');
		$this->form->set_rules('address', 'Address', 'required');
		$this->form->set_rules('phone', 'Phone Number', 'required');
		$this->form->set_rules('description', 'Description', 'required');
		$this->form->set_rules('thumb', 'Thumbnail', 'required');
		if($this->form->run()) {
			$this->admin->addManpower();
			redirect(base_url("admin/home/manpower"));
		}
		else {
			$this->load->view('admin/addmanpower');
		}
	}

}