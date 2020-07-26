<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class site_user extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_support');
        
    }
    
    public function index($data=null)
    {
        $this->load->model('db_siteuser');
        $data['all_data']=$this->db_siteuser->fetch_user();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/users/site_user',$data);
        $this->load->view('admin/common/footer');
    }
    
}


/* End of file Payment.php */
