<?php


defined('BASEPATH') or exit('No direct script access allowed');


// Handler Anshul

class Post_req extends My_Controller
{


    public function __construct()
    {

        parent::__construct();

        $this->load->model('pages/Db_postreq');
        // print_r($data['value']);die;
    }
    
    public function index()
    {
        $this->data['values']= $this->Db_postreq->fetch_req();

        $this->load->view('admin/common/header', $this->data);
        $this->load->view('admin/common/sidebar',$this->data);
        $this->load->view('admin/post/post_req', $this->data);
        $this->load->view('admin/common/footer', $this->data);
    }

    public function deletepost($id=null)
    {
        $this->Db_postreq->del_post($id);
        $this->index();
    }
   

}