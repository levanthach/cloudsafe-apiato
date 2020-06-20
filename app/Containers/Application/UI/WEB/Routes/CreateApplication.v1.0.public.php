<?php

/** @var Route $router */
$router->post('applications', [
    'as' => 'web_application_create_new_application',
    'uses'  => 'Controller@createNewApplication',
    'middleware' => [
      'auth:web',
    ],
]);

$router->get('/login','AdminLoginController@login');
$router->get('/admin/{page}','CreateApplication@admin_page');

