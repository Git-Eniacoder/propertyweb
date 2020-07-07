<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Home extends My_Controller {


    public function __construct() {

        parent::__construct();

        
        
     }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
        
        $this->load->view('frontend/common/header',$data);
        $this->load->view('frontend/home',$data);
        $this->load->view('frontend/common/footer',$data);

    }


    

    



   

}

/* End of file All_blog.php */
