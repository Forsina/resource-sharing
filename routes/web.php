<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('resources_ids/{id}', function($id) {return ResourcesId::find($id);});

//Route::get('articles/{id}', 'ArticleController@show');
Route::get('resources_ids/{resource}', 'ResourcesIdController@show');


Route::get('resources/{tags}', 'Controllers\ResourcesController@index')->where(['tags' => '^[ ,]*(?:[a-zA-Z]+(?:[ ,]+[a-zA-Z0-9]+){0,})?[ ,]*$']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
