<?php
header('Access-Control-Allow-Origin: *');
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


//Get USERS
$app->get('/user/{id}', function ($id) use ($app) {
    // return $app->version();
    return $id;
});





//CREATE ACCOUNT
$app->post('/create', function () use ($app) {
    // return $app->version();
    return $id;
});