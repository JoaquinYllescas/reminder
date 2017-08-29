<?php
// header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Origin", "*");
// header("Access-Control-Allow-Headers", "Cache-Control, Pragma, Origin, Authorization, Content-Type, X-Requested-With");
// header("Access-Control-Allow-Methods", "GET, PUT, POST");
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
$app->get('/', function () use ($app) {
    // return $app->version();
    return 'Kino';
});

$app->get('/cumples/', function () use ($app) {
    return $app->version();
     // return response($algo);
});





// //CREATE ACCOUNT
// $app->post('/create/{name}', function ($name) use ($app) {
//     // return $app->version();
//     return "Yllescas";
// });