<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_register extends CI_Model {

    public function register($data){
        $this->db->insert('user_register', $data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
        
    }

}

/* End of file Db_register.php */
