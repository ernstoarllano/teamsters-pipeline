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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/find-work', function() {
    return view('/find-work/overview');
});
Route::get('/find-work/{state}', 'JobController@getJobs');
Route::get('/find-work/{state}/{job}', 'JobController@getJob');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/members', 'AdminController@getMembers');
Route::get('/admin/jobs', 'AdminController@getJobs');
Route::get('/admin/jobs/{job}', 'AdminController@getJob');

Route::get('/logout', 'Auth\LoginController@logout');
