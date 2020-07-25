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
        $data['payment'] = $this->db_support->user_fetch();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/site_user',$data);
        $this->load->view('admin/common/footer');
    }
    
}


/* End of file Payment.php */
