<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class UserController extends Controller
{
    public function notifications()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return view('admin.notifications')->with('notifications', Notification::all());
    }
}
