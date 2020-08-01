<?php

class Recharge extends My_Controller {

    public function index()
    {
        $this->load->model('db_wallet');
        $this->data['post'] = $this->db_wallet->get_balance($this->session->userdata("user_id"));
        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/recharge', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }
    public function buyplan(){
        $this->load->model('Db_Wallet');
        $wallet=$this->input->post('wallet');
        $update_bal=$this->input->post('balance')+1200;
        $refer_id=$this->input->post('refer_id');
        //getting refer data
        $refer_data=$this->Db_Wallet->get_balance($refer_id);
        $next_level_points=$this->find_level_and_points($refer_data["all_data"][0]->total_referal);
        $update_data_refer=array('refferal_wallet'=> $refer_data["all_data"][0]->refferal_wallet+$next_level_points[1],
                                  "filed_wallet"=>$refer_data["all_data"][0]->filed_wallet+$next_level_points[2],
                                  "total_referal"=>$refer_data["all_data"][0]->total_referal+1);
        if($this->Db_Wallet->update_wallet($wallet,$update_bal,$refer_id,$update_data_refer)){
            $this->session->set_flashdata('success',true); 
            redirect(base_url().'recharge_mod/recharge');
        }
     }
     
     
}

/* End of file Controllername.php */