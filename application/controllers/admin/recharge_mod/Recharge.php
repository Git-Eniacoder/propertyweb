

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recharge extends My_Controller {
 // Handler Himanshu Goyal
 public function __construct()
 {
  parent::__construct();
  //$this->load->model('pages/Db_fillter');
 }

 function index()
 {
  
  $data['url'] = $this->config->item('urls');
  $this->load->view('frontend/recharge', $data);
 }

 
}
?>