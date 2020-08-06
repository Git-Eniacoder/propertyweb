<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends My_Controller
{
    // Handler Himanshu Goyal

    public function __construct()
    {

        parent::__construct();

        $this->load->model('db_property');
        $this->load->library('upload');
    }


    public function index()
    {
     
        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/listing', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }


    public function insert()
    {
       $this->form_validation->set_rules('list_name', 'Name', 'required');
       $this->form_validation->set_rules('list_mobile', 'Mobile', 'required');
       $this->form_validation->set_rules('list_email', 'Email', 'required');
       $this->form_validation->set_rules('list_city', 'City', 'required');
       $this->form_validation->set_rules('list_locality', 'Locality', 'required');
       $this->form_validation->set_rules('list_type', 'Property Type', 'required');
       $this->form_validation->set_rules('list_furnished', 'Furnished Type', 'required');
       $this->form_validation->set_rules('list_willing', 'Willing Out', 'required');
       $this->form_validation->set_rules('list_messages', 'Message', 'required');
       $this->form_validation->set_rules('expected_rent', 'Rent', 'required');
       
        
        if ($this->form_validation->run()) {
            $filesCount = count($_FILES['files']['name']); 
            echo $filesCount;
            $errorUploadType = '';
            $images = array();
            for($i = 0; $i < $filesCount; $i++){ 
            $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
            $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
            $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
            $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 


            $config['upload_path']           = "./assets/img/property_list/" ;
            $config['file_name']            = 'list_property'.rand().'.png';
            $config['allowed_types']        = 'jpg|png';

            $this->load->library('upload', $config); 
            $this->upload->initialize($config); 
            if($this->upload->do_upload('file')){
                 $images[$i] = $config['file_name'];
            }else{
                   $this->session->set_flashdata('response', '<p class="text-center text-danger">'.display_errors().'</p>');
                   redirect(base_url().'list_mod/listing');

                break;
            }
        }
        $data['list_name'] = $this->input->post('list_name');
        $data['list_mobile'] = $this->input->post('list_mobile');
        $data['list_email'] = $this->input->post('list_email');
        $data['list_city'] = $this->input->post('list_city');
        $data['list_locality'] = $this->input->post('list_locality');
        $data['list_property_type'] = $this->input->post('list_type');
        $data['list_price'] = $this->input->post('expected_rent');
        
        if($this->input->post('list_type')=="commercial")
            {
                $data['list_unit'] = $this->input->post('list_area');
            }
        else{
            $data['list_bhk'] = $this->input->post('list_bhk');
        }
        $data['list_furnished_type'] = $this->input->post('list_furnished');
        $data['list_rent_out'] = $this->input->post('list_willing');
        $data['list_images'] =  implode(",",$images);
        $data['list_description'] = $this->input->post('list_messages');
            if($this->db_property->list_property($data)){
                $this->session->set_flashdata('response', '<p class="text-center text-danger">Successfully Listed Your Property</p>');
                redirect(base_url().'list_mod/listing');
            }else{
                $this->session->set_flashdata('response', '<p class="text-center text-danger">Error In Listing Your Property</p>');
                redirect(base_url().'list_mod/listing');

            }
        }else { 
                $this->index();
            }
            
       
    }
    public function update($id)
    {
        $data['update'] = $this->Db_postreq->update($id);
    }



    public function updateinsert($id)
    {

        // Get the data from the view

        $info = array(
            "city" => $this->input->post('city'),
            "description" => $this->input->post('description'),
            "rent" => $this->input->post('rent'),
            "bhk" => $this->input->post('bhk'),
            "furnished" => $this->input->post('furnished'),
            "forwhom" => $this->input->post('forwhom'),
            "area" => $this->input->post('area'),
        );


        // update the data at that particular id from where you are recieving
        $this->Db_postreq->updateinsert($id, $info);

        // redirect to the index page
        $this->index();
    }






    public function delete($id)
    {

        $this->Db_postreq->delete($id);
        $this->index();
    }


    public function image_config()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_width'] = '0';

        return $config;
    }
}



?>
