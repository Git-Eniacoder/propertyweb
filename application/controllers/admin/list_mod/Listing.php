

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends My_Controller {
 // Handler Himanshu Goyal
 public function __construct()
 {
  parent::__construct();
  $this->load->model('pages/Db_fillter');
 }

 function index()
 {
  $data['brand_data'] = $this->Db_fillter->fetch_filter_type('product_brand');
  $data['ram_data'] = $this->Db_fillter->fetch_filter_type('product_ram');
  $data['product_storage'] = $this->Db_fillter->fetch_filter_type('product_storage');
  $data['url'] = $this->config->item('urls');
  $this->load->view('frontend/listing', $data);
 }

 function fetch_data()
 {
  sleep(1);
  $minimum_price = $this->input->post('minimum_price');
  $maximum_price = $this->input->post('maximum_price');
  $brand = $this->input->post('brand');
  $ram = $this->input->post('ram');
  $storage = $this->input->post('storage');
  $this->load->library('pagination');
  $config = array();
  $config['base_url'] = '#';
  $config['total_rows'] = $this->Db_fillter->count_all($minimum_price, $maximum_price, $brand, $ram, $storage);
  $config['per_page'] = 8;
  $config['uri_segment'] = 3;
  $config['use_page_numbers'] = TRUE;
  $config['full_tag_open'] = '<ul class="pagination">';
  $config['full_tag_close'] = '</ul>';
  $config['first_tag_open'] = '<li>';
  $config['first_tag_close'] = '</li>';
  $config['last_tag_open'] = '<li>';
  $config['last_tag_close'] = '</li>';
  $config['next_link'] = '&gt;';
  $config['next_tag_open'] = '<li>';
  $config['next_tag_close'] = '</li>';
  $config['prev_link'] = '&lt;';
  $config['prev_tag_open'] = '<li>';
  $config['prev_tag_close'] = '</li>';
  $config['cur_tag_open'] = "<li class='active'><a href='#'>";
  $config['cur_tag_close'] = '</a></li>';
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $config['num_links'] = 3;
  $this->pagination->initialize($config);
  $page = $this->uri->segment(3);
  $start = ($page - 1) * $config['per_page'];
  $output = array(
   'pagination_link'  => $this->pagination->create_links(),
   'product_list'   => $this->Db_fillter->fetch_data($config["per_page"], $start, $minimum_price, $maximum_price, $brand, $ram, $storage)
  );
  echo json_encode($output);
 }
  
}
?>