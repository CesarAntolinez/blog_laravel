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

Route::get('/', function () {
    return view('admin.template.body');
});
// Rutas de administracion
Route::group([ 'as'=>'admin.', 'prefix' => 'admin'], function (){
    //Users
    Route::resource('users', 'UsersController');
    Route::get('user/{user}/destroy', [
        'uses'  => 'UsersController@destroy',
        'as'    => 'users.destroy'
    ]);

    //categories
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{category}/destroy', [
        'uses'  => 'CategoriesController@destroy',
        'as'    => 'categories.destroy'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
