<?php


defined('BASEPATH') or exit('No direct script access allowed');


// Handler Anshul

class List_req extends My_Controller
{


    public function __construct()
    {

        parent::__construct();
        if(is_null($this->session->userdata("id"))){
            redirect(base_url().'admin','refresh');
        }
        $this->load->model('pages/Db_postreq');
    }
    
    public function index($data=null)
    {
        $this->data['values']= $this->Db_postreq->fetch_list();

        $this->load->view('admin/common/header', $this->data);
        $this->load->view('admin/common/sidebar',$this->data);
        $this->load->view('admin/post/list_req', $data);
        $this->load->view('admin/common/footer', $this->data);
    }

    public function deletelist($id=null)
    {
        $this->Db_postreq->del_list($id);
        $this->index();
    }

    public function update_fetch($id=null){
        $data['update'] = $this->Db_postreq->update_fetch_list($id);
        if($data['update']){
            $this->index($data);
        }else{
            $this->index();
        }
    }

    
    public function delete_row($id=null){
        $this->Db_postreq->delete_row("property_id",$id,"list_property");
        $this->index();
    }

}