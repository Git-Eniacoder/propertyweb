<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Post_req extends My_Controller {

public function __construct()
{
    parent::__construct();
    
    $this->load->model('db_property');
    
}

    public function index()
    {
        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/postproperty', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }
    public function insert(){
        $this->form_validation->set_rules('post_type', 'Property Type', 'required');
       $this->form_validation->set_rules('budget', 'Budget', 'required');
       $this->form_validation->set_rules('need_for', 'Needed', 'required');
       $this->form_validation->set_rules('post_locality', 'Locality', 'required');
       $this->form_validation->set_rules('post_city', 'City', 'required');
       $this->form_validation->set_rules('post_name', 'Name', 'required');
       $this->form_validation->set_rules('post_email', 'Email', 'required');
       $this->form_validation->set_rules('post_phone', 'Phone no.', 'required');

        if ($this->form_validation->run()) {
            
                $data['post_type'] = $this->input->post('post_type');
                $data['post_budget'] = $this->input->post('budget');
                $data['post_locality'] = $this->input->post('post_locality');
                $data['post_city'] = $this->input->post('post_city');
                $data['post_name'] = $this->input->post('post_name');
                $data['post_email'] = $this->input->post('post_email');
                $data['post_need'] = $this->input->post('need_for');
                $data['post_phone'] = $this->input->post('post_phone');
                if($this->input->post('post_type')=="commercial")
                    {
                        $data['post_size'] = $this->input->post('post_req_min');
                    }
                else{
                    $data['post_bhk'] = $this->input->post('post_bhk');
                }
            
            if($this->db_property->post_property($data)){
                $this->session->set_flashdata('response', '<p class="text-center text-Success">Successfully Listed Your Property</p>');
                redirect(base_url().'postreq_mod/post_req');
            }
             else{
                $this->session->set_flashdata('response', '<p class="text-center text-danger">Error In Listing Your Property</p>');
                redirect(base_url().'postreq_mod/post_req');
            }
        }
        else { 
                $this->index();
            }
            
    
    }

}

/* End of file Post_req.php */
