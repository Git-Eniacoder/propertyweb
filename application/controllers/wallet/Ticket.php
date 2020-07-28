<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Ticket extends My_Controller {


    public function __construct() {

        parent::__construct();
        $this->load->model('db_wallet');

       // $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {

       $this->data['post'] = $this->db_wallet->get_balance($this->session->userdata("user_id"));
       $this->data['history'] = $this->db_wallet->refer_history($this->data['post']['all_data'][0]->referid);
       $this->data['level']=$this->find_level_and_points($this->data['post']["all_data"][0]->total_referal);
       $this->load->view('frontend/common/wallet-header',$this->data);
       $this->load->view('frontend/wallet/ticket',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
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