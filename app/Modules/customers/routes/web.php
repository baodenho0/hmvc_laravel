<?php

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

// dd('routes');

// Route::get('/home', '\Customers\Http\Controllers\BackEnd\CustomerController@index');

Route::group(['namespace' => 'Customers\Http\Controllers'], function() {

	Route::group(['namespace' => 'BackEnd'], function() {
	    require 'backend.php';


	});

	Route::group(['namespace' => 'FrontEnd'], function() {
	    //
	});
	
    
});
