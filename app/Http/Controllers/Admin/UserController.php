<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());
    }

    public function profile()
    {
        return view('admin.users.profile');
    }

    public function profileUpdate(Request $request, User $user)
    {
        // dd($request->all());
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $data = request()->only(['name', 'email', 'picture']);

        $user->name = $data['name'];
        $user->email = $data['email'];

        $user->update($data);

        return redirect(route('admin.users.profile'));
    }

    public function upload(Request $request, User $user)
    {
        $data = request()->only(['picture']);

        if($request->hasFile('picture'))
        {
            $filename = $user->id.'-'.date("d-m-Y").'.'.$request->picture->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($request->picture));
            $user->update(['attachment' => $filename]);
        }

        return redirect(route('admin.users.profile'));
    }

    public function password()
    {
        return view('admin.users.password');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);

        if($request->hasFile('picture'))
        {
            $filename = $user->name.'-'.date("d-m-Y").'.'.$request->picture->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($request->picture));
            $user->update(['picture' => $filename]);
        }

        return redirect(route('admin.users.index'));
    }

    public function show(User $user)
    {
        return view('admin.users.show')->with('user', $user);
    }
}
