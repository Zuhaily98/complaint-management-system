<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\Guest;
use App\Models\State;
use App\Models\City;
use App\Models\District;
use App\Models\Panel;
use App\Models\Category;
use App\Models\Attachment;

class ComplaintController extends Controller
{

    public function index()
    {
        return view('guest.index');
    }

    public function show(Complaint $complaint)
    {
        return view('guest.show')->with('complaint', $complaint)->with('attachments', Attachment::all());
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

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'panel' => 'required',
            'category_id' => 'required',
            'detail' => 'required'
        ]);

        $guest = Guest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        
        $filename = $guest->name.'-'.date("d-m-Y").'.'.$request->attachment->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($request->attachment));
            //$guest->complaints->attachments->update(['attachment' => $filename]);
        
        $guest->complaints()->create([
            'category_id' => $request->category_id,
            'panel_id' => $request->panel,
            'detail' => $request->detail,
        ])

        ->attachments()->create([
            'attachment' => $filename
        ]);
        
        //flash message
        // session()->flash('success', 'Complaint created successfully!');

        //redirect
        return view('guest.message');
    }
}
