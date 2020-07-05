<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Field extends My_Controller {


    public function __construct() {

        parent::__construct();

       // $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
       
        $this->load->view('frontend/wallet/field',$data);

    }
}    