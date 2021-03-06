<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
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

        // $data = request()->only(['name', 'email']);

        $user = $user->update($request->all());

        // $user->name = $data['name'];
        // $user->email = $data['email'];

        // $user->update($data);

        return redirect(route('admin.users.profile'));
    }

    public function upload(Request $request)
    {
        $data = request()->only(['picture']);

        if($request->hasFile('picture'))
        {
            $filename = auth()->user()->name.'-'.date("d-m-Y").'.'.$request->picture->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($request->picture));
            auth()->user()->update(['picture' => $filename]);
        }

        return redirect(route('admin.users.profile'));
    }

    public function password()
    {
        return view('admin.users.password');
    }

    public function passwordUpdate(Request $request, User $user)
    {
        // dd($request->all());
        // $this->validate(request(), [
        //     'new-password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'password-confirmation' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

        // $data = request()->only(['new-password', 'password', 'password_confirmation']);

        // if ($user->password == Hash::make($data['password'])) {
        //     $user->password = Hash::make($data['new-password']);  
        //     $user->update($data);
        //     dd($user);
        //     return redirect(route('admin.users.profile'));
        // }
        
        $request->validate([
            'password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'password_confirmation' => ['same:new_password'],
        ]);

        $data = request()->only(['new-password', 'password', 'password_confirmation']);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        
        return redirect(route('admin.users.profile'));
        
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
            'password' => Hash::make($request->password),
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
