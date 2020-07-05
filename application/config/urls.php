<?php

// base_url http://rechargeapp.test/

//  Site Settings 
$config['css'] = base_url().'assets/css/styles.css';
$config['js'] = base_url().'assets/js/';
$config['image'] = base_url().'assets/img/';


// Login Controller
$config['login'] = base_url().'login/';
$config['login_check'] = base_url().'login/login_check/';


// Post Req Controller
// $config['post_req'] = base_url().'admin/postreq_mod/Post_req';
// $config['inreq'] = base_url().'admin/postreq_mod/Post_req/insert';
// $config['delreq'] = base_url().'admin/postreq_mod/Post_req/delete/';
// $config['updatereq'] = base_url().'admin/postreq_mod/Post_req/update';

// Post Req Controller

$config['test'] = base_url().'admin/postreq_mod/Post_req/demo';

$config['post_req'] = base_url().'admin/postreq_mod/Post_req';
$config['inreq'] = base_url().'admin/postreq_mod/Post_req/insert';
$config['getreq'] = base_url().'admin/postreq_mod/Post_req/get';
$config['delreq'] = base_url().'admin/postreq_mod/Post_req/delete/';
$config['updatereq'] = base_url().'admin/postreq_mod/Post_req/update/';
$config['updateinreq'] = base_url().'admin/postreq_mod/Post_req/updateinsert/';



// Plisting Controller
$config['listing'] = base_url().'admin/list_mod/Listing/index.';

// Plisting Controller
$config['home'] = base_url().'Home/index.';

// payment Controller
$config['payment'] = base_url().'admin/payment_mod/Payment/index.';

// Register
$config['register'] = base_url().'register/';