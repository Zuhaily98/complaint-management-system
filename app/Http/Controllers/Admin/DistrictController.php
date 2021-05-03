<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function index()
    {
        return view('admin.districts.index')->with('districts', District::all());
    }

    public function create()
    {
        return view('admin.districts.create');
    }

    public function store()
    {
        
    }
}
