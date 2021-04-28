<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('officer.accounts.profile');
    }

    public function password()
    {
        return view('officer.accounts.password');
    }
}
