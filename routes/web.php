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

Route::namespace('User')->group(function(){
//    Route::get('user/{name?}', function ($name = 'JellyBool') {
//        // return 'Hello '.$name;
//        // die(var_dump(1200.85 * 100 === 120085));
//        // var_dump(1200.85 * 100);
//        // die(var_dump(120085));
//        // die(var_dump(120085 - 1200.85 * 100));
//        // die(var_dump(round(1200.85 * 100) == 120085));
//        // foreach ($definition['keys']  ?? [] as $id => $val) {
//        //    // ...
//       //  }
//    });
    Route::get('user',['uses'=>'UserController@index']);
    Route::get('test/{body?}',['uses'=>'UserController@translate']);
});
