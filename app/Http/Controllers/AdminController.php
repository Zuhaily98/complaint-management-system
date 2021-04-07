<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Account 

    public function usersIndex()
    {
        return view('admin.accounts.index');
    }

    public function profile()
    {
        return view('admin.accounts.profile');
    }

    public function password()
    {
        return view('admin.accounts.password');
    }

    public function createAdmin()
    {
        return view('admin.accounts.create_admin');
    }

    public function createOfficer()
    {
        return view('admin.accounts.create_officer');
    }


    // Panel

    public function panelsIndex()
    {
        return view('admin.panels.index');
    }

    public function createPanel()
    {
        return view('admin.panels.create');
    }
    
    public function personInChargesIndex()
    {
        return view('admin.panels.person_in_charges_index');
    }

    public function createPersonInCharge()
    {
        return view('admin.panels.create_person_in_charge');
    }


    
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function complaintsIndex()
    {
        return view('admin.complaints.index');
    }
}
