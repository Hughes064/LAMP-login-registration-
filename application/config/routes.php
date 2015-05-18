<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['new'] = 'login/new_user';
$route['login'] = 'login/user_login';
//Go to Message Board
$route['messageBoard'] = 'login/messageBoard';

//All users' message board
$route['allUsers'] = 'login/allUsers';

//One users message board

$route['userBoard/(:num)'] = 'login/userBoard/$1';