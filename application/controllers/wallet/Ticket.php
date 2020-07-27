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

       //$this->data['post'] = $this->db_wallet->get_balance($this->session->userdata("user_id"));
       //$this->data['history'] = $this->db_wallet->refer_history($this->data['post']['all_data'][0]->referid);
       //$this->data['level']=$this->find_level_and_points($this->data['post']["all_data"][0]->total_referal);
       $this->load->view('frontend/common/wallet-header',$this->data);
       $this->load->view('frontend/wallet/ticket',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
   
}   