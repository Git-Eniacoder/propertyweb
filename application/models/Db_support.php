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

    public function payment_fetch(){
      return  $this->db->where('support_department',2)->get('support')->result_array();
        
    }
    public function technical_fetch(){
        return  $this->db->where('support_department',0)->get('support')->result_array();
          
      }
      public function billing_fetch(){
        return  $this->db->where('support_department',1)->get('support')->result_array();
          
      }
    public function update_fetch($id){
        return $this->db->where('support_id',$id)->get('support')->row_array();
    }
    public function payment_update($data,$id){
        $update = array('support_status' => $data['support_status'],'support_department' => $data['support_department'],'support_admin_msg' => $data['support_admin_msg']);
       
        $this->db->where('support_id',$id)->update('support',$update);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function support_list(){
        return $this->db->where('user_id',$this->session->userdata('user_id'))->get('support')->result_array();
    }
}

/* End of file Db_support.php */
