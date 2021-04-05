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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/complaints', 'ComplaintController');
Route::get('/contact', 'ComplaintController@contact')->name('complaints.contact');


//admin
Route::get('/admin/account-profile', 'AdminController@profile')->name('admin.profile');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');


