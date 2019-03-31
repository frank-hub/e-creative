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



Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', function () {
        return view('admin/dashboard');
    });

    Route::group(['prefix' => 'post'], function () {
        Route::get('add_post','ArticleController@index')->name('add');
        Route::get('all_post','ArticleController@create')->name('current');
    });
    
    Route::group(['prefix' => 'cartegory'], function () {
        Route::get('add_cartegory','CartegoryController@create')->name('add_cart');
        Route::get('current_cartegory','CartegoryController@index')->name('current_cart');
    }); 

});

Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('/cartegory/{id}','WelcomeController@cartegory')->name('cartegory');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cartegory', 'CartegoryController');
Route::resource('article', 'ArticleController');
