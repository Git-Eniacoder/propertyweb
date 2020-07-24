<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_register extends CI_Model {

    public function register($data){
        $wallet_data=array("mobileno"=>$data['mobile_no'],"referid"=> strval(rand()).substr(strval($data['mobile_no']), -4));
        $this->db->insert('user_wallet', $wallet_data);
        $this->db->insert('user_register', $data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
        
    }
    public function reset_password($no,$pass){
        $this->db->set('password',md5($pass))->where('mobile_no',$no)->update('user_register');
        
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
        
    }
}

/* End of file Db_register.php */
