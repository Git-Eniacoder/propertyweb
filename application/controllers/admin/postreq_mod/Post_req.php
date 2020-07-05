<?php


defined('BASEPATH') or exit('No direct script access allowed');


// Handler Anshul

class Post_req extends My_Controller
{


    public function __construct()
    {

        parent::__construct();

        $this->load->model('pages/Db_postreq');
    }


    public function demo()
    {

        echo "demo";
    }

    public function index()
    {
        $data['url'] = $this->config->item('urls');
        $data['post'] = $this->Db_postreq->get_data();
        // $this->load->view('postreq_v/postreq', $data);
        $this->load->view('frontend/listing', $data);
    }


    public function insert()
    {

        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('rent', 'rent', 'required');
        $this->form_validation->set_rules('bhk', 'bhk', 'required');
        $this->form_validation->set_rules('furnished', 'furnished', 'required');
        $this->form_validation->set_rules('forwhom', 'forwhom', 'required');
        $this->form_validation->set_rules('area', 'area', 'required');
        // $this->form_validation->set_rules('list_img', 'list_img', 'required');


        if ($this->form_validation->run()) {

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
        } else {
            # code...

            echo "the validation is misiing";
        }



        // insert Img Config that help to upload path
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);
        // $this->upload->do_upload('list_img');

        if ($this->upload->do_upload('list_img')) {

            $data = $this->upload->data();
            $info['list_img'] = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);

            // Insert this data to our database
            $this->Db_postreq->insert($info);
            // redirect to the index page
            $this->index();
        } else {

            print_r($this->upload->display_errors());
        }
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


    public function update($id)
    {

        $data['update'] = $this->Db_postreq->update($id);
        $this->load->view('postreq_v/postreq', $data, true);
        $this->index();
    }
}

/* End of file All_blog.php */






// $info = array(
//     "person" => $this->input->post('person'),
//     "purpose" => $this->input->post('purpose'),
//     "property_type" => $this->input->post('property_type'),
//     "property_interest" => $this->input->post('property_interest'),
//     "bhk" => $this->input->post('bhk'),
//     "city" => $this->input->post('city'),
//     "locality" => $this->input->post('locality'),
//     "project_name" => $this->input->post('project_name'),
//     "area" => $this->input->post('area'),
//     "area_unit" => $this->input->post('area_unit'),
//     "price" => $this->input->post('price'),
// );


            // $info['city'] = $this->input->post('city');
            // $info['description'] = $this->input->post('description');
            // $info['person'] = $this->input->post('person');
            // $info['purpose'] = $this->input->post('purpose');
            // $info['property_type'] = $this->input->post('property_type');
            // $info['property_interest'] = $this->input->post('property_interest');
            // $info['type_commercial'] = $this->input->post('type_commercial');
            // $info['bhk'] = $this->input->post('bhk');
            
            // $info['locality'] = $this->input->post('locality');
            // $info['project_name'] = $this->input->post('project_name');
            // $info['area'] = $this->input->post('area');
            // $info['area_unit'] = $this->input->post('area_unit');
            // $info['bedrooms'] = $this->input->post('bedrooms');
            // $info['bathrooms'] = $this->input->post('bathrooms');
            // $info['furnished'] = $this->input->post('furnished');
            // $info['price'] = $this->input->post('expected_price');      
            
            // Insert this data to our database
            // $this->Db_postreq->insert($info);  
            
            // redirect to the index page
            // $this->index();