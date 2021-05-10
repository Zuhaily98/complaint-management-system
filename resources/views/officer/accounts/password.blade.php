@extends('officer.main')

@section('title')
    Change Password :: Complaint Management System
@endsection

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Account Settings - Change Password
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link ml-0" href="{{ route('officer.users.profile') }}">Profile</a>
                <a class="nav-link active ml-0" href="{{ route('officer.users.password') }}">Change Password</a>
            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-lg-8">
                    <!-- Change password card-->
                    <div class="card mb-4">
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                            <form action="{{ route('officer.users.password.update', Auth::user()->id) }}" method="POST">
                                @csrf
                                <!-- Form Group (current password)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="currentPassword">Current Password</label>
                                    <input class="form-control" name="password" id="password" type="password"
                                        placeholder="Enter current password" />
                                </div>
                                <!-- Form Group (new password)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="new_password">New Password</label>
                                    <input class="form-control" name="new_password" id="new_password" type="password"
                                        placeholder="Enter new password" />
                                </div>
                                <!-- Form Group (confirm password)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="password_confirmation">Confirm Password</label>
                                    <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" required autocomplete="new-password"
                                        placeholder="Confirm new password" />
                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
