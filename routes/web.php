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

Route::get('/', ['as' => '/', 'uses' => function () {
    return view('pages.homepage');
}]);


Route::get('/canibis-101', ['as' => 'canibis-101', 'uses' => function(){
    return view('pages.canibis-101');
}]);

Route::post('/contact', ['as' => 'contact', 'uses' => 'EmailsController@send']);