<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Ticket extends My_Controller {


    public function __construct() {

        parent::__construct();
        
        $this->load->model('db_wallet');
        if(is_null($this->session->userdata("user_id"))){
            redirect(base_url());
        }
        $this->load->model('db_wallet');
        $this->load->model('db_support');

       // $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {

        $this->data['support_list'] = $this->db_support->support_list();
       $this->data['post'] = $this->db_wallet->get_balance($this->session->userdata("user_id"));
       $this->data['history'] = $this->db_wallet->refer_history($this->data['post']['all_data'][0]->referid);
       $this->data['level']=$this->find_level_and_points($this->data['post']["all_data"][0]->total_referal);
       $this->load->view('frontend/common/wallet-header',$this->data);
       $this->load->view('frontend/wallet/ticket',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }
    public function find_level_and_points($total_count){
        if($total_count<pow(6,1)){
            if($total_count==0)
                return array(1,50,0);
            if($total_count==1)
                return array(1,70,0);
            if($total_count==2)
                return array(1,90,0);
            if($total_count==3)
                return array(1,110,0);
            if($total_count==4)
                return array(1,130,0);
            if($total_count==5)
                return array(1,150,0);
            
        }
        if($total_count<pow(6,2)){
            return array(2,900,0);
        }
        if($total_count<pow(6,3)){
            if($total_count==pow(6,2))
            {
                return array(3,4320,10000);
            }
            return array(3,4320,0);
        }
        if($total_count<pow(6,4)){
            if($total_count==pow(6,3))
            {
                return array(4,12960,25000);
            }
            return array(4,12960,0);
        }
        if($total_count<pow(6,5)){
            if($total_count==pow(6,4))
            {
                return array(5,38880,50000);
            }
            return array(5,38880,0);
        }
        if($total_count<pow(6,6)){
            if($total_count==pow(6,5))
            {
                return array(6,233280,75000);
            }
            return array(6,233280,0);
        }
    }
    public function submit_support(){
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run()) {
            $config['upload_path']          = './assets/img/support/';
            $config['file_name']            = 'support_image'.rand().'.png';
            $config['allowed_types']        = 'jpg|png';

            $data['user_id'] = $this->session->userdata("user_id");
            $data['user_name'] = $this->session->userdata("user_name");
            $data['support_department'] = $this->input->post('department');
            $data['support_subject'] = $this->input->post('subject');
            $data['support_message'] = $this->input->post('message');
            $data['referid'] = $this->input->post('referid');
            if($this->input->post('teansaction'))
                    {
                        $data['support_txn'] = $this->input->post('teansaction');
                    }
            $data['support_image'] = $config['file_name'] ;
            
            $this->load->library('upload', $config);

            if($this->upload->do_upload('image')){
                if($this->db_support->submit_support($data)){
                    $this->session->set_flashdata('response', '<p class="text-center text-success">Ticket Generated Success</p>');
                    redirect(base_url().'wallet/ticket');
                }
                else{
                    $this->session->set_flashdata('response', '<p class="text-center text-danger">Error in Submition</p>');
                    redirect(base_url().'wallet/ticket');
                }
            }else{
                $this->session->set_flashdata('response', '<p class="text-center text-danger">'.$this->upload->display_errors().'</p>');
                redirect(base_url().'wallet/ticket');
                
            }
        } else {
           $this->index();
        }
        
    }
   
}   