<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function dashboard()
    {
        return view('officer.dashboard');
    }
}
