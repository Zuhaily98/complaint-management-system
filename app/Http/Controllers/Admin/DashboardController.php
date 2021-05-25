<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;

class DashboardController extends Controller
{
    public function index()
    { 
        $pending = Complaint::where(['status' => 'Pending'])->count();
        $closed = Complaint::where(['status' => 'Closed'])->count();
        $low = Complaint::where(['priority' => 'Low'])->count();
        $high = Complaint::where(['priority' => 'High'])->count();

        return view('admin.dashboard')
            ->with('pending', $pending)
            ->with('closed', $closed)
            ->with('low', $low)
            ->with('high', $high);
    }
}
