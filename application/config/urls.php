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
$config['post_req'] = base_url().'admin/postreq_mod/Post_req';
$config['inreq'] = base_url().'admin/postreq_mod/Post_req/insert';
$config['getreq'] = base_url().'admin/postreq_mod/Post_req/get';
$config['delreq'] = base_url().'admin/postreq_mod/Post_req/delete/';
$config['updatereq'] = base_url().'admin/postreq_mod/Post_req/update/';
$config['updateinreq'] = base_url().'admin/postreq_mod/Post_req/updateinsert/';

// Posttable Controller
$config['post_list'] = base_url().'admin/postreq_mod/Post_list/index.';

// recharge Controller
$config['recharge'] = base_url().'admin/wallet/Recharge/index.';

// refferal Controller
$config['refferal'] = base_url().'admin/wallet/Refferal/index.';

// field Controller
$config['field'] = base_url().'admin/wallet/Field/index.';

// Plisting Controller
$config['listing'] = base_url().'admin/list_mod/Listing/index.';

// Recharge Controller
$config['recharge'] = base_url().'admin/recharge_mod/Recharge/index.';

// home Controller
$config['home'] = base_url().'Home/index.';

// payment Controller
$config['payment'] = base_url().'admin/payment_mod/Payment/index.';

// Register
$config['register'] = base_url().'register/';