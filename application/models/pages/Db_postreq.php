<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_postreq extends CI_Model {

    public function insert($info){

        // var_dump($info);
        $this->db->insert('post_request', $info);
        echo "data successfully inserted";

        
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

    

}

/* End of file ModelName.php */
