<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends My_Controller {

    public function index($res="NA")
    {   $this->data["res"]=$res;
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/contact',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }

    public function sendmail(){
       $name   = $this->input->post('name');
       $email  = $this->input->post('email');
       $mobile = $this->input->post('mobile');
       $messgae= $this->input->post('message');
       $this->index("Mail sent Successfully");
    }
}

/* End of file Contact.php */
