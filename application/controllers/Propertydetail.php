<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Propertydetail extends My_Controller {
    public function __construct() {

        parent::__construct();
        $this->load->model('pages/db_fillter');
    }


    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/propertydetail',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
    public function search_single(){
        $data['city'] = $this->input->post('city');
        $data['loc'] = $this->input->post('loc');
        $data['type'] = $this->input->post('type');
        $info = $this->db_fillter->search($data);
        $this->data['searched'] = $info;
        $this->index();
       
    }

}

/* End of file Contact.php */