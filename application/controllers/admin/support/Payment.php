<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_support');
        $this->load->model('db_wallet');
        
    }
    
    public function index($data=null)
    {
        $data['payment'] = $this->db_support->payment_fetch();
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/support/payment',$data);
        $this->load->view('admin/common/footer');
    }
    public function update_fetch($id=null){
        $data['update'] = $this->db_support->update_fetch($id);
        if($data['update']){
            $this->index($data);
        }else{
            $this->index();
        }
    }
    public function update($id=null){
        $this->load->model('db_wallet');
        $data['support_status'] = $this->input->post('status');
        $data['support_department'] = $this->input->post('department');
        $data['support_admin_msg'] = $this->input->post('message');
        if($data['support_status']==1){//do only when admin approves
            $user_id=$this->input->post('user_no');
            $refer_id=$this->input->post('refer_id');
            //getting user wallet data
            $this->userwallet_data = $this->db_wallet->get_balance($user_id);
            //updating user waller and referal wallet
            $update_bal=$this->userwallet_data["all_data"][0]->recharge_wallet+1200;
            //getting refer data
            
            $refer_data=$this->db_wallet->get_balance_referid($refer_id);
            $next_level_points=$this->find_level_and_points($refer_data["all_data"][0]->total_referal);
            $update_data_refer=array('refferal_wallet'=> $refer_data["all_data"][0]->refferal_wallet+$next_level_points[1],
                                    "filed_wallet"=>$refer_data["all_data"][0]->filed_wallet+$next_level_points[2],
                                    "total_referal"=>$refer_data["all_data"][0]->total_referal+1);
            
            if($this->db_wallet->update_wallet($user_id,$update_bal,$refer_id,$update_data_refer)){
            //update support ticket
                if($this->db_support->payment_update($data,$id)){
                    $this->index();
                }else{
                    $this->index();
                }
            }
        }
        else{//just update status in support table
            if($this->db_support->payment_update($data,$id)){
                $this->index();
            }else{
                $this->index();
            }

            //updating history
        }
        $this->payment_history(array($user_id,$refer_id,$data['support_status'],1200,$next_level_points[1],$next_level_points[2]));
    }

    public function find_level_and_points($total_count){
        if($total_count<pow(6,1)){
            if($total_count==0)
                return array(1,50,0);
            if($total_count==1)
                return array(1,70,0);
            if($total_count==2)
                return array(1,90,0);
            if($total_count==3)
                return array(1,110,0);
            if($total_count==4)
                return array(1,130,0);
            if($total_count==5)
                return array(1,150,0);
            
        }
        if($total_count<pow(6,2)){
            return array(2,900,0);
        }
        if($total_count<pow(6,3)){
            if($total_count==pow(6,2))
            {
                return array(3,4320,10000);
            }
            return array(3,4320,0);
        }
        if($total_count<pow(6,4)){
            if($total_count==pow(6,3))
            {
                return array(4,12960,25000);
            }
            return array(4,12960,0);
        }
        if($total_count<pow(6,5)){
            if($total_count==pow(6,4))
            {
                return array(5,38880,50000);
            }
            return array(5,38880,0);
        }
        if($total_count<pow(6,6)){
            if($total_count==pow(6,5))
            {
                return array(6,233280,75000);
            }
            return array(6,233280,0);
        }
     }
     public function payment_history($payment){
         $this->db_wallet->payment_history($payment);
    }




    

}


/* End of file Payment.php */
