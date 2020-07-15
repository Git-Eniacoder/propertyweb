<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Otp extends My_Controller {
    public function verify(){
        $this->form_validation->set_rules('otp', 'Name', 'required');
        
        if ($this->form_validation->run()) {
            $data = $this->input->post('otp');
            if($_SESSION['user_otp']==$data){
                $array = array(
                    'otp'   => true,
                    'msg'   => '<p class="text-center text-success">Registered Successfully</p>',
                   );
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
        $this->form_validation->set_rules('uname', 'Name', 'required');
        $this->form_validation->set_rules('mno', 'Mobile No.', 'required');
        if ($this->form_validation->run()) {
            $number = $this->input->post('mno');
            $rand = mt_rand(10000,99999);
            $_SESSION['user_otp'] = $rand;
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
                'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
               );
        }
        echo json_encode($array);
    }

}

/* End of file Otp.php */
