<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Site_setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_login');
            if(is_null($this->session->userdata("id"))){
                redirect(base_url().'admin','refresh');
            }
    }
    public function index()
    {
        $data['site'] = $this->db_login->fetch_site();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/core/site_setting',$data);
        $this->load->view('admin/common/footer');
    }

    public function update_site(){
        
        
            
        $data['site_title'] = $this->input->post('site_title');
        $data['site_desc'] = $this->input->post('site_desc');
        // $data['site_logo'] = $this->input->post('site_logo');
        $data['eg_select'] = $this->input->post('eg_select');


        if($this->db_login->update_site($data)){
          redirect(base_url().'admin/core/site_setting');
        }

    }

}

/* End of file Site_setting.php */
