<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('user_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$user = $this->session->userdata('user');
		if ($user == null) {
			redirect("http://13.209.140.99/index.php/login");
		} else {
			$this->load->view('head');
			$this->load->view('main');
			$this->load->view('foot');
		}
	}
}
