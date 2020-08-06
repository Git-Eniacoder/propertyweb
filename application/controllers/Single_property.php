<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Single_property extends My_Controller {
    public function __construct() {

        parent::__construct();
        $this->load->model('pages/db_fillter');
    }


    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/single_property',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
    public function fetch($id=null){
        $this->data['single'] = $this->db_fillter->fetch_property($id);
        $this->index();
    }
    

}
