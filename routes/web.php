<?php

// Rutas Cliente
// 1.- Register
$router->post('/register',['uses'=>'UserController@register']);

// 2.- Login
$router->post('/login',['uses'=>'UserController@login']);

// 3.- Obtener los datos del cliente
$router->get('/get_client',['uses'=>'UserController@get_client']);

// 4.- Editar los datos del cliente
$router->post('/edit_client',['uses'=>'UserController@edit_client']);

// Rutas: Servicios
// 1.- Obtener la lista de servicios
$router->get('/get_services',['uses'=>'ServiciosController@get_services']);

// Rutas: Pedidos
// 1.- Crear un nuevo pedido
$router->post('/create_pedido',['uses'=>'PedidosController@create']);

// Rutas: Galeria
$router->get('/get_galery',['uses'=>'GaleriaController@get_galery']);


































// Rutas protegidas ****************************************************************************************************
// $router->group(['middleware' => ['auth']], function () use ($router){
//     // Get users
//     //$router->get('/users',['uses'=>'UserController@index']);

//     // Post create users
//     $router->post('/users',['uses'=>'UserController@createUser']);
// });
// *********************************************************************************************************************

// Rutas publicas ******************************************************************************************************

// Login
// $router->post('/users/login',['uses'=>'UserController@getToken']);

// Version
// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// Generate key app laravel
// $router->get('/key', function(){
//     return str_random(32);
// });

// *********************************************************************************************************************

// $router->get('/clientes',['uses'=>'UserController@get_client']);