<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:

|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
// show
$route['show'] = "Users/show";
$route['profile/(:any)'] = "Users/profile/$1";
$route['sign_on'] = "Users/sign_in";
$route['sign_in'] = "Users/sign_on";



//methods 
$route['default_controller'] = "Users";
$route['register'] = "Users/register";
$route['log_off'] = "Users/log_off";
$route['edit/(:any)'] = "Users/edit/$1";
$route['update_name/(:any)'] = "Users/update_name/$1";
$route['update_password/(:any)'] = "Users/update_password/$1";
$route['update_description/(:any)'] = "Users/update_description/$1";
$route['admin'] = "Users/admin";
$route['new'] = "Users/admin_add";
$route['add_message/(:any)'] = "messages/add_message/$1";
$route['add_comment/(:any)'] = "comments/add_comment/$1";
$route['delete/(:any)'] = "Users/delete/$1";
$route['log_off'] = "Users/log_off";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */