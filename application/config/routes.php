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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['about'] = 'home/about';
$route['our-vision'] = 'home/vision';
$route['career'] = 'home/career';
$route['service'] = 'home/services';
$route['service/(:any)'] = 'home/service/$1';
$route['courses'] = 'home/products';
$route['course/(:any)'] = 'home/products/$1';
$route['blogs'] = 'home/blogs';
$route['blog/(:any)'] = 'home/blog/$1';
$route['gallery'] = 'home/gallery';
$route['contact'] = 'home/contact';
$route['save'] = 'home/save';
$route['enquiry'] = 'home/enquiry';
$route['testimonals'] = 'home/testimonals';
$route['admin'] = 'admin/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['admin/deactivate/category/(:any)'] = 'admin/deactivate/category/$1';
$route['admin/activate/category/(:any)'] = 'admin/activate/category/$1';
$route['admin/delete/category/(:any)'] = 'admin/delete/category/$1';

$route['admin/deactivate/project/(:any)'] = 'admin/deactivate/project/$1';
$route['admin/activate/project/(:any)'] = 'admin/activate/project/$1';
$route['admin/delete/project/(:any)'] = 'admin/delete/project/$1';


$route['admin/editproject/removeimg/(:any)'] = 'admin/removeimg/$1';
$route['admin/editdirector/removedirector/(:any)'] = 'admin/removedirector/$1';
$route['admin/editproject/removepdf/(:any)'] = 'admin/removepdf/$1';

$route['admin/editcategory/removeimg/(:any)'] = 'admin/removecatimg/$1';
$route['admin/deactivate/slider/(:any)'] = 'admin/deactivate/slider/$1';
$route['admin/activate/slider/(:any)'] = 'admin/activate/slider/$1';
$route['admin/delete/slider/(:any)'] = 'admin/delete/slider/$1';
$route['admin/editslider/removeslider/(:any)'] = 'admin/removeslider/$1';   
$route['admin/editgallery/removeslider/(:any)'] = 'admin/removeslider/$1';   

$route['admin/addimages/removeimage/(:any)/(:any)'] = 'admin/removeimage/$1/$2';
$route['admin/removeabout'] = 'admin/removeabout';

$route['admin/change-password'] = 'admin/change_password';

$route['admin/editblog/removeimg/(:any)'] = 'admin/removeblog/$1';
$route['admin/editblog/removeimage/(:any)'] = 'admin/removeblogger/$1';


$route['admin/editreviews/removeimg/(:any)'] = 'admin/removereviews/$1';
