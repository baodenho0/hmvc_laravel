<?php 

Route::group(['prefix' => 'admin', 'middleware' => 'customer'], function() {
	Route::get('home', 'CustomerController@index')->name('routeBackend');
    
});