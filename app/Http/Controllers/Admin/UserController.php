<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
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

    public function create()
    {
        return view('admin.accounts.create_admin');
    }

    public function createOfficer()
    {
        return view('admin.accounts.create_officer');
    }
}
