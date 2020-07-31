<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recharge_history extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_wallet');
        
    }
    
    public function index()
    {
        $data['history'] = $this->db_wallet->fetch_payment_history(1);
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/payment/recharge',$data);
        $this->load->view('admin/common/footer');
    }
    
    
}


/* End of file Payment.php */
