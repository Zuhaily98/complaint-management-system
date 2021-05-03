<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return view('admin.cities.index')->with('cities', City::all());
    }

    public function create()
    {
        return view('admin.cities.create');
    }

    public function store()
    {
        
    }
}
