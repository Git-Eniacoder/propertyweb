<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Technical extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(is_null($this->session->userdata("id"))){
            redirect(base_url().'admin','refresh');
        }
        $this->load->model('db_support');
        
    }
    
    public function index($data=null)
    {
        $data['technical'] = $this->db_support->technical_fetch();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/support/technical',$data);
        $this->load->view('admin/common/footer');
    }
    public function update_fetch($id=null){
        $data['update'] = $this->db_support->update_fetch($id);
        if($data['update']){
            $this->index($data);
        }else{
            $this->index();
        }
    }
    public function update($id=null){

        $data['support_status'] = $this->input->post('status');
        $data['support_department'] = $this->input->post('department');
        $data['support_admin_msg'] = $this->input->post('message');
        if($this->db_support->payment_update($data,$id)){
            $this->index();
        }else{
            $this->index();
        }
    }

}

/* End of file Technical.php */
