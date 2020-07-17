<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Home extends My_Controller {


    public function __construct() {

        parent::__construct();
        
        $this->load->model('pages/Db_postreq');
    }

    public function index()
    {

        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/home',$this->data);
        $this->load->view('frontend/common/footer',$this->data);

    }

    public function add()
    {
        $pre = $this->input->post(null,true);
        $field = [
                    "p_name" => $pre['post-name'],
                    "p_email" => $pre['post-email'],
                    "p_mobile" => $pre['post-mobile'],
                    "property_for" => $pre['property-for'],
                    "ptypes" => $pre['ptype'],
                    "bhk" => $pre['bhk'],
                    "furnished" => $pre['furnished'],
                    "rent" => $pre['rent'],
                    "pcity" => $pre['pcity'],
                
            ];
            // print_r($field);
            // die();
         //  prnt($field);

            $this->Db_postreq->add($field);
           
        $this->index();
    
    }

    

    



   

}

/* End of file All_blog.php */
