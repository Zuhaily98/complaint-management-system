<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        return view('admin.states.index')->with('states', State::all());
    }

    public function create()
    {
        return view('admin.states.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(request(), [
            'state' => 'required|unique:states'
        ]);

        State::create([
            'state' => $request -> state
        ]);

        return redirect(route('admin.states.index'));
    }
}
