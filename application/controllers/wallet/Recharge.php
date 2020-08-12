<?php


defined('BASEPATH') OR exit('No direct script access allowed');


// Handler Anshul

class Recharge extends My_Controller {


    public function __construct() {

        parent::__construct();
        
        $this->load->model('db_wallet');
        if(is_null($this->session->userdata("user_id"))){
            redirect(base_url());
        }

       // $this->load->model('pages/Db_postreq');
        
     }

    public function index()
    {
        $this->load->model('db_wallet');
        $this->data['post'] = $this->db_wallet->get_balance($this->session->userdata("user_id"));
        $this->data['history'] = $this->db_wallet->rech_his($this->session->userdata("user_id"));
        $this->data['level']=$this->find_level_and_points($this->data['post']["all_data"][0]->total_referal);
        $this->load->view('frontend/common/wallet-header',$this->data);
        $this->load->view('frontend/wallet/recharge',$this->data);
        $this->load->view('frontend/common/footer',$this->data);
    }

    //function for recharge 
    public function mobile($id=null){
        if(!$id){
            $this->form_validation->set_rules('circle', 'Circle', 'required');
        }
        $this->form_validation->set_rules('amt', 'Amount', 'required');
        $this->form_validation->set_rules('number', 'Number', 'required');
        $this->form_validation->set_rules('company', 'Operator', 'required');
        
        if ($this->form_validation->run()) {
            $data['recharge_amount'] = $this->input->post('amt');
            $data['trans_id'] = 'HRI'.date("dmYis").rand(1,9);
            if($this->input->post('circle')){
            $data['recharge_circle'] = $this->input->post('circle');
            }
            $data['recharge_no'] = $this->input->post('number');
            $data['recharge_opt'] = $this->input->post('company');
            $data['user_id']  = $this->session->userdata("user_id");
            $data['user_name']  = $this->session->userdata("user_name");
            $OutPut=$this->db_wallet->check_balance($this->session->userdata("user_id"),$data['recharge_amount']);
            if($OutPut==2){
                $array = array(
                    'failed'   => true,
                    'msg'   => 'Monthly Limit has over',
                    'he'    => 'Balance',
                    'ico'   => '<i class="fa fa-times"></i>',
                );
            }
            else if($OutPut==1  ){
            // $userid = urlencode('7392900007');
            // $pass = urlencode('693655');
            // $numbers = urlencode($data['recharge_no']);
            // $opt = urlencode($data['recharge_opt']);
            // $amt =  urlencode($data['recharge_amount']); 

            // $api = 'userid=' . $userid . '&pass=' . $pass . "&mob=" . $numbers . "&opt=" . $opt.'&amt='.$amt.'&agentid='.$data['trans_id'].'&fmt=json';

            // $ch = curl_init('http://www.login.imwallet.in/API/APIService.aspx?' . $api);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // $response = curl_exec($ch);
            // curl_close($ch);
            
            $feed = json_decode('{"STATUS":"Success","MOBILE":"8949715939","AMOUNT":"50","RPID":"2072822391582368C4","AGENTID":"HRI49036","OPID":"BR0004ZHL2X6","BAL":494834.19,"MSG":"Success"}');
            
            if($feed->STATUS == 'Success'){
                if($this->db_wallet->update_balance($this->session->userdata("user_id"),$data['recharge_amount'],0)){
                    $data['recharge_status'] = $feed->STATUS;
                    $data['recharge_msg'] = $feed->MSG;
                    $data['imWallet_id'] = $feed->OPID;
                $this->db_wallet->history_rec($data);
                $array = array(
                    'success'   => true,
                    'msg'   => $feed->MSG,
                    'he'    => 'Success!',
                    'ico'   => '<i class="fa fa-check"></i>',
                );
                }
                else{
                        $array = array(
                            'failed'   => true,
                            'msg'   => 'Balance is Shorter',
                            'he'    => 'Balance',
                            'ico'   => '<i class="fa fa-times"></i>',
                        );
                    }
            }
            else if($feed->STATUS == 'Request Accepted'){
                $data['recharge_status'] = $feed->STATUS;
                $data['recharge_msg'] = $feed->MSG;
                $data['imWallet_id'] = $feed->OPID;
                $this->db_wallet->history_rec($data);
                $array = array(
                    'pending'   => true,
                    'msg'   => $feed->MSG,
                    'he'    => 'Pending!',
                    'ico'   => '<i class="fa fa-spinner"></i>',
                );
            }
            else{

                $array = array(
                    'failed'   => true,
                    'msg'   => $feed->MSG,
                    'he'    => $data['recharge_no'],
                    'ico'   => '<i class="fa fa-times"></i>',
                );
            }
        }
        else{
            $array = array(
                'failed'   => true,
                'msg'   => 'Balance is Shorter',
                'he'    => 'Balance',
                'ico'   => '<i class="fa fa-times"></i>',
            );
        }
         }
            else {
            $array = array(
               'failed'   => true,
                    'msg'   => validation_errors(),
                    'he'    => 'Fields Error',
                    'ico'   => '<i class="fa fa-times"></i>',
            );
        }
        
           echo json_encode($array);
           
        
    }
    public function check_balance($id){
        if($this->db_wallet->check_balance($this->session->userdata("user_id"),$id)){
            echo "yes";
        }else{
            echo "no";
        }
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

    public function unset_notification(){
        $this->db_wallet->unset_notification($_GET['var1']);
        $this->index();
    }

   

    
}   