<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
        $this->load->config('regexp');
    }

    public function index()
    {
        $this->load->view('head');
        $data['email_regexp'] = $this->config->item('email_regexp');
        $data['pw_regexp'] = $this->config->item('pw_regexp');
        $data['pw_regnum'] = $this->config->item('pw_regnum');
        $data['pw_keyboard'] = $this->config->item('pw_keyboard');
        $this->load->view('signup', $data);
        $this->load->view('foot');
    }

    public function email_check()
    {
        $email_regexp = $this->config->item('email_regexp');
        $user_email = $this->input->post('user_email');
        if (preg_match($email_regexp, $user_email)) {
            $result = $this->user_model->get_user_eamil($user_email);
            if ($result == null) {
                $res = array(
                    "msg"        => "사용 가능한 이메일 입니다.",
                    "possible"    => true
                );
            } else {
                $res = array(
                    "msg"        => "이미 존재하는 이메일 입니다",
                    "possible"    => false
                );
            }
        } else {
            $res = array(
                "msg"        => "올바른 이메일 형식이 아닙니다",
                "possible"    => false
            );
        }

        echo json_encode($res);
    }

    public function signup_reg()
    {
        $possible = true;
        $user_email = $this->input->post('user_email');
        $user_password = $this->input->post('user_password');
        $user_name = $this->input->post('user_name');
        $user_group = $this->input->post('user_group');
        $user_position = $this->input->post('user_position');
        $user_ments = $this->input->post('user_ments');
        $data = array(
            'user_email' => $user_email,
            'user_password' => $user_password,
            'user_name' => $user_name,
            'user_group' => $user_group,
            'user_position' => $user_position,
            'user_ments' => $user_ments
        );
        $email_regexp = $this->config->item('email_regexp');
        $pw_regexp = $this->config->item('pw_regexp');
        $pw_regnum = $this->config->item('pw_regnum');
        $pw_keyboard = $this->config->item('pw_keyboard');
        if (!preg_match($email_regexp, $user_email)) {
            $possible = false;
        }
        if (!preg_match($pw_regexp, $user_password)) {
            $possible = false;
        }
        if (preg_match($pw_regnum, $user_password)) {
            $possible = false;
        }
        for ($i = 0; $i < strlen($user_password) - 2; $i++) {
            $slice_pw = substr($user_password, $i, 3);
            foreach ($pw_keyboard as $value) {
                if (strpos($value, $slice_pw)) {
                    $possible = false;
                }
            }
        }

        if ($possible) {
            $signup = $this->user_model->signup($data);
            if ($signup) {
                $res = array(
                    'result' => 'success',
                    'msg' => '회원가입이 성공하였습니다'
                );
            } else {
                $res = array('result' => 'error', 'msg' => '회원가입이 실패하였습니다.');
            }
        } else {
            $res = array('result' => 'error', 'msg' => '백엔드 유효성 에러 발생');
        }
        echo json_encode($res);
    }
}
