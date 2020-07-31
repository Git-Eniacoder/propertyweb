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
    
    public function index($data=null)
    {
        
        $this->data['values']= $this->Db_postreq->fetch_req();

        $this->load->view('admin/common/header', $this->data);
        $this->load->view('admin/common/sidebar',$this->data);
        $this->load->view('admin/post/post_req', $data);
        $this->load->view('admin/common/footer', $this->data);
    }

    public function deletepost($id=null)
    {
        $this->Db_postreq->del_post($id);
        $this->index();
    }

    public function update_fetch($id=null){
        $data['update'] = $this->Db_postreq->update_fetch($id);
        if($data['update']){
            $this->index($data);
        }else{
            $this->index();
        }
    }
   
    public function delete_row($id=null){
        $this->Db_postreq->delete_row("post_id",$id,"post_property");
        $this->index();
    }

}