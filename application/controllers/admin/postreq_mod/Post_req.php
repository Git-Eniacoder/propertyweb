<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Post_req extends My_Controller {


    public function __construct() {

        parent::__construct();

        $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
        $data['post'] = $this->Db_postreq->get_data();
        $this->load->view('postreq_v/postreq',$data);

    }


    public function insert(){

        $this->form_validation->set_rules('city', '', 'required');
        // $this->form_validation->set_rules('locality', '', 'required');
        // $this->form_validation->set_rules('project_name', '', 'required');
        // $this->form_validation->set_rules('area', '', 'required');
        // $this->form_validation->set_rules('area_unit', '', 'required');
        // $this->form_validation->set_rules('price', '', 'required');

        // $this->form_validation->set_rules('fieldname', 'fieldlabel', 'trim|required|min_length[5]|max_length[12]');
        
        
   
        if ($this->form_validation->run()) {
            # code...
            $info['person'] = $this->input->post('person');
            $info['purpose'] = $this->input->post('purpose');
            $info['property_type'] = $this->input->post('property_type');
            $info['property_interest'] = $this->input->post('property_interest');
            // $info['type_commercial'] = $this->input->post('type_commercial');
            $info['bhk'] = $this->input->post('bhk');
            $info['city'] = $this->input->post('city');
            $info['locality'] = $this->input->post('locality');
            $info['project_name'] = $this->input->post('project_name');
            $info['area'] = $this->input->post('area');
            $info['area_unit'] = $this->input->post('area_unit');
            // $info['bedrooms'] = $this->input->post('bedrooms');
            // $info['bathrooms'] = $this->input->post('bathrooms');
            // $info['furnished'] = $this->input->post('furnished');
            $info['price'] = $this->input->post('expected_price');      
            
            // Insert this data to our database
            $this->Db_postreq->insert($info);  
            
            // redirect to the index page
            $this->index();

        } else {
            # code...
            echo "not working";
        }
        


    }

    public function updateinsert($id){

        // Get the data from the view
        $info = array(
            "person" => $this->input->post('person'),
            "purpose" => $this->input->post('purpose'),
            "property_type" => $this->input->post('property_type'),
            "property_interest" => $this->input->post('property_interest'),
            "bhk" => $this->input->post('bhk'),
            "city" => $this->input->post('city'),
            "locality" => $this->input->post('locality'),
            "project_name" => $this->input->post('project_name'),
            "area" => $this->input->post('area'),
            "area_unit" => $this->input->post('area_unit'),
            "price" => $this->input->post('price'),
        );

        // recieving the data 
        echo '<pre>';
        print_r($info);
        echo '</pre>';

        // update the data at that particular id from where you are recieving
        $this->Db_postreq->updateinsert($id, $info);

        // redirect to the index page
        $this->index();

    }



    public function delete($id){

        $this->Db_postreq->delete($id);
        $this->index();
    }


    public function update($id){

        $data['update'] = $this->Db_postreq->update($id); 
        $this->load->view('postreq_v/postreq', $data, true);
        $this->index();   
    
    }

}

/* End of file All_blog.php */
