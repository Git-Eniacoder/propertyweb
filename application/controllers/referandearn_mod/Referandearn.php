

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Referandearn extends My_Controller
{
    // Handler Himanshu Goyal
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('pages/Db_fillter');
    }

    function index()
    {

        
        $this->load->view('frontend/common/header', $this->data);
        $this->load->view('frontend/referandearn', $this->data);
        $this->load->view('frontend/common/footer', $this->data);
    }
}
?>