

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Recharge extends My_Controller
{
    // Handler Himanshu Goyal
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('pages/Db_fillter');
    }

    function index()
    {
        $this->load->model('Db_wallet');
        $data['post'] = $this->Db_wallet->get_balance("9784020309");
        $data['url'] = $this->config->item('urls');
        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/recharge', $data);
        $this->load->view('frontend/common/footer', $data);
    }

    function buyplan(){
        $this->load->model('Db_Wallet');
        $wallet=$this->input->post('wallet');
        $update_bal=$this->input->post('balance')+1200;
        if($this->Db_Wallet->update_wallet($wallet,$update_bal)){
            $this->session->set_flashdata('success','User Added Succefully'); 
            redirect(base_url());
        }
        
    }
}
?>