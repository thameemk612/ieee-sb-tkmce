<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/index';
$route['home'] = 'pages/index';
// $route['home/(.+)'] = 'pages/home/$1';

$route['stories'] = 'pages/stories';
$route['stories/(.+)'] = 'pages/stories/$1';

$route['events'] = 'pages/upcoming_events';
$route['events/(.+)'] = 'pages/upcoming_events/$1';

$route['tags'] = 'pages/tags';
$route['tags/(.+)'] = 'pages/tags/$1';


$route['team'] = 'pages/team';
$route['admin_login'] = 'Login/index';


$route['email'] = 'Email_Controller/index';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
