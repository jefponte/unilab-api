<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
    return redirect('/docs/index.html');
});

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {
    $router->get('user', 'UserController@index');
    $router->get('bond', 'UserController@bond');
});

$router->post('/api/authenticate', 'TokenController@generateToken');

$router->post('/api/authenticate_md5', 'TokenController@generateTokenMd5');
