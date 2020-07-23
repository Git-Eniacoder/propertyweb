<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_support');
        
    }
    
    public function index($data=null)
    {
        $data['payment'] = $this->db_support->payment_fetch();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/support/payment',$data);
        $this->load->view('admin/common/footer');
    }
    public function update_fetch($id=null){
        $data['update'] = $this->db_support->update_fetch($id);
        if($data['update']){
            $this->index($data);
        }else{
            $this->index();
        }
    }
    public function update($id=null){

        $data['support_status'] = $this->input->post('status');
        $data['support_department'] = $this->input->post('department');
        $data['support_admin_msg'] = $this->input->post('message');
        if($this->db_support->payment_update($data,$id)){
            $this->index();
        }else{
            $this->index();
        }
    }
}

/* End of file Payment.php */
