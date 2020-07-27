<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_siteuser extends CI_Model {

    public function fetch_user(){
        return $this->db->query("SELECT * FROM `user_register` left outer join `user_wallet` ON user_wallet.mobileno = user_register.mobile_no")->result_array();
    }
    
}

/* End of file Db_page.php */
