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

Route::get('/find-work', function() {
    return view('/find-work/overview');
});

Route::get('/find-work/{state}', 'StateController@getJobs');
Route::get('/find-work/{state}/{job}', 'JobController@getJob');
