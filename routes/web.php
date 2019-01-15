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
	
Route::get('/demo', function () {
   return view('demo');
});
Route::get('resources/{tags?}', 'ResourcesController@index');

Auth::routes();

Route::get('resources/show/{id}', 'ResourcesController@show');

Route::get('/demo/editModal', 'ResourcesController@getModalForm')->name('editModal');

// Route::get("layouts/partials/editModal", function()
// {
//    return View::make("layouts/partials/editModal");
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});