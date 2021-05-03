<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panel;

class PanelController extends Controller
{
    public function index()
    {
        return view('admin.panels.index')->with('panels', Panel::all());
    }

    public function create()
    {
        return view('admin.panels.create');
    }
}
