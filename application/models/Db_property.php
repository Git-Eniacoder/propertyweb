<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_property extends CI_Model {


    public function list_property($data){
        $this->db->insert('list_property', $data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
    }

    public function post_property($data){
        $this->db->insert('post_property', $data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
    }

    public function get_property(){
        return $this->db->query("SELECT * FROM `list_property` ")->result_array();
    }


}

/* End of file Db_property.php */
