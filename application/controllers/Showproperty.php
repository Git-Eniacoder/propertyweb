<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Showproperty extends My_Controller {

    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/showproperty',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }

}