<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends My_Controller {

    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/about',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }

}

/* End of file Contact.php */
