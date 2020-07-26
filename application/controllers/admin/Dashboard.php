<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
            if(is_null($this->session->userdata("id"))){
                redirect(base_url().'admin','refresh');
            }
    }
    

    public function index()
    {
        $this->load->model('db_siteuser');
        $data['all_data']=$this->db_siteuser->fetch_user();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/common/footer');
        
    }

}

/* End of file Dashboard.php */
