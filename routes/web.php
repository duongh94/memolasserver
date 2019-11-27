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

Route::get('/', 'HomeController@index')->name('homepage');
Route::group([
    'namespace' => 'Frontend'
], function () {
    Route::get('/danh-sach-bai-viet', 'BlogController@index')->name('blog');
    Route::get('/chi-tiet-bai-viet/{id}', 'PostController@index')->name('post');
    Route::get('/chung-toi', 'AboutController@index')->name('about');
    Route::get('/chi-tiet-don-hang', 'TotalController@main')->name('total');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'
], function () {
    Route::get('/', 'DashboardController@main')->name('dashboard');
    Route::group([
        'prefix' => 'posts',
        'namespace' => 'Posts'
    ], function () {
        Route::get('/', 'IndexController@main')->name('posts.index');
        Route::get('/create', 'StoreController@create')->name('posts.create');
        Route::post('/store', 'StoreController@store')->name('posts.store');
        Route::get('/{id}', 'EditController@main')->name('posts.edit');
        Route::post('/{id}', 'UpdateController@main')->name('posts.update');
        Route::delete('/{id}', 'DestroyController@main')->name('posts.destroy');
    });
});

Auth::routes();

//Route::group([
//    'namespace' => 'Auth',
//], function () {
//    Route::get('login', 'LoginController@showLoginForm')->name('login');
//    Route::post('login', 'LoginController@login')->name('login.submit');
//    Route::post('logout', 'LoginController@logout')->name('logout');
//});

//Route::get('/home', 'HomeController@index')->name('home');
