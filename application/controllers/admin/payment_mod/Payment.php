<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends My_Controller {


    public function index()
    {
        
        $data['url'] = $this->config->item('urls');
        $this->load->view('admin/payment_mod/payment');
        
    }

    public function pay(){
        $this->form_validation->set_rules('name', 'Card Holdername', 'required');
        $this->form_validation->set_rules('card_no', 'Card Number', 'required');
        if($this->form_validation->run()){
            
        echo "1200 point added in your wallet"; 
           
        }
        else{
            
             redirect(base_url().'admin/payment_mod/payment');
        }
            
        
    }

}