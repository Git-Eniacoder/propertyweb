<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Home extends My_Controller {


    public function __construct() {

        parent::__construct();
        $this->load->model('pages/db_postreq');
        $this->load->model('pages/db_fillter');
    }

    public function index()
    {
        // echo "<pre>";
        // print_r($this->data);
        // die;
        $this->load->model('db_property');
        $this->data['post'] = $this->db_property->get_property($this->session->userdata("user_id"));
        $this->data['property'] = $this->db_postreq->fetch_list();
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/home',$this->data);
        $this->load->view('frontend/common/footer',$this->data);

    }
    public function search(){
        $data['city'] = $this->input->post('city');
        $data['loc'] = $this->input->post('loc');
        $data['type'] = $this->input->post('type');
        $info = $this->db_fillter->search($data);
        if(!is_null($info)){
            $array = array(
                'form'   => true,
                'msg'   => $info,
               );
        }else{
            $array = array(
                'form'   => true,
                'msg'   => 'No Result Found',
               );
        }
        echo json_encode($array);
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
          
            $this->db_postreq->add($field);
           
        $this->index();
    
    }

    

    



   

}

/* End of file All_blog.php */
