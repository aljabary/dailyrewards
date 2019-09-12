<?php

$router->get('/', 'UserController@login_view')->name('login');
$router->get('/docs', 'UserController@docs')->name('docs');
$router->get('/admin', 'AdminController@dashboard')->middleware('admin')->name('admin');
$router->get('/user/login', 'UserController@login_view')->name('login');
$router->get('/user/rewards', 'RewardsController@rewards')->middleware('user')->name('rewards');
$router->get('/logout', 'UserController@logout');

$router->post('/user/auth', 'UserController@auth');


/*** API ***/
$router->post('user/{id}/reward','RewardsController@getreward')->middleware('user');
$router->get('user/{id}/','UserController@getuser');
$router->post('admin/setdate/','AdminController@setdate')->middleware('admin');
