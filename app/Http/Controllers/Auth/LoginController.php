<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        // check if user's role is an admin
        if(Auth::user()->isAdmin())
        {
            $this->redirectTo = route('admin.dashboard');
            return $this->redirectTo;
        }

        // check if user's role is an officer
        elseif(Auth::user()->isOfficer())
        {
            $this->redirectTo = route('officer.dashboard');
            return $this->redirectTo;
        }

        $this->redirectTo = '/';
        return $this->redirectTo;
    }
}
