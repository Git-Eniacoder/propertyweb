<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends My_Controller {

    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/shopping',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
    


}
