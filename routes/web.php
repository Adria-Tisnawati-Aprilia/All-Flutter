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
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('arena', ['uses' => 'ArenaController@showAllArena']);

    $router->get('arena/{id}', ['uses' => 'ArenaController@showOneArenas']);

    $router->post('arena', ['uses' => 'ArenaController@create']);

    $router->delete('arena/{id}', ['uses' => 'ArenaController@delete']);

    $router->put('arena/{id}', ['uses' => 'ArenaController@update']);
/*});

$router->group(['prefix' => 'api'], function () use ($router) {*/

    $router->get('lapangan', ['uses' => 'LapanganController@showAllLapangan']);

    $router->get('lapangan/{id}', ['uses' => 'LapanganController@showOneLapangan']);

    $router->post('lapangan', ['uses' => 'LapanganController@create']);

    $router->delete('lapangan/{id}', ['uses' => 'LapanganController@delete']);

    $router->put('lapangan/{id}', ['uses' => 'LapanganController@update']);
/*});

$router->group(['prefix' => 'api'], function () use ($router) {*/

    $router->get('event', ['uses' => 'EventController@showAllEvent']);

    $router->get('event/{id}', ['uses' => 'EventController@showOneEvent']);

    $router->post('event', ['uses' => 'EventController@create']);

    $router->delete('event/{id}', ['uses' => 'EventController@delete']);

    $router->put('event/{id}', ['uses' => 'EventController@update']);
});
