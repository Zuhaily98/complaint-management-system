<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\User;
use App\Notifications\NewComplaintUpdate;
use App\Models\Attachment;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('admin.complaints.index')
            ->with('complaints', Complaint::all());
    }

    public function show(Complaint $complaint)
    {
        return view('admin.complaints.show')->with('complaint', $complaint)->with('attachments', Attachment::all());
    }

    public function edit(Complaint $complaint)
    {
        return view('admin.complaints.edit')
            ->with('complaint', $complaint)
            ->with('complaints', Complaint::all())
            ->with('users', User::all());
    }

    public function update(Request $request, Complaint $complaint)
    {
        $data = request()->only(['priority', 'status', 'officer']);

        $complaint->priority = $data['priority'];
        $complaint->status = $data['status'];
        $complaint->user_id = $data['officer'];

        $complaint->update($data);

        $complaint->guest->notify(new NewComplaintUpdate($complaint));

        return redirect(route('admin.complaints'));
    }
}
