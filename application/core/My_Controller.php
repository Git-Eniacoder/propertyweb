<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

    
    protected $data;
    public function __construct(){
        
        $this->data['status'] = false;
        parent::__construct();
        $this->load->model('db_login');
        $this->data['site'] = $this->db_login->fetch_site();
        $this->data['social'] = $this->db_login->fetch_links();
        $this->config->load("urls", true);
        $this->data['url'] = $this->config->item("urls");
        if($this->session->userdata("user_id")){
            $this->data['status'] = true;
            $name = strpos($this->session->userdata("user_name"),' ');
                if($name){
                $name = substr($this->session->userdata("user_name"),0,$name);
                }else{
                $name =$this->session->userdata("user_name");
                }
            
            $this->data['uname'] = $name;
         }
        //   echo "<pre>";
        // print_r($this->data);
        // die;
    }
    
}

/* End of file My_COntroller.php */
