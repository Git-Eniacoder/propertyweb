<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Post_list extends My_Controller {


    public function __construct() {

        parent::__construct();

       // $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
       
        $this->load->view('postreq_v/postlist',$data);

    }


    

}

/* End of file All_blog.php */
