<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Post_req extends My_Controller {

    public function index()
    {
        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/postproperty', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }

}

/* End of file Post_req.php */
