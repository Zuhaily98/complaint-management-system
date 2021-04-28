<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function profile()
    {
        return view('admin.users.profile');
    }

    public function password()
    {
        return view('admin.users.password');
    }

    public function create()
    {
        return view('admin.users.create');
    }
}
