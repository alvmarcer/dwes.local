<?php

$router->get ('', 'PagesController@index');
$router->get ('about', 'PagesController@about');
$router->get ('blog', 'PagesController@blog');
$router->get ('contact', 'PagesController@contact');
$router->get ('galeria/:id', 'GaleriaController@show');
$router->get ('galeria', 'GaleriaController@index');
$router->get ('post', 'PagesController@post');
$router->get ('asociados', 'AsociadosController@index');

$router->get ('login', 'AuthController@login');
$router->post('check-login', 'AuthController@checkLogin');
$router->get ('logout', 'AuthController@logout');

$router->post('galeria/nueva', 'GaleriaController@nueva');
$router->post('asociados/nuevo', 'AsociadosController@nuevo');
