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
//Rutas del blog
Route::group([ 'as'=>'blog.'], function (){
    Route::get('/', [
        'uses' => 'BlogController@index',
        'as'   => 'home'
    ]);
    Route::get('categories/{name}', [
        'uses' => 'BlogController@searchCategory',
        'as'   => 'search.categories'
    ]);
    Route::get('tags/{name}', [
        'uses' => 'BlogController@searchTags',
        'as'   => 'search.tags'
    ]);
    Route::get('article/{slug}', [
        'uses' => 'BlogController@article',
        'as'   => 'article'
    ]);
});

// Rutas de administracion
Route::group([ 'as'=>'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function (){
    //Users
    Route::resource('users', 'UsersController')->middleware('admin');;
    Route::get('user/{user}/destroy', [
        'uses'  => 'UsersController@destroy',
        'as'    => 'users.destroy'
    ])->middleware('admin');;

    //categories
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{category}/destroy', [
        'uses'  => 'CategoriesController@destroy',
        'as'    => 'categories.destroy'
    ]);
    //Tags
    Route::resource('tags', 'TagController');
    Route::get('tags/{tag}/destroy', [
        'uses'  => 'TagController@destroy',
        'as'    => 'tags.destroy'
    ]);
    //Articles
    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{article}/destroy', [
        'uses'  => 'ArticlesController@destroy',
        'as'    => 'articles.destroy'
    ]);
    //Images
    Route::get('images', [
        'uses'  => 'ImagesController@index',
        'as'    => 'images.index'
    ]);
    /*Route::resource('images', 'ImagesController');
    Route::get('images/{image}/destroy', [
        'uses'  => 'ImagesController@destroy',
        'as'    => 'images.destroy'
    ]);*/

    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();


