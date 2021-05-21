<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function notifications()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return view('admin.notifications')->with('notifications', Notification::all());
    }
}
