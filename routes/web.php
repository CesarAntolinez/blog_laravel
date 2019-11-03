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

/*
 * Get, Post, Put, Delete
 *//*
Route::get('/', function () {
    return view('admin.template.body');
});

Route::get('article', function (){
    return "Esta es la seccion de articulos";
});*/
/*
 * Parametros
 */
/*Route::get('articles/{nombre?}', function ($nombre = "Sin nombre"){
    return "Este es el nombre " . $nombre;
});*/
/*
 * Nombres a las rutas
 */
/*Route::get('articles', [
    'as' => 'articles', // nombre
    'uses' => 'UserController@index' // Controlador
]);*/

/*
 * Gurpos de rutas
 *//*
Route::group([ 'prefix' => 'articles'], function (){
    Route::get('view2/{article?}', function ($article = "vacio"){
        return "Este es el articulo : " . $article;
    });
    //Controlador
    Route::get('view/{id}', [
        'uses' => 'TestController@view'
    ]);
});*/
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
