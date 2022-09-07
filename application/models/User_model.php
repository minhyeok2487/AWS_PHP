<?php
class User_model extends CI_Model {
 
    function __construct()
    {       
        parent::__construct();
    }
 
    function gets(){
        return $this->db->query("SELECT * FROM user_table")->result();
    }
 
    function get_user_no($user_no){
        return $this->db->get_where('user_table', array('user_no'=>$user_no))->row();
    }

    function get_user_eamil($user_email){
        return $this->db->get_where('user_table', array('user_email'=>$user_email))->row();
    }

    function signup($data) {
        return $this->db->insert('user_table', $data);
    }

    function login($user_email, $user_password){
        return $this->db->get_where('user_table', array('user_email'=>$user_email, 'user_password'=>$user_password))->row_array();
    }
}