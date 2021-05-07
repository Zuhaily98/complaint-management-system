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
Route::post('/complaints', 'Guest\ComplaintController@store')->name('guest.complaints.store');
Route::get('/complaints/{complaint}', 'Guest\ComplaintController@show')->name('guest.complaints.show');
Route::get('/contact', function () {
    return view('guest.contact');
});


Route::middleware(['auth', 'can:admin-views'])->group(function(){
    // Admin
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    // Admin - complaint
    Route::get('/admin/complaints', 'Admin\ComplaintController@index')->name('admin.complaints');
    Route::get('/admin/complaints/{complaint}', 'Admin\ComplaintController@show')->name('admin.complaints.show');
    Route::get('/admin/complaints/{complaint}/edit', 'Admin\ComplaintController@edit')->name('admin.complaints.edit');
    Route::post('/admin/complaints/{complaint}/update', 'Admin\ComplaintController@update')->name('admin.complaints.update');

    // Admin - account
    Route::get('/admin/users', 'Admin\UserController@index')->name('admin.users.index');
    Route::get('/admin/users/create', 'Admin\UserController@create')->name('admin.users.create');
    Route::post('/admin/users/store', 'Admin\UserController@store')->name('admin.users.store');

    
    
    Route::get('/admin/users/profile', 'Admin\UserController@profile')->name('admin.users.profile');
    Route::post('/admin/users/profile/{user}/update', 'Admin\UserController@profileUpdate')->name('admin.users.profile.update');
    Route::post('/admin/users/profile/upload', 'Admin\UserController@upload')->name('admin.users.profile.upload');
    Route::get('/admin/users/password', 'Admin\UserController@password')->name('admin.users.password');

    Route::get('/admin/users/{user}', 'Admin\UserController@show')->name('admin.users.show');
    

    // Admin - panel
    Route::get('/admin/panels/', 'Admin\PanelController@index')->name('admin.panels.index');
    Route::get('/admin/panels/create', 'Admin\PanelController@create')->name('admin.panels.create');
    Route::post('/admin/panels/create', 'Admin\PanelController@store')->name('admin.panels.store');

    // Admin - Person In Charge
    Route::get('/admin/person-in-charges/', 'Admin\PersonInChargeController@index')->name('admin.person_in_charges.index');
    Route::get('/admin/person-in-charges/create', 'Admin\PersonInChargeController@create')->name('admin.person_in_charges.create');
    Route::post('/admin/person-in-charges/create', 'Admin\PersonInChargeController@store')->name('admin.person_in_charges.store');

    // Admin - place : state
    Route::get('/admin/states', 'Admin\StateController@index')->name('admin.states.index');
    Route::get('/admin/states/create', 'Admin\StateController@create')->name('admin.states.create');
    Route::post('/admin/states/create', 'Admin\StateController@store')->name('admin.states.store');

    // Admin - place : city
    Route::get('/admin/cities', 'Admin\CityController@index')->name('admin.cities.index');
    Route::get('/admin/cities/create', 'Admin\CityController@create')->name('admin.cities.create');
    Route::post('/admin/cities/create', 'Admin\CityController@store')->name('admin.cities.store');

    // Admin - place : district
    Route::get('/admin/districts', 'Admin\DistrictController@index')->name('admin.districts.index');
    Route::get('/admin/districts/create', 'Admin\DistrictController@create')->name('admin.districts.create');
    Route::post('/admin/districts/create', 'Admin\DistrictController@store')->name('admin.districts.store');
});


Route::middleware(['auth', 'can:officer-views'])->group(function(){
    // Officer
    Route::get('/officer/dashboard', 'Officer\DashboardController@index')->name('officer.dashboard');

    // Officer - complaint
    Route::get('/officer/complaints', 'Officer\ComplaintController@index')->name('officer.complaints.index'); 
    Route::get('/officer/complaints/pick', 'Officer\ComplaintController@pick')->name('officer.complaints.pick');
    Route::post('/officer/complaints/{complaint}/select', 'Officer\ComplaintController@select')->name('officer.complaints.select');
    Route::get('/officer/complaints/{complaint}', 'Officer\ComplaintController@show')->name('officer.complaints.show');
    Route::get('/officer/complaints/{complaint}/edit', 'Officer\ComplaintController@edit')->name('officer.complaints.edit');
    Route::post('/officer/complaints/{complaint}/update', 'Officer\ComplaintController@update')->name('officer.complaints.update');

    // Officer - account
    Route::get('/officer/account/profile', 'Officer\UserController@profile')->name('officer.users.profile');
    Route::get('/officer/account/password', 'Officer\UserController@password')->name('officer.users.password');

    // Officer - comment
    Route::post('/officer/comments/store', 'Officer\CommentController@store')->name('comment.add');
    Route::post('/officer/comments/reply/store', 'Officer\CommentController@replyStore')->name('reply.add');
});








