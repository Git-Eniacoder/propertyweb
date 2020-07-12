<?php


defined('BASEPATH') or exit('No direct script access allowed');


// Handler Anshul

class List_req extends My_Controller
{


    public function __construct()
    {

        parent::__construct();

        $this->load->model('pages/Db_postreq');
    }
    
    public function index()
    {
        $this->data['values']= $this->Db_postreq->fetch_list();

        $this->load->view('admin/common/header', $this->data);
        $this->load->view('admin/common/sidebar',$this->data);
        $this->load->view('admin/post/list_req', $this->data);
        $this->load->view('admin/common/footer', $this->data);
    }

    public function deletelist($id=null)
    {
        $this->Db_postreq->del_list($id);
        $this->index();
    }
}