<?php

class Recharge extends My_Controller {

    public function index()
    {
       $this->load->model('Db_wallet');
        
        $this->data['post'] = $this->Db_wallet->get_balance($this->session->userdata("id"));
        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/recharge', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }
     function buyplan(){
        echo '<pre>';print_r($_POST);

        $this->load->model('Db_Wallet');
        $wallet=$this->input->post('wallet');
        $update_bal=$this->input->post('balance')+1200;
        if($this->Db_Wallet->update_wallet($wallet,$update_bal)){
            $this->session->set_flashdata('success','User Added Succefully'); 
            redirect(base_url());
        }
     }

}

/* End of file Controllername.php */