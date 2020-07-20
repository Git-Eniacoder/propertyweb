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
        
        $config['upload_path']          = './assets/img/logo';
        $config['file_name']            = 'logo'.rand().'.png';
        $config['allowed_types']        = 'gif|jpg|png';
            
        $data['site_title'] = $this->input->post('site_title');
        $data['site_desc'] = $this->input->post('site_desc');
        $data['site_logo'] = $config['file_name'];
        $data['eg_select'] = $this->input->post('eg_select');

        $this->load->library('upload', $config);
        if($this->upload->do_upload('site_logo')){
            if($this->db_login->update_site($data)){
            redirect(base_url().'admin/core/site_setting');
            }else{
                echo "error";
            }
        }else{
            echo "error";
        }

    }

}

/* End of file Site_setting.php */
