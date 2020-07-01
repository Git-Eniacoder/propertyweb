<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Social_links extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_login');
            if(is_null($this->session->userdata("id"))){
                redirect(base_url().'admin');
            }

    }
    public function index()
    {
        $data['url'] = $this->db_login->fetch_links();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/core/social_links',$data);
        $this->load->view('admin/common/footer');
    }


    public function update_links(){
        
        
            
        $data['twitter_url'] = $this->input->post('twitter_url');
        $data['facebook_url'] = $this->input->post('facebook_url');
        $data['youtube_url'] = $this->input->post('youtube_url');
        $data['instagram_url'] = $this->input->post('instagram_url');
        $data['pinterest_url'] = $this->input->post('pinterest_url');
        $data['linkedin_url'] = $this->input->post('linkedin_url');

        if($this->db_login->update_links($data)){
            redirect(base_url().'admin/core/social_links');
        }
        
    } 

}

/* End of file Social_links.php */
