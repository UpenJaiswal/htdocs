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
$route['default_controller'] = 'web/Home/index';
$route['admin'] = 'admin/Auth/login';
$route['company'] = 'company/Auth/login';
$route['login'] = 'web/Auth/login';
$route['logout'] = 'web/Auth/logout';
$route['company/logout'] = 'company/Auth/logout';
$route['company/profile'] = 'company/auth/profile';
$route['company/role'] = 'company/Role/index';
$route['company/clients'] = 'company/Clients/index';
$route['company/clients/add'] = 'company/Clients/add_clients';
$route['company/priority'] = 'company/Priority/index';
$route['company/priority/add'] = 'company/Priority/add_priority';
$route['company/priority/edit/(:any)'] = 'company/Priority/edit_priority/$1';

$route['company/task'] = 'company/Task/index';
$route['company/task/add'] = 'company/Task/add_task';
$route['company/task/edit/(:any)'] = 'company/Task/edit_task/$1';


$route['company/status'] = 'company/Status/index';
$route['company/status/add'] = 'company/Status/add_status';
$route['company/status/edit/(:any)'] = 'company/Status/edit_status/$1';

$route['company/project'] = 'company/Project/index';
$route['company/project/add'] = 'company/Project/add_project';
$route['company/project/edit/(:any)'] = 'company/Project/edit_project/$1';

$route['company/role/add'] = 'company/Role/add_role';
$route['company/role/edit/(:any)'] = 'company/role/edit_role/$1';
$route['company/team/create'] = 'company/auth/create_team';
$route['company/team/edit/(:any)'] = 'company/auth/edit_team/$1';
$route['register'] = 'web/Auth/register';
$route['dashboard'] = 'workroom/Workroom/index';
$route['company/dashboard'] = 'company/Auth/index';
$route['company/team'] = 'company/Auth/user_list';
$route['team/(:any)'] = 'workroom/Workroom/team/$1';
$route['workroom/(:any)'] = 'workroom/Workroom/work_room/$1';
$route['workroom-list/(:any)'] = 'workroom/Workroom/work_room_list/$1';
$route['Clients/(:any)'] = 'workroom/Workroom/clients/$1';
//$route['workroom/task/(:any)'] = 'workroom/Workroom/work_room_details/$1';
$route['advance-profile/(:any)'] = 'workroom/Workroom/advance_profile/$1';
$route['besic-profile/(:any)'] = 'workroom/Workroom/besic_profile/$1';
//$route['individual-team/(:any)'] = 'workroom/Workroom/indivisual_team/$1';
$route['time-sheet/(:any)'] = 'workroom/workroom/time_sheet/$1';
$route['work-room/(:any)'] = 'workroom/Workroom/work_room/$1';
$route['company/profile'] = 'company/Auth/profile';
$route['company/profile/edit/(:any)'] = 'company/Auth/UpdateUser/$1';
$route['profile/edit/(:any)'] = 'workroom/Workroom/profile_edit/$1';
$route['profile/gallery/(:any)'] = 'workroom/Workroom/gallery/$1';
$route['profile/gallery/add/(:any)'] = 'workroom/Workroom/add_image/$1';
//$route['admin'] = 'admin/Auth/login';
$route['admin/logout'] = 'admin/Auth/logout';
$route['admin/register'] = 'admin/Auth/register';
$route['admin/change-password'] = 'admin/Auth/change_password';
$route['company/change-password'] ='company/Auth/change_password';
$route['change-password'] = 'web/Auth/change_password';
$route['admin/forgot-password'] = 'admin/Auth/forgot_password';
$route['forgot-password'] = 'web/Auth/forgot_password';
$route['admin/dashboard'] = 'admin/auth';
$route['admin/profile'] = 'admin/auth/profile';
$route['admin/profile/edit/(:any)'] = 'admin/Auth/UpdateUser/$1';

$route['admin/users'] = 'admin/auth/user_list';
$route['admin/users/create'] = 'admin/auth/create_user';
$route['admin/users/edit/(:any)'] = 'admin/auth/edit_user/$1';
$route['admin/users/add'] = 'admin/auth/create_user';
$route['company/expertise'] = 'company/expertise/index'; // folder_name/ controller_name/ function_name
$route['company/expertise/add'] = 'company/expertise/add_expertise'; // folder_name/ controller_name/ function_name
$route['company/expertise/edit/(:any)'] = 'company/expertise/edit_expertise/$1'; // folder_name/ controller_name/ function_name

