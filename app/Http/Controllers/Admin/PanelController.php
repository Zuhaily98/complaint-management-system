<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panel;
use App\Models\District;

class PanelController extends Controller
{
    public function index()
    {
        return view('admin.panels.index')->with('panels', Panel::all());
    }

    public function create()
    {
        return view('admin.panels.create')
            ->with('districts', District::all());
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'type' => 'required',
            'name' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'district_id' => 'required'
        ]);

        Panel::create($request->all());

        return redirect(route('admin.panels.index'));

    }
}
