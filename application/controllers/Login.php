<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_login');
        
        
    }
    public function index()
    {
        $this->config->load('urls',true);
        $data['url'] = $this->config->item('urls');
        $this->load->view('admin/login',$data);
        
    }
    public function login_check(){
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    
    if ($this->form_validation->run()) {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $check =  $this->db_login->login_check($data);
        if(!is_null($check))
        {
            $this->session->set_userdata("id",$check['user_id']);
            $this->session->set_userdata("name",$check['user_name']);
            $array = array(
                'error'   => false,
                'msg'     => base_url().'admin/dashboard',
               );
        }
        else
        {
            $array = array(
                'error'   => true,
                'msg'     => '<p class="text-center text-danger">Wrong Username Or Password</p>'
               );
        }
      
    }
    else 
    {
        $array = array(
            'form'   => true,
            'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
           );
    } 
         echo json_encode($array);
    }
    public function user_login(){
        $this->form_validation->set_rules('pno', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run()) {
        $data['mobile_no'] = $this->input->post('pno');
        $data['password'] = $this->input->post('password');
        $check =  $this->db_login->user_check($data);
            if($check["user_status"]!="ACTIVE")
            {
                $array = array(
                    'error'   => true,
                    'msg'     => '<p class="text-center text-danger">User is not active</p>'
                );
            }
            else if(!is_null($check))
            {
                $this->session->set_userdata("user_id",$check['mobile_no']);
                $this->session->set_userdata("user_name",$check['user_name']);
                $array = array(
                    'error'   => false,
                    'msg'     => $check,
                );
            }
            else
            {
                $array = array(
                    'error'   => true,
                    'msg'     => '<p class="text-center text-danger">Wrong Username Or Password</p>'
                );
            }
      
    }
    else 
    {
        $array = array(
            'form'   => true,
            'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
           );
    } 
         echo json_encode($array);
    }
    public function logout(){
        $this->session->unset_userdata('user_id');
        redirect('#', 'refresh'); 
    }

}

/* End of file Login.php */
