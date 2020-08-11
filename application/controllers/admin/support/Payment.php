<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if(is_null($this->session->userdata("id"))){
            redirect(base_url().'admin','refresh');
        }
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
        $depart  =$this->input->post('department');  // depatment id
        $this->load->model('db_wallet');
        $data['support_status'] = $this->input->post('status');
        $data['support_department'] = $this->input->post('department');
        $data['support_admin_msg'] = $this->input->post('message');
        if($data['support_status']==1 && $data['support_department']==2){//do only when admin approves and is in payment department
            // echo "hello1";
            $user_id=$this->input->post('user_no');
            $refer_id=$this->input->post('refer_id');
            // echo $refer_id."<br>";
            // echo $user_id."<br>";
            //getting user wallet data
            $this->userwallet_data = $this->db_wallet->get_balance($user_id);
            //updating user waller and referal wallet
            $update_bal=$this->userwallet_data["all_data"][0]->recharge_wallet+1200;
            // echo "<br>".$this->userwallet_data["all_data"][0]->recharge_wallet."<br>";
            if($this->userwallet_data["all_data"][0]->recharge_wallet==0)
            {//logic for if user is doing first time payment then only refer will be appiled
                //getting refer data
                // echo "hello2";
                $refer_data=$this->db_wallet->get_balance_referid($refer_id);
                $next_level_points=$this->find_level_and_points($refer_data["all_data"][0]->total_referal);
                $update_data_refer=array('refferal_wallet'=> $refer_data["all_data"][0]->refferal_wallet+$next_level_points[1],
                                        "filed_wallet"=>$refer_data["all_data"][0]->filed_wallet+$next_level_points[2],
                                        "total_referal"=>$refer_data["all_data"][0]->total_referal+1,
                                        "level_up"=>$next_level_points[3]);
               
            }
            else{
                // echo "hello3";
                $update_data_refer=0;
                $next_level_points=array('NA','NA','NA');
                $refer_id='NA';
            }
            if($this->db_wallet->update_wallet($user_id,$update_bal,$refer_id,$update_data_refer)){
            //update support ticket
                if(!$this->db_support->payment_update($data,$id)){
                    if($depart==2){
                        redirect(base_url().'/admin/support/payment');
                    }else if($depart==0){
                         redirect(base_url().'/admin/support/technical');
                    }else if($depart==1){
                         redirect(base_url().'/admin/support/billing');
                    }
                }
            }
            else{
                if($depart==2){
                    redirect(base_url().'/admin/support/payment');
                }else if($depart==0){
                     redirect(base_url().'/admin/support/technical');
                }else if($depart==1){
                     redirect(base_url().'/admin/support/billing');
                }
            }
            //updating history
            
            $this->payment_history(array($user_id,$refer_id,$data['support_status'],1200,$next_level_points[1],$next_level_points[2]));
            if($depart==2){
                redirect(base_url().'/admin/support/payment');
            }else if($depart==0){
                 redirect(base_url().'/admin/support/technical');
            }else if($depart==1){
                 redirect(base_url().'/admin/support/billing');
            }
        }
        else{//just update status in support table
            // echo "hello5";
            if($this->db_support->payment_update($data,$id)){
                if($depart==2){
                    redirect(base_url().'/admin/support/payment');
                }else if($depart==0){
                     redirect(base_url().'/admin/support/technical');
                }else if($depart==1){
                     redirect(base_url().'/admin/support/billing');
                }
            }else{
                if($depart==2){
                    redirect(base_url().'/admin/support/payment');
                }else if($depart==0){
                     redirect(base_url().'/admin/support/technical');
                }else if($depart==1){
                     redirect(base_url().'/admin/support/billing');
                }
            }

            
        }
        
    
}



    //return (level,referel_wallet,field_wallet,notification)
    public function find_level_and_points($total_count){
        if($total_count<pow(6,1)){
            if($total_count==0)
                return array(1,50,0,0);
            if($total_count==1)
                return array(1,70,0,0);
            if($total_count==2)
                return array(1,90,0,0);
            if($total_count==3)
                return array(1,110,0,0);
            if($total_count==4)
                return array(1,130,0,0);
            if($total_count==5)
                return array(1,150,0,0);
            
        }
        if($total_count<pow(6,2)){
            if($total_count==pow(6,1))
            {
                return array(3,50,10000,1);
            }
            return array(2,50,0,0);
        }
        if($total_count<pow(6,3)){
            if($total_count==pow(6,2))
            {
                return array(3,50,10000,1);
            }
            return array(3,50,0,0);
        }
        if($total_count<pow(6,4)){
            if($total_count==pow(6,3))
            {
                return array(4,50,25000,1);
            }
            return array(4,50,0,0);
        }
        if($total_count<pow(6,5)){
            if($total_count==pow(6,4))
            {
                return array(5,50,50000,1);
            }
            return array(5,50,0,0);
        }
        if($total_count<pow(6,6)){
            if($total_count==pow(6,5))
            {
                return array(6,50,75000,1);
            }
            return array(6,50,0,0);
        }
     }
     public function payment_history($payment){
         
         $this->db_wallet->payment_history($payment);
    }




    

}


/* End of file Payment.php */
