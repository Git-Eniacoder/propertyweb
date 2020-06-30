<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Post_req extends My_Controller {


    public function __construct() {

        parent::__construct();

     }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
        $this->load->view('postreq_v/postreq',$data);

    }


    public function get(){
        
        
        $info['person'] = $this->input->post('person');
        $info['purpose'] = $this->input->post('purpose');
        $info['type_residential'] = $this->input->post('type_residential');
        $info['type_commercial'] = $this->input->post('type_commercial');
        $info['city'] = $this->input->post('city');
        $info['project_name'] = $this->input->post('project_name');
        $info['locality'] = $this->input->post('locality');
        $info['area'] = $this->input->post('area');
        $info['area_unit'] = $this->input->post('area_unit');
        $info['bedrooms'] = $this->input->post('bedrooms');
        $info['bathrooms'] = $this->input->post('bathrooms');
        $info['furnished'] = $this->input->post('furnished');
        $info['expected_price'] = $this->input->post('expected_price');        

        echo '<pre>';
        print_r($info);
        echo '</pre>';

    }

}

/* End of file All_blog.php */
