<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('officer.complaints.index');
    }

    public function pick()
    {
        return view('officer.complaints.pick');
    }
}
