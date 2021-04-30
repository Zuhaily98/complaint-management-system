<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\User;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('officer.complaints.index')->with('complaints', Complaint::all());
    }

    public function pick()
    {
        return view('officer.complaints.pick')->with('complaints', Complaint::whereNull('user_id')->get());
    }

    public function show(Complaint $complaint)
    {
        return view('officer.complaints.show')->with('complaint', $complaint);
    }

    public function edit(Complaint $complaint)
    {
        return view('officer.complaints.edit')
            ->with('complaint', $complaint)
            ->with('complaints', Complaint::all());
    }

    public function update(Request $request, Complaint $complaint)
    {
        $data = request()->only(['status']);
;
        $complaint->status = $data['status'];
   
        $complaint->update($data);

        return redirect(route('officer.complaints.index'));
    }
}
