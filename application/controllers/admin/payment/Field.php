<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Field extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_wallet');
        
    }
    
    public function index()
    {
        $data['history'] = $this->db_wallet->fetch_payment_history(2);
      
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/payment/field',$data);
        $this->load->view('admin/common/footer');
    }
    
    
}


/* End of file Payment.php */
