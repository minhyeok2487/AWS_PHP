<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {       
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
		$this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('foot');
	}

	public function login_reg()
	{
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');
		$result = $this->user_model->login($user_email, $user_password);
		if($result != null){
			$this->session->set_userdata(array('user'=>$result));
			$res = array('result' => 'success');
		} else {
			$error_array = array();
			array_push($error_array, '이메일 또는 비밀번호가 틀립니다');
			$res = array('result' => 'error', 'error_array' => $error_array);
		}
		echo json_encode($res);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("http://13.209.140.99/index.php/login");
	}
}
