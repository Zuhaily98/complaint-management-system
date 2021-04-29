<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\State;
use App\Models\City;
use App\Models\District;
use App\Models\Panel;
use App\Models\Category;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }

    public function create()
    {
        return view('guest.create')
            ->with('states', State::all())
            ->with('cities', City::all())
            ->with('districts', District::all())
            ->with('panels', Panel::all())
            ->with('categories', Category::all());
    }

    public function store()
    {

    }
}
