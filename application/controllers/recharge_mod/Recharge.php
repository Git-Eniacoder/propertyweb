<?php

class Recharge extends My_Controller {

    public function index()
    {
       $this->load->model('db_wallet');
        
        $this->data['post'] = $this->db_wallet->get_balance($this->session->userdata("id"));
        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/recharge', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }
     function buyplan(){
        $this->load->model('db_wallet');
        $wallet=$this->input->post('wallet');
        $update_bal=$this->input->post('balance')+1200;
        if($this->db_wallet->update_wallet($wallet,$update_bal)){
            $this->session->set_flashdata('success',true); 
            redirect(base_url().'recharge_mod/recharge');
        }
     }

}

/* End of file Controllername.php */