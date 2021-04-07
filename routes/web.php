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

// Guest
Route::get('/complaints', 'GuestController@index')->name('guest.index');
Route::get('/complaints/contact', 'GuestController@contact')->name('guest.contact');
Route::get('/complaints/create', 'GuestController@create')->name('guest.create');


// Admin
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/complaints', 'AdminController@complaintsIndex')->name('admin.complaints');

// Admin - account
Route::get('/admin/account/index', 'AdminController@usersIndex')->name('admin.users');
Route::get('/admin/account/profile', 'AdminController@profile')->name('admin.profile');
Route::get('/admin/account/password', 'AdminController@password')->name('admin.profile-password');
Route::get('/admin/account/create-admin', 'AdminController@createAdmin')->name('admin.create-admin');
Route::get('/admin/account/create-officer', 'AdminController@createOfficer')->name('admin.create-officer');

// Admin - panel
Route::get('/admin/panel/', 'AdminController@panelsIndex')->name('admin.panels');
Route::get('/admin/panel/create-panel', 'AdminController@createPanel')->name('admin.create-panel');
Route::get('/admin/panel/person-in-charges', 'AdminController@personInChargesIndex')->name('admin.person-in-charges');
Route::get('/admin/panel/create-person-in-charge', 'AdminController@createPersonInCharge')->name('admin.create-person-in-charge');

// Admin - place
Route::get('/admin/place/create-state', 'AdminController@createState')->name('admin.create-state');
Route::get('/admin/place/create-city', 'AdminController@createCity')->name('admin.create-city');
Route::get('/admin/place/create-district', 'AdminController@createDistrict')->name('admin.create-district');


// Guest
Route::get('/officer/dashboard', 'OfficerController@dashboard')->name('officer.dashboard');
Route::get('/officer/complaints', 'OfficerController@complaintsIndex')->name('officer.complaints'); //belum buat

// Guest - account






