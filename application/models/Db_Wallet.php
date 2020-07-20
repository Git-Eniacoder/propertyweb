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


    public function get_refer_table($user){
        $this->db->where('user',$user);
        $query=$this->db->get('user_refer_points');
        $result=$query->result();
        $num_rows=$query->num_rows();
        return array("all_data"=>$result,"num_rows"=>$num_rows);
    }
    public function update_wallet($wallet,$balance,$referid,$update_data_refer){
        $mobile=$this->session->userdata("id");
        $this->db->where('mobileno', $mobile);
        $update_data=array($wallet=>$balance);
        if($this->db->update('user_wallet', $update_data)){
            if($referid!=NULL){
                $this->db->where('user', $referid);
                $this->db->update('user_refer_points', $update_data_refer);
            }
            return 1;
        }
        else{
            return 0;
        }
    }
}



/* End of file Db_login.php */
