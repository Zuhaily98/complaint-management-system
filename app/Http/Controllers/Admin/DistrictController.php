<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\City;
use App\Models\State;

class DistrictController extends Controller
{
    public function index()
    {
        return view('admin.districts.index')->with('districts', District::all());
    }

    public function create()
    {
        return view('admin.districts.create')
            ->with('states', State::all())
            ->with('cities', City::all());
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'district' => 'required|unique:districts',
            'city_id' => 'required'
        ]);

        District::create([
            'district' => $request->district,
            'city_id' => $request->city_id
        ]);

        return redirect(route('admin.districts.index'));
    }
}
