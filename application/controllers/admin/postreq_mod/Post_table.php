<?php


defined('BASEPATH') or exit('No direct script access allowed');


// Handler Anshul

class Post_table extends My_Controller
{


    public function __construct()
    {

        parent::__construct();


        $this->load->model('pages/Db_postreq');
        
    }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
        $data['post'] = $this->Db_postreq->get_data();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/posttable', $data);
        $this->load->view('frontend/common/footer', $data);
    }


    public function delete($id)
    {

        $this->Db_postreq->delete($id);
        $this->index();
    }


    public function update($id)
    {

        $data['update'] = $this->Db_postreq->update($id);
        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/listing', $data);
        $this->load->view('frontend/common/footer', $data);

    }


    
    public function updateinsert($id)
    {

        echo "The data is comming";
        die();
        // Get the data from the view

        $info = array(
            "city" => $this->input->post('city'),
            "description" => $this->input->post('description'),
            "rent" => $this->input->post('rent'),
            "bhk" => $this->input->post('bhk'),
            "furnished" => $this->input->post('furnished'),
            "forwhom" => $this->input->post('forwhom'),
            "area" => $this->input->post('area'),
        );


        // update the data at that particular id from where you are recieving
        $this->Db_postreq->updateinsert($id, $info);

        // redirect to the index page
        $this->index();
    }






    // public function test(){

    //    $dd =  $this->Db_postreq->get_data();

    //    echo "<pre>";
    //    print_r($dd);
    // }
}

/* End of file All_blog.php */
