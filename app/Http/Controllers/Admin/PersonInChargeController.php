<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonInCharge;
use App\Models\Panel;

class PersonInChargeController extends Controller
{
    public function index()
    {
        return view('admin.person_in_charges.index')->with('pics', PersonInCharge::all());
    }

    public function create()
    {
        return view('admin.person_in_charges.create')->with('panels', Panel::all());
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|unique:person_in_charges',
            'phone' => 'required|unique:person_in_charges',
            'panel_id' => 'required'
        ]);

        PersonInCharge::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'panel_id' => $request->panel_id
        ]);

        return redirect(route('admin.person_in_charges.index'));
    }
}
