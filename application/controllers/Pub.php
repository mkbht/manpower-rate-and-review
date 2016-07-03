<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pub extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->database();
		//$this->load->model("Main_model");
	}

	public function index()
	{
		$data['title'] = "My company name";
		$this->load->view('index',$data);
	}
	public function manpower($id = FALSE) {
		if(!$id)
			show_404();
		$data['title'] = "A Company Website";
		$this->load->view("manpower",$data);
	}
}
