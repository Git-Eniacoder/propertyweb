<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends CI_Controller {

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('db_login');
  
    // }

    public function index()
    {
        
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/payment_mod/payment');
        $this->load->view('admin/common/footer');
    }

    public function pay(){
        $this->form_validation->set_rules('name', 'Card Holdername', 'required');
        $this->form_validation->set_rules('card_no', 'Card Number', 'required');
        if($this->form_validation->run()){

            $this->session->set_flashdata('success','Payment successfully 1200 points added');
            redirect(base_url().'admin/payment_mod/payment');
        }
        else{
            $this->session->set_flashdata('error','Error in payment');
            redirect(base_url().'admin/payment_mod/payment');
        }
            
        
        

}