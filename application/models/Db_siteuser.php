<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_siteuser extends CI_Model {

    public function fetch_user(){
        return $this->db->query("SELECT * FROM `user_register` left outer join `user_wallet` ON user_wallet.mobileno = user_register.mobile_no")->result_array();
    }

    public function change_status($mobile,$status){
        $this->db->where('mobile_no', $mobile);
        $data=array("user_status"=>$status);
        return $this->db->update('user_register', $data);
    }
    
}

/* End of file Db_page.php */
