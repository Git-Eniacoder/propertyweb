<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Showsinglepro extends My_Controller {

    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/showsingle',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }

}