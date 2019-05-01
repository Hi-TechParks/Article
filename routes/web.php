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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/table', function () {
    return view('admin.table');
});

Route::get('/form', function () {
    return view('admin.form');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});


// Admin Blog Category Controllers
Route::get('/admin/blog/category', 'BlogCategoryController@index')->name('blog.cate.index');
Route::get('/admin/blog/category/create', 'BlogCategoryController@create')->name('blog.cate.create');
Route::post('/admin/blog/category/store', 'BlogCategoryController@store')->name('blog.cate.store');
Route::get('/admin/blog/category/show/{id}', 'BlogCategoryController@show')->name('blog.cate.show');
Route::get('/admin/blog/category/edit/{id}', 'BlogCategoryController@edit')->name('blog.cate.edit');
Route::post('/admin/blog/category/update/{id}', 'BlogCategoryController@update')->name('blog.cate.update');
Route::get('/admin/blog/category/delete/{id}', 'BlogCategoryController@destroy')->name('blog.cate.delete');


// Admin Blog Controllers
Route::get('/admin/blog', 'BlogController@index')->name('blog.index');
Route::get('/admin/blog/create', 'BlogController@create')->name('blog.create');
Route::post('/admin/blog/store', 'BlogController@store')->name('blog.store');
Route::get('/admin/blog/show/{id}', 'BlogController@show')->name('blog.show');
Route::get('/admin/blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
Route::post('/admin/blog/update/{id}', 'BlogController@update')->name('blog.update');
Route::get('/admin/blog/delete/{id}', 'BlogController@destroy')->name('blog.delete');