$route['company/experience'] = 'company/experience/index'; // folder_name/ controller_name/ function_name
$route['company/experience/add'] = 'company/experience/add_experience'; // folder_name/ controller_name/ function_name
$route['company/experience/edit/(:any)'] = 'company/experience/edit_experience/$1'; // folder_name/ controller_name/ function_name

$route['company/skills'] = 'company/skills/index'; // folder_name/ controller_name/ function_name
$route['company/skills/add'] = 'company/skills/add_skills'; // folder_name/ controller_name/ function_name
$route['company/skills/edit/(:any)'] = 'company/skills/edit_skills/$1'; // folder_name/ controller_name/ function_name


$route['company/languages'] = 'company/languages/index'; // folder_name/ controller_name/ function_name
$route['company/languages/add'] = 'company/languages/add_languages'; // folder_name/ controller_name/ function_name
$route['company/languages/edit/(:any)'] = 'company/languages/edit_languages/$1'; // folder_name/ controller_name/ function_name


$route['company/industries'] = 'company/industries/index'; // folder_name/ controller_name/ function_name
$route['company/industries/add'] = 'company/industries/add_industries'; // folder_name/ controller_name/ function_name
$route['company/industries/edit/(:any)'] = 'company/industries/edit_industries/$1'; // folder_name/ 

$route['admin/portfolio'] = 'admin/portfolio/index'; // folder_name/ controller_name/ function_name
$route['admin/portfolio/add'] = 'admin/portfolio/add_portfolio'; // folder_name/ controller_name/ function_name
$route['admin/portfolio/edit/(:any)'] = 'admin/portfolio/edit_portfolio/$1'; // folder_name/ controller_name/ function_name

$route['admin/team'] = 'admin/Team/index'; // folder_name/ controller_name/ function_name
$route['admin/team/add'] = 'admin/Team/add_team'; // folder_name/ controller_name/ function_name
$route['admin/team/edit/(:any)'] = 'admin/Team/edit_team/$1'; // folder_name/ controller_name/ function_name
$route['admin/team/delete/(:any)/(:any)'] = 'admin/Team/delete_team/$1/$2'; // folder_name/ controller_name/ function_name
$route['admin/blog'] = 'admin/Blog/index'; // folder_name/ controller_name/ function_name
$route['admin/blog/add'] = 'admin/Blog/add_blog'; // folder_name/ controller_name/ function_name
$route['admin/blog/edit/(:any)'] = 'admin/Blog/edit_blog/$1'; // folder_name/ controller_name/ function_name
$route['admin/blog/delete/(:any)/(:any)'] = 'admin/Blog/delete_blog/$1/$2'; // folder_name/ controller_name/ function_name

$route['admin/news'] = 'admin/News/index'; // folder_name/ controller_name/ function_name
$route['admin/news/add'] = 'admin/News/add_news'; // folder_name/ controller_name/ function_name
$route['admin/news/edit/(:any)'] = 'admin/News/edit_news/$1'; // folder_name/ controller_name/ function_name
$route['admin/news/delete/(:any)/(:any)'] = 'admin/News/delete_news/$1/$2'; // folder_name/ controller_name/ function_name

$route['admin/category'] = 'admin/Category/index'; // folder_name/ controller_name/ function_name
$route['admin/category/add'] = 'admin/Category/add_category'; // folder_name/ controller_name/ function_name
$route['admin/category/edit/(:any)'] = 'admin/Category/edit_category/$1'; // folder_name/ controller_name/ function_name
$route['admin/category/delete/(:any)'] = 'admin/Category/delete_category/$1'; // folder_name/ controller_name/ function_name

$route['admin/AreasOfExpertise'] = 'admin/AreasOfExpertise/index'; // folder_name/ controller_name/ function_name
$route['admin/AreasOfExpertise/Add'] = 'admin/AreasOfExpertise/AddAreasOfExpertise'; // folder_name/ controller_name/ function_name


$route['about'] = 'web/Home/about'; // folder_name/ controller_name/ function_name
$route['blog'] = 'web/Home/blog'; // folder_name/ controller_name/ function_name
$route['blog/(:any)'] = 'web/Home/blog_details/$1';// folder_name/ controller_name/ function_name
//$routes['products/(.*)/(.*)'] = 'product_class/product_method/$1/$2';
$route['news'] = 'web/Home/news'; // folder_name/ controller_name/ function_name
$route['news/(:any)'] = 'web/Home/news_details/$1';// folder_name/ controller_name/ function_name

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['web-toosumm/(:any)'] = "web/home/Home";
