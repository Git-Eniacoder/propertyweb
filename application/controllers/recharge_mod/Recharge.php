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
     
     public function find_level_and_points($total_count){
        if($total_count<pow(6,1)){
            if($total_count==0)
                return array(1,50,0);
            if($total_count==1)
                return array(1,70,0);
            if($total_count==2)
                return array(1,90,0);
            if($total_count==3)
                return array(1,110,0);
            if($total_count==4)
                return array(1,130,0);
            if($total_count==5)
                return array(1,150,0);
            
        }
        if($total_count<pow(6,2)){
            return array(2,900,0);
        }
        if($total_count<pow(6,3)){
            if($total_count==pow(6,2))
            {
                return array(3,4320,10000);
            }
            return array(3,4320,0);
        }
        if($total_count<pow(6,4)){
            if($total_count==pow(6,3))
            {
                return array(4,12960,25000);
            }
            return array(4,12960,0);
        }
        if($total_count<pow(6,5)){
            if($total_count==pow(6,4))
            {
                return array(5,38880,50000);
            }
            return array(5,38880,0);
        }
        if($total_count<pow(6,6)){
            if($total_count==pow(6,5))
            {
                return array(6,233280,75000);
            }
            return array(6,233280,0);
        }
     }
}

/* End of file Controllername.php */