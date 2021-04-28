<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonInChargeController extends Controller
{
    public function index()
    {
        return view('admin.person_in_charges.index');
    }

    public function create()
    {
        return view('admin.person_in_charges.create');
    }
}
