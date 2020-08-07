<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if(is_null($this->session->userdata("id"))){
            redirect(base_url().'admin','refresh');
        }
        
        $this->load->model('db_wallet');
        
    }
    
    
    public function index()
    {
        $data['history'] = $this->db_wallet->fetch_payment_history(3);
      
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/payment/bank',$data);
        $this->load->view('admin/common/footer');
    }
    public function change($id=null){
        if($this->db_wallet->change_status($id)){
            $this->index();
        }else{
            redirect(base_url().'error_show');
        }
    }
    
}


/* End of file Payment.php */
