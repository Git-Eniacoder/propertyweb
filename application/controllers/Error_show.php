<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Error_show extends My_Controller {

    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/500',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
    


}
