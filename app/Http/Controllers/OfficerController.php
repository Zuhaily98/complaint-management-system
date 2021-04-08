<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function dashboard()
    {
        return view('officer.dashboard');
    }

    public function complaintsIndex()
    {
        return view('officer.complaints.index');
    }

    public function profile()
    {
        return view('officer.accounts.profile');
    }

    public function password()
    {
        return view('officer.accounts.password');
    }
}
