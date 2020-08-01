<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if(is_null($this->session->userdata("id"))){
            redirect(base_url().'admin','refresh');
        }
        $this->load->model('db_support');
        
    }
    
    public function index($data=null)
    {
        $this->load->model('db_siteuser');
        $data['all_data']=$this->db_siteuser->fetch_user();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/users/users',$data);
        $this->load->view('admin/common/footer');
    }
    
    public function change_user_status(){
        $mobile=$this->input->get('var1');;
        $status=$this->input->get('var2');;
        $this->load->model('db_siteuser');
        return $this->db_siteuser->change_status($mobile,$status);
    }
}


/* End of file Payment.php */
