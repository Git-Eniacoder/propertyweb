<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class New_blog extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/blog/new_blog');
        $this->load->view('admin/common/footer');
    }

}

/* End of file New-blog.php */
