<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_support');
        
    }
    

    public function index()
    {
        $this->load->view('frontend/common/header',$this->data);
        $this->load->view('frontend/support_box',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
    public function submit_support(){
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run()) {
            $config['upload_path']          = './assets/img/support/';
            $config['file_name']            = 'support_image'.rand().'.png';
            $config['allowed_types']        = 'jpg|png';

            $data['user_id'] = $this->session->userdata("id");
            $data['user_name'] = $this->session->userdata("name");
            $data['support_department'] = $this->input->post('department');
            $data['support_subject'] = $this->input->post('subject');
            $data['support_message'] = $this->input->post('message');
            if($this->input->post('teansaction'))
                    {
                        $data['support_txn'] = $this->input->post('teansaction');
                    }
            $data['support_image'] = $config['file_name'] ;
            
            $this->load->library('upload', $config);

            if($this->upload->do_upload('image')){
                if($this->db_support->submit_support($data)){
                    $this->session->set_flashdata('response', '<p class="text-center text-success">Ticket Generated Success</p>');
                    redirect(base_url().'support');
                }
                else{
                    $this->session->set_flashdata('response', '<p class="text-center text-danger">Error in Submition</p>');
                    redirect(base_url().'support');
                }
            }else{
                $this->session->set_flashdata('response', '<p class="text-center text-danger">'.$this->upload->display_errors().'</p>');
                redirect(base_url().'support');
                
            }
        } else {
           $this->index();
        }
        
    }

}

/* End of file Support.php */
