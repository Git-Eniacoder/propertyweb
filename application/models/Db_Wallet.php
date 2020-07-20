<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Db_Wallet extends CI_Model
{
    public function get_balance($mobile)
    {
        $this->db->where('mobileno',$mobile);
        $query=$this->db->get('user_wallet');
        $result=$query->result();
        $num_rows=$query->num_rows();
        return array("all_data"=>$result,"num_rows"=>$num_rows);
    }
    public function update_wallet($wallet,$balance){
        $mobile=$this->session->userdata("id");
        $this->db->where('mobileno', $mobile);
        $update_data=array($wallet=>$balance);
        return $this->db->update('user_wallet', $update_data);
    }
}



/* End of file Db_login.php */
