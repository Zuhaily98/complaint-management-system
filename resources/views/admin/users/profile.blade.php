@extends('admin.main')

@section('title')
    Profile :: Complaint Management System
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
                                Account Settings - Profile
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
                <a class="nav-link active ml-0" href="{{ route('admin.users.profile') }}">Profile</a>
                <a class="nav-link" href="{{ route('admin.users.password') }}">Change Password</a>
            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2"
                                src="{{ env('APP_URL') }}/storage/{{ Auth::user()->picture }}" alt="" />
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <form action="{{ route('admin.users.profile.upload') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="picture" class="form-control">
                                </div> 
                                <button class="btn btn-primary btn-sm" type="submit">Update Profile Picture</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.profile.update', Auth::user()->id) }}" method="POST">
                                @csrf
                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Name</label>
                                    <input class="form-control" name="name" id="inputUsername" type="text" placeholder=""
                                        value="{{ Auth::user()->name }}" />
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" name="email" id="inputEmailAddress" type="email"
                                        placeholder="Enter your email address" value="{{ Auth::user()->email }}" />
                                </div>

                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
