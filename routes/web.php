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
Route::get('/complaints', 'Guest\ComplaintController@index')->name('guest.index');
Route::get('/complaints/create', 'Guest\ComplaintController@create')->name('guest.create');
Route::get('/contact', 'GuestController@contact')->name('guest.contact');


Route::middleware(['auth', 'can:admin-views'])->group(function(){
    // Admin
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/admin/complaints', 'Admin\ComplaintController@index')->name('admin.complaints');

    // Admin - account
    Route::get('/admin/accounts', 'Admin\UserController@index')->name('admin.users');
    Route::get('/admin/account/profile', 'Admin\UserController@profile')->name('admin.profile');
    Route::get('/admin/account/password', 'Admin\UserController@password')->name('admin.profile-password');
    Route::get('/admin/account/create-admin', 'Admin\UserController@create')->name('admin.create-admin');
    Route::get('/admin/account/create-officer', 'Admin\UserController@createOfficer')->name('admin.create-officer');

    // Admin - panel
    Route::get('/admin/panel/', 'Admin\PanelController@index')->name('admin.panels');
    Route::get('/admin/panel/create-panel', 'Admin\PanelController@create')->name('admin.create-panel');
    Route::get('/admin/panel/person-in-charges', 'Admin\PersonInChargeController@index')->name('admin.person-in-charges');
    Route::get('/admin/panel/create-person-in-charge', 'Admin\PersonInChargeController@create')->name('admin.create-person-in-charge');

    // Admin - place
    Route::get('/admin/place/create-state', 'Admin\StateController@create')->name('admin.create-state');
    Route::get('/admin/place/create-city', 'Admin\CityController@create')->name('admin.create-city');
    Route::get('/admin/place/create-district', 'Admin\DistrictController@create')->name('admin.create-district');
});


Route::middleware(['auth', 'can:officer-views'])->group(function(){
    // Officer
    Route::get('/officer/dashboard', 'Officer\DashboardController@index')->name('officer.dashboard');
    Route::get('/officer/complaints', 'Officer\ComplaintController@index')->name('officer.complaints'); 
    Route::get('/officer/complaints/pick', 'Officer\ComplaintController@pick')->name('officer.complaints.pick');

    // Officer - account
    Route::get('/officer/account/profile', 'Officer\UserController@profile')->name('officer.profile');
    Route::get('/officer/account/password', 'Officer\UserController@password')->name('officer.profile-password');
});








