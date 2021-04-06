<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usersIndex()
    {
        return view('admin.accounts.index');
    }

    public function profile()
    {
        return view('admin.accounts.profile');
    }

    public function password()
    {
        return view('admin.accounts.password');
    }

    public function createAdmin()
    {
        return view('admin.accounts.create_admin');
    }

    public function createOfficer()
    {
        return view('admin.accounts.create_officer');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function complaintsIndex()
    {
        return view('admin.complaints.index');
    }
}
