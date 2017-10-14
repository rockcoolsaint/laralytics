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

Route::get('/dashboard', function () {
    //return view('admin');
});

Route::get('/admin', 'AdminController@index');

Route::get('/today', 'AdminController@today');

Route::group(['middleware' => 'auth'], function () {
	// All routes you need authenticated

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
	
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index');