<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Otp extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_register');
        
    }
    
    public function verify(){
        $this->form_validation->set_rules('otp', 'Name', 'required');
        
        if ($this->form_validation->run()) {
            $data = $this->input->post('otp');
            if($_SESSION['user_otp']==$data){
                $send['user_name'] =$_SESSION['name'];
                $send['mobile_no'] =$_SESSION['number'];
                $send['password'] =md5($_SESSION['pass']);
                $send['user_status']="ACTIVE";
                
                if($this->db_register->register($send)){
                    $array = array(
                        'otp'   => true,
                        'msg'   => '<p class="text-center text-success">Registered Successfully</p>',
                    );
                }else{
                    $array = array(
                        'otp'   => true,
                        'msg'   => '<p class="text-center text-danger">Something Went Wrong</p>',
                    );
                }
            }else{
                $array = array(
                    'otp'   => true,
                    'msg'   => '<p class="text-center text-danger">Wrong Otp</p>',
                   );
            }
        } else {
            $array = array(
                    'otp'   => true,
                    'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
                   );
        }
        echo json_encode($array);
    }
    public function send_otp()
    {
        $this->form_validation->set_rules('mno', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]|is_unique[user_register.mobile_no]');
        if ($this->form_validation->run()) {
            $this->form_validation->set_rules('uname', 'Name', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
            if ($this->form_validation->run()) {
                $number = $this->input->post('mno');
                $name = $this->input->post('uname');
                $password = $this->input->post('password');
                $rand = mt_rand(10000,99999);
                $_SESSION['user_otp'] = $rand;
                $_SESSION['name'] = $name;
                $_SESSION['number'] = $number;
                $_SESSION['pass'] = $password;
                // Account details
                // $apiKey = urlencode('AatJnvXT+aY-938RJaCG444fzTalb9slE32x4suSln');
                
                // // Message details
                // $numbers = urlencode($number);
                // $sender = urlencode('TXTLCL');
                // $message = rawurlencode('Dear customer, your OTP for registration is '.$rand);
        
                // $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
            
        
                // $ch = curl_init('https://api.textlocal.in/send/?' . $data);
                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // $response = curl_exec($ch);
                // curl_close($ch);

                $array = array(
                    'status'   => true,
                    'msg'   => $rand,
                );
            } else {
                $array = array(
                    'form'   => true,
                    'msg'   => '<p class="text-center text-danger">'.validation_errors().'</p>',
                );
            }
        }
        else{
            $array = array(
                'form'   => true,
                'msg'   => '<p class="text-center text-danger">'.validation_errors().'</p>',
            );
        }
        echo json_encode($array);
    }
    public function reset(){
        $this->form_validation->set_rules('mobile', 'mobile', 'required');
        if ($this->form_validation->run()) {
            $this->form_validation->set_rules('mobile', 'mobile', 'is_unique[user_register.mobile_no]');
            if ($this->form_validation->run() == FALSE) {
                $number = $this->input->post('mobile');
                $rand = mt_rand(10000,99999);
                $_SESSION['ruser_otp'] = $rand;
                $_SESSION['rnumber'] = $number;
    
                $apiKey = urlencode('AatJnvXT+aY-938RJaCG444fzTalb9slE32x4suSln');
                
                // Message details
                $numbers = urlencode($number);
                $sender = urlencode('TXTLCL');
                $message = rawurlencode('Dear customer, your OTP for registration is '.$rand);
        
                $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
            
        
                $ch = curl_init('https://api.textlocal.in/send/?' . $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                $array = array(
                    'status'   => true,
                    'msg'   => $response,
                );

            } else {
                $array = array(
                    'form'   => true,
                    'msg'   => '<p class="text-center text-danger">Mobile Number Not Registered</p>',
                );
            }
        }else{
            $array = array(
                'form'   => true,
                'msg'   => '<p class="text-center text-danger">Please Enter Mobile no.</p>',
            );
        }
        echo json_encode($array);
    }
    public function verify_reset(){
        $this->form_validation->set_rules('rotp', 'Otp', 'required');
        
        if ($this->form_validation->run()) {
            $data = $this->input->post('rotp');
            if($_SESSION['ruser_otp']==$data){
                $send['mobile_no'] =$_SESSION['rnumber'];
                $send['password'] = mt_rand(100000,999999);
                
                if($this->db_register->reset_password($send['mobile_no'],$send['password'])){
                    
            $apiKey = urlencode('AatJnvXT+aY-938RJaCG444fzTalb9slE32x4suSln');
            
            // Message details
            $numbers = urlencode($send['mobile_no']);
            $sender = urlencode('TXTLCL');
            $message = rawurlencode('Dear customer, Your Temporary Password  is '.$send['password']);
    
            $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
        
    
            $ch = curl_init('https://api.textlocal.in/send/?' . $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

                    $array = array(
                        'otp'   => true,
                        'msg'   => '<p class="text-center text-success">Password Sent To Registered Mobile No.</p>',
                        'password' => $response,
                    );
                }else{
                    $array = array(
                        'otp'   => true,
                        'msg'   => '<p class="text-center text-danger">Something Went Wrong</p>',
                    );
                }
            }else{
                $array = array(
                    'otp'   => true,
                    'msg'   => '<p class="text-center text-danger">Wrong Otp</p>',
                   );
            }
        } else {
            $array = array(
                    'otp'   => true,
                    'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
                   );
        }
        echo json_encode($array);
    }
}

/* End of file Otp.php */
