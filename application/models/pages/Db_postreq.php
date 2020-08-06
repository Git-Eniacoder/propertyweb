<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_postreq extends CI_Model {

    public function insert($info){

        // var_dump($info);
        $this->db->trans_start();
        $this->db->insert('post_request', $info);
        $id = $this->db->insert_id();
        // echo "data successfully inserted";
        $this->load->library("upload");
        if(!empty($_FILES))
          {
            $files  = $_FILES['list_img'];
            // print_r($files);die;
                  
            for($i = 0; $i < count($files['name']); $i++)
            {
              $_FILES['list_img'] = [
                "name" => $files['name'][$i],
                "type" => $files['type'][$i],
                "tmp_name" => $files['tmp_name'][$i],
                "error" => $files['error'][$i],
                "size" => $files['size'][$i],
              ];
                     
              $config['file_name'] = "post_img";
              $config['allowed_types'] = "jpg|jpeg|JPEG|png|gif|svg";
              $config['max_size'] = '10240';
              $config['upload_path'] = "./uploads/";
              $this->upload->initialize($config);
            
              if($this->upload->do_upload('list_img'))
              {
                
                $upload_data =  $this->upload->data();
                $file_name = $upload_data['file_name'];
                // print_r($file_name);die;
                  $name[] = [                      
                               "list_imgs" => $file_name,
                               "id" => $id,
                            ]; 
              }
              else
              {
                print_r($this->upload->display_errors());
              }
            }
              
          }



        $this->db->insert_batch("post_imgs", $name);
        $this->db->trans_complete();
        return $this->db->insert_id(); 
        $this->db->trans_status();

    }


    public function get_data(){

        $get_data = $this->db->get('post_request')->result_array();
        
        return $get_data;
    }


    public function delete($id){

        $this->db->where('id', $id)->delete('post_request');

    }

    public function update($id){
        
        return $this->db->where('id', $id)->get('post_request')->row_array();

    }

    public function updateinsert($id, $info){

       // Now you have id and data 
       $this->db->where('id', $id)->update('post_request', $info);

       echo "the data is updated properly";

    }

    
    public function add($field){
        $this->db->insert('post_req', $field);

    }

    public function fetch_req()
    {
        return  $this->db->get("post_property")->result_array();
        // prnt($a);
        // print_r($a);die;
    }

    public function fetch_list()
    {
        return  $this->db->order_by('property_id desc')->get("list_property")->result_array();
        // prnt($a);
        // print_r($a);die;
    }

    public function del_list($id){
     return $this->db->where("id",$id)->delete("post_request");
      
    }

    public function del_post($id){
      return $this->db->where("id",$id)->delete("post_req");
       
     }

     public function update_fetch($id){
      return $this->db->where('post_id',$id)->get('post_property')->row_array();
  }

  public function update_fetch_list($id){
    return $this->db->where('property_id',$id)->get('list_property')->row_array();
  }

  public function delete_row($where,$where_val,$table){
    return $this->db->where($where,$where_val)->delete($table);
  }

}

/* End of file ModelName.php */
