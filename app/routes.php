<?php

$router->get ('', 'PagesController@index');
$router->get ('about', 'PagesController@about');
$router->get ('blog', 'PagesController@blog');
$router->get ('contact', 'PagesController@contact');
$router->get ('galeria/:id', 'GaleriaController@show', 'ROLE_USER');
$router->get ('galeria/modificar/:id', 'GaleriaController@change', 'ROLE_USER');
$router->get ('galeria', 'GaleriaController@index', 'ROLE_USER');
$router->get ('post', 'PagesController@post');
$router->get ('asociados', 'AsociadosController@index');
$router->get ('exposiciones', 'ExposicionesController@index', 'ROLE_USER');
$router->get ('exposiciones/:id', 'ExposicionesController@mostrar', 'ROLE_USER');
$router->get ('exposiciones/crear', 'ExposicionesController@crear', 'ROLE_USER');
$router->get ('exposiciones/anadirImagen/:id', 'ExposicionesController@anadirImagen', 'ROLE_USER');

$router->get ('login', 'AuthController@login');
$router->post('check-login', 'AuthController@checkLogin');
$router->get ('logout', 'AuthController@logout');

$router->post('exposiciones/postImagen', 'ExposicionesController@postImagen', 'ROLE_USER');

$router->post('galeria/nueva', 'GaleriaController@nueva', 'ROLE_USER');
$router->post('galeria/modificar/:id', 'GaleriaController@modificar', 'ROLE_USER');
$router->post('galeria/eliminar/:id', 'GaleriaController@eliminar', 'ROLE_USER');
$router->post('asociados/nuevo', 'AsociadosController@nuevo', 'ROLE_ADMIN');
$router->post('exposiciones/nueva', 'ExposicionesController@nueva', 'ROLE_USER');
$router->post('exposiciones/activar/:id', 'ExposicionesController@activar', 'ROLE_USER');

$router->get ('registro', 'AuthController@registro');
$router->post('check-registro', 'AuthController@checkRegistro');
