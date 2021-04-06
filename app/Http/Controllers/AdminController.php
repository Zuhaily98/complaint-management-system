<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile()
    {
        return view('admin.accounts.profile');
    }

    public function password()
    {
        return view('admin.accounts.password');
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
