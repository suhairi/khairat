<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {

    Route::group(['prefix' => 'ahli'], function() {

        Route::get('/daftar', [
            'as'    => 'admin.ahli.daftar',
            'uses'  => 'Admin\Ahli\DaftarController@daftar'
        ]);

        Route::post('/daftar', [
            'as'    => 'admin.ahli.daftar',
            'uses'  => 'Admin\Ahli\DaftarController@postDaftar'
        ]);


    });




    
});