<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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

$route['default_controller'] = "page";
$route['404_override'] = '';

/* Static Pages */
$route['about'] = 'page/about';
$route['history'] = 'page/history';
$route['winner/archives'] = 'page/winner_archives';
$route['paka/winners'] = 'page/winners';
$route['participate'] = 'page/participate';
$route['video-player'] = 'page/video_player';
$route['coming-soon'] = 'page/coming_soon';
$route['then-now'] = 'page/then_now';


/* Members */
$route['admin/login'] = 'member/admin_login';
$route['admin/logout'] = 'member/admin_logout';
$route['register'] = 'member/register';
$route['register/success'] = 'member/register_success';
$route['participate/success'] = 'member/participate_success';
$route['login'] = 'member/login';
$route['logout'] = 'member/logout';
$route['member-save'] = 'member/save';
$route['parent/approval/(:any)/(:any)/(:any)'] = 'member/parent_approval/$1/$2/$3';
$route['participation/save'] = 'member/participation_save';
$route['is_username'] = 'member/is_username';
$route['check_password'] = 'member/check_password';
$route['forgot-password'] = 'member/forgot_password';
$route['admin/participants'] = 'member/admin_participants';
$route['admin/participants/(:any)'] = 'member/admin_participants/$1';
$route['admin/users'] = 'member/admin_users';
$route['admin/users/(:any)'] = 'member/admin_users/$1';

/* Videos */
$route['admin/videos'] = 'video/admin_videos';
$route['admin/videos/approve'] = 'video/admin_approve';
$route['admin/videos/(:any)'] = 'video/admin_videos/$1';
$route['admin/video/add'] = 'video/admin_video_add';
$route['admin/video/edit/(:any)'] = 'video/admin_video_edit/$1';
$route['admin/video/save/(:any)'] = 'video/admin_video_save/$1';

/* Content */
$route['admin/contents'] = 'content/admin_index';
$route['admin/contents/(:any)'] = 'content/admin_index/$1';
$route['admin/content/add'] = 'content/admin_add';
$route['admin/content/edit/(:any)'] = 'content/admin_edit/$1';
$route['admin/content/save/(:any)'] = 'content/admin_save/$1';

/* Games */
$route['games/game/(:any)'] = 'games/game/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */