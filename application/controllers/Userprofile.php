<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends My_Controller {


    public function __construct() {

        parent::__construct();
 
      
        
     }

    public function index()
    {
        
        
        
        
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/userprofile',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
    
} 