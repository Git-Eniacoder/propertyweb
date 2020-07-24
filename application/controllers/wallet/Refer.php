<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Refer extends My_Controller {


    public function __construct() {

        parent::__construct();

       // $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {
       // $this->load->model('Db_wallet');
       // $this->data['post'] = $this->Db_wallet->get_balance($this->session->userdata("id"));
        
        $this->load->view('frontend/wallet/refer',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
}   