<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    return view('frontend.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth', 'isAdmin']], function (){
    Route::get('/dash', function () {
        return view('admin.dash');
    });

    //group
    Route::get('group','Admin\GroupController@index');
    Route::get('group-add','Admin\GroupController@viewpage');
    Route::post('group-store','Admin\GroupController@store');
    Route::get('group-edit/{id}','Admin\GroupController@edit');
    Route::put('group-update/{id}','Admin\GroupController@update');
    Route::get('group-delete/{id}','Admin\GroupController@delete');

    //category
    Route::get('category','Admin\CategoryController@index');
    Route::get('category-add','Admin\CategoryController@create');
    Route::post('category-store','Admin\CategoryController@store');
    Route::get('category-edit/{id}','Admin\CategoryController@edit');
    Route::put('category-update/{id}','Admin\CategoryController@update');
    Route::get('category-delete/{id}','Admin\CategoryController@delete');

    //subCategory
    Route::get('sub-category','Admin\subcategoryController@index');
    Route::get('subcategory-add','Admin\subcategoryController@create');
    Route::post('sub-category-store','Admin\subcategoryController@store');
    //Route::get('sub-category-edit','Admin\subcategoryController@edit');
    //Route::put('sub-category-update','Admin\subcategoryController@update');
    //Route::post('sub-category-delete','Admin\subcategoryController@delete');




});
