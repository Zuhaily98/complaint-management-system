<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;

class CityController extends Controller
{
    public function index()
    {
        return view('admin.cities.index')->with('cities', City::all());
    }

    public function create()
    {
        return view('admin.cities.create')->with('states', State::all());
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(request(), [
            'city' => 'required|unique:cities',
            'state_id' => 'required'
        ]);

        City::create([
            'city' => $request -> city,
            'state_id' => $request -> state_id
        ]);

        return redirect(route('admin.cities.index'));
    }
}
