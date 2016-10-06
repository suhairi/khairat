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

use Carbon\Carbon;

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

        // Route::post('/daftar', [
        //     'as'    => 'admin.ahli.daftar',
        //     'uses'  => 'Admin\Ahli\DaftarController@postDaftar'
        // ]);


        // ######################################
        //           API - admin/ahli
        // ######################################

            Route::get('/API/members', function() {
                $members =  App\Members::where('nama', 'like', 'abd a%')->get();
                // var_dump(json_encode($members));

                return $members;
            });

            Route::get('/API/members/{id}', function($id) {
                return App\Members::where('id', $id)->first();
            });

            Route::patch('/API/members/{id}', function($id) {
                $member = App\Members::where('id', $id)->first();

                $member->nama = Request::get('nama');
                $member->nokp = Request::get('nokp');
                $member->no_ahli = Request::get('no_ahli');
                $member->dob = Request::get('dob');
                $member->no_tel = Request::get('no_tel');
                $member->pekerjaan = Request::get('pekerjaan');
                $member->alamat = Request::get('alamat');

                $member->save();

                return Response::json(Request::all());
            });


        // ######################################
        //          END API - admin/ahli
        // ######################################


    });

    // ################## TERIMAAN ###################

    Route::group(['prefix' => 'terimaan'], function() {

        Route::get('/index', [
            'as'    => 'admin.terimaan.index',
            'uses'  => 'Admin\TerimaanController@index'
        ]); 


    });

    // ############## END OF TERIMAAN ###############



    Route::group(['prefix' => 'carian'], function() {

        Route::get('/nama', [
            'as'    => 'admin.carian.nama',
            'uses'  => 'Admin\Carian\CarianController@nama'
        ]);

    });




    
});