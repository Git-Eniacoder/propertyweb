<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Recharge extends My_Controller {


    public function __construct() {

        parent::__construct();

       // $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
        $this->load->view('frontend/common/header',$data);
        $this->load->view('frontend/wallet/recharge',$data);
        $this->load->view('frontend/common/footer',$data);
    }
}    