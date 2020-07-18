<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends My_Controller
{
    // Handler Himanshu Goyal

    public function __construct()
    {

        parent::__construct();

        $this->load->model('pages/Db_fillter');
        $this->load->model('pages/Db_postreq');
        $this->load->library('upload');
    }


    public function index()
    {
     
        $this->data['post'] = $this->Db_postreq->get_data();

        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/listing', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }


    public function insert()
    {

        //  Database Table
        //  post_request
        //  post_imgs


        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('rent', 'rent', 'required');
        $this->form_validation->set_rules('bhk', 'bhk', 'required');
        $this->form_validation->set_rules('furnished', 'furnished', 'required');
        $this->form_validation->set_rules('forwhom', 'forwhom', 'required');
        $this->form_validation->set_rules('area', 'area', 'required');



        # code...
        $info = array(
            "city" => $this->input->post('city'),
            "description" => $this->input->post('description'),
            "rent" => $this->input->post('rent'),
            "bhk" => $this->input->post('bhk'),
            "furnished" => $this->input->post('furnished'),
            "forwhom" => $this->input->post('forwhom'),
            "area" => $this->input->post('area'),
        );

       


        // Get AllImages first
        
        // // 1. Load Upload Liberary
        // $this->load->library('upload');

        // // 2. All Images in Img_data
        // $img_data = $_FILES['list_img']['name'];

        // // NOTE :  ALL image_data is in $_FILES
        // // echo '<pre>';
        // // print_r($_FILES);
        // // die();

        // // 3. COUNT the number of files
        // $number_of_files = count($_FILES['list_img']['name']);

        // // 4. Store global files to local variable
        // $files = $_FILES;

        // // 5. Upload files one by one
        // for($i = 0; $i < $number_of_files; $i++){

        //     $_FILES['list_img']['name'] = $files['list_img']['name'][$i];
        //     $_FILES['list_img']['type'] = $files['list_img']['type'][$i];
        //     $_FILES['list_img']['tmp_name'] = $files['list_img']['tmp_name'][$i];
        //     $_FILES['list_img']['error'] = $files['list_img']['error'][$i];
        //     $_FILES['list_img']['size'] = $files['list_img']['size'][$i];

        //     $config['upload_path'] = './uploads/';
        //     $config['allowed_types'] = 'gif|jpg|png';
        //     $config['max_size'] = '0';
        //     $config['max_width'] = '0';
        //     $config['max_width'] = '0';

        //     // 6. initialize Upload
        //     $this->upload->initialize($config);


        //     // 7. Upload to the server
        //     if($this->upload->do_upload('list_img')){

        //         // $imageData = $this->upload->data();
     
        //         // 8. We get the image data 
        //         $imageData = $this->upload->data();

        //         // 9. get the image name and 
        //         $img['image_name'] = $imageData['file_name'];


                // echo "<pre>";
                // print_r($info);
                // die();
                $this->Db_postreq->insert($info);
                
                redirect($this->data['list'],'refresh');

            }
            // else {


                
            // }




            
        


    



    public function update($id)
    {
        $data['update'] = $this->Db_postreq->update($id);
    }



    public function updateinsert($id)
    {

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






    public function delete($id)
    {

        $this->Db_postreq->delete($id);
        $this->index();
    }


    public function image_config()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_width'] = '0';

        return $config;
    }
}



?>
