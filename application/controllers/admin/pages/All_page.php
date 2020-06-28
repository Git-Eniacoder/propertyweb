<?php 



defined('BASEPATH') OR exit('No direct script access allowed');

class ALl_page extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pages/db_page');
        
    }
    
    public function index()
    {
        $data['fetch'] = $this->db_page->fetch_page();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/pages/all_page',$data);
        $this->load->view('admin/common/footer');
    }
    public function delete($id=null){
        if($this->db_page->delete($id)){
            echo true;
        }else{
          echo false;
        }
    }
    

}

/* End of file ALl_page.php */
