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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin/admin_news/pers_release/(:num)'] = 'pers_release';
$route['delete/:id']['delete'] = "admin/admin_news/delete/:id";

$route['home'] = 'web/home_controller';
$route['home/([a-z_]+)|home/([a-z_]+)/([a-zA-Z0-9_]+)|home/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/home_controller/$1';

$route['publikasi'] = 'web/publikasi_controller';
$route['publikasi/([a-z_]+)|publikasi/([a-z_]+)/([a-zA-Z0-9_]+)|publikasi/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/publikasi_controller/$1';
$route['peraturan'] = 'web/peraturan_controller';
$route['peraturan/([a-z_]+)|peraturan/([a-z_]+)/([a-zA-Z0-9_]+)|berita/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/peraturan_controller/$1';
$route['berita'] = 'web/berita_controller';
$route['berita/([a-z_]+)|berita/([a-z_]+)/([a-zA-Z0-9_]+)|berita/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/berita_controller/$1';
$route['informasi'] = 'web/informasi_controller';
$route['informasi/([a-z_]+)|informasi/([a-z_]+)/([a-zA-Z0-9_]+)|informasi/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/informasi_controller/$1';
$route['kerjasama'] = 'web/kerjasama_controller';
$route['kerjasama/([a-z_]+)|kerjasama/([a-z_]+)/([a-zA-Z0-9_]+)|kerjasama/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/kerjasama_controller/$1';
$route['kontakkami'] = 'web/kontakkami_controller';
$route['kontakkami/([a-z_]+)|kontakkami/([a-z_]+)/([a-zA-Z0-9_]+)|kontakkami/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/kontakkami_controller/$1';
$route['profil'] = 'web/profil_controller';
$route['profil/([a-z_]+)|profil/([a-z_]+)/([a-zA-Z0-9_]+)|profil/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'web/profil_controller/$1';


//Admin
$route['logout'] = 'admin/admin_controller/logout';
$route['admin'] = 'admin/admin_controller';
$route['admin/([a-z_]+)|admin/([a-z_]+)/([a-zA-Z0-9_]+)|admin/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)|admin/([a-z_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)'] = 'admin/admin_controller/$1';