<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\User;
use App\Notifications\NewComplaintUpdate;

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

    public function select(Request $request, Complaint $complaint)
    {
        
        $complaint->update(['user_id' => auth()->user()->id]);
        // dd($complaint);
        return redirect(route('officer.complaints.pick'));
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

        $complaint->guest->notify(new NewComplaintUpdate($complaint));

        return redirect(route('officer.complaints.index'));
    }
}
