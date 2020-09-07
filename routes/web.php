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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'Home'
]);

Route::group([
    'prefix' => 'news',
], function () {
    Route::get('/', 'NewsController@index')->name('News');
    Route::get('/categories/{cat}/{id}', 'NewsController@show')->name('NewsOne');
    Route::get('/categories', 'CategoriesController@index')->name('Categories');
    Route::get('/categories/{cat}', 'CategoriesController@show')->name('Category');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'Admin.'
], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/control', 'IndexController@control')->name('control');
    Route::match(['get', 'post'], '/create', 'IndexController@create')->name('create');
}
);

Route::view('/vue', 'vue')->name('vue');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
