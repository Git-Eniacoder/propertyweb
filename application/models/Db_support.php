<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_support extends CI_Model {

    public function submit_support($data){
        $this->db->insert('support', $data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
    }

}

/* End of file Db_support.php */
