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

//guest
Route::get('/complaints', 'GuestController@index')->name('guest.index');
Route::get('/complaints/contact', 'GuestController@contact')->name('guest.contact');
Route::get('/complaints/create', 'GuestController@create')->name('guest.create');



//admin
Route::get('/admin/account-profile', 'AdminController@profile')->name('admin.profile');
Route::get('/admin/account-password', 'AdminController@password')->name('admin.profile-password');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/complaints', 'AdminController@complaintsIndex')->name('admin.complaints');


