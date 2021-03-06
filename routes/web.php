<?php

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


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

use App\Models\Category;
use App\Models\Topic;

$router->get('/', function () use ($router) {
  $categories = Category::all();

  return $router->app->make('view')->make('index', ['categories' => $categories]);

});

$router->get('category/{id}', [ 'as' => 'category', 'uses' => 'CategoryController@show', function() {}]);
