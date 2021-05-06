@extends('admin.main')

@section('title')
    Show Profile :: Complaint Management System
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
                                Show Profile : {{ $user->name }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <a href="{{ env('APP_URL') }}/storage/{{ $user->picture }}" target="_blank">Open Picture</a>
                               
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                           
                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Name</label>
                                    <input class="form-control" name="name" id="inputUsername" type="text" placeholder=""
                                        value="{{ $user->name }}" disabled/>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" name="email" id="inputEmailAddress" type="email"
                                        placeholder="Enter your email address" value="{{ $user->email }}" disabled/>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
