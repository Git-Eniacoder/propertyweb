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


    public function get_balance_referid($referid)
    {
        $this->db->where('referid',$referid);
        $query=$this->db->get('user_wallet');
        $result=$query->result();
        $num_rows=$query->num_rows();
        return array("all_data"=>$result,"num_rows"=>$num_rows);
    }



    public function update_wallet($mobile,$balance,$referid,$update_data_refer){
        $this->db->where('mobileno', $mobile);
        $update_data=array("recharge_wallet"=>$balance);
        if($this->db->update('user_wallet', $update_data)){
            if($referid!=NULL&& $update_data_refer!=0){
                $this->db->where('referid', $referid);
                $this->db->update('user_wallet', $update_data_refer);
            }
            return 1;
        }
        else{
            return 0;
        }
    }

    public function payment_history($payment){
        $data = array('user_id'=>$payment[0],'payment_amount'=>$payment[3],
        'payment_status'=>$payment[2],'referal_id'=>$payment[1],'referal_refer'=>$payment[4],'referal_field'=>$payment[5]);
        $this->db->insert('payment_history',$data);
        
    }
    public function refer_history($id){
       return $this->db->where('referal_id',$id)->get('payment_history')->result_array();
    }
    public function recharge_history($id){
        return $this->db->where('user_id',$id)->get('payment_history')->result_array();
     }
}



/* End of file Db_login.php */
