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

}

/* End of file Db_property.php */
