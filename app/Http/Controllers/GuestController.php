<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }

    public function create()
    {
        return view('guest.create');
    }

    public function contact()
    {
        return view('guest.contact');
    }
}
