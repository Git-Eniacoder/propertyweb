<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['admin'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Home module 
$route['home'] = 'home';        // Working
// $route['home/view'] = 'home/callview';


//listing module 
$route['list'] = 'admin/list_mod/listing';      // Working
// $route['list/view'] = 'admin/list_mod/listing/callview';



//Post table module 
$route['posttable'] = 'admin/postreq_mod/Posttable';        // Working
// $route['posttable/view'] = 'admin/postreq_mod/Post_list/callview';



//Recharge module 
$route['recharge'] = 'admin/recharge_mod/Recharge';     // Working
// $route['recharge/view'] = 'admin/recharge_mod/recharge/callview';








//Post Request module 
$route['post'] = 'admin/postreq_mod/Post_req/index';
$route['post/view'] = 'admin/postreq_mod/Post_req/callview';
$route['get'] = 'admin/postreq_mod/Post_req/get_data';
$route['test'] = 'admin/postreq_mod/Post_req/demo';



// $route['post/get'] = 'postreq_mod/Post_req/get';

//Recharge module 
$route['wallet'] = 'admin/wallet/Recharge/index';
$route['wallet/view'] = 'admin/wallet/Recharge/callview';






//Recharge module 
$route['recharge'] = 'admin/recharge_mod/Recharge';
$route['recharge/view'] = 'admin/recharge_mod/Recharge/callview';




//payment module 
$route['payment'] = 'admin/payment_mod/Payment';
$route['payment/view'] = 'admin/payment_mod/Payment/callview';


// ****************  Dynamic Pages ************* 


// require( BASEPATH .'database\DB.php');
// $db =& DB();
// $result = $db->get('pages')->result_array();

// foreach( $result as $list ){
//    $route[$list['page_url']] = 'admin/legal/create_page/fetch_page/'.$list['page_id'];
// }


// ****************  Dynamic Pages ************* 
