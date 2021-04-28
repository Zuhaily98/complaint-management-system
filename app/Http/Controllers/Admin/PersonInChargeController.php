<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonInChargeController extends Controller
{
    public function index()
    {
        return view('admin.panels.person_in_charges_index');
    }

    public function create()
    {
        return view('admin.panels.create_person_in_charge');
    }
}
