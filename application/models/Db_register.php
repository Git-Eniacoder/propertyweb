<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_register extends CI_Model {

    public function register($data){
        $wallet_data=array("mobileno"=>$data['mobile_no']);
        $this->db->insert('user_wallet', $wallet_data);
        $this->db->insert('user_register', $data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
        
    }

}

/* End of file Db_register.php */
