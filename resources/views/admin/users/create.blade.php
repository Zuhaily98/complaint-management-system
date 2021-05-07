@extends('admin.main')

@section('title')
    Register Staff :: Complaint Management System
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
                                Register New Staff Account
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
                <a class="nav-link active ml-0" href="{{ route('admin.users.create') }}">Create Staff Account</a>
                <a class="nav-link" href="{{ route('admin.users.index') }}">View All Account</a>
            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Form Group (role) -->
                                <div class="form-group">
                                    <label class="small mb-1" for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="">-- Select Role --</option>
                                        <option value="admin">Administrator</option>
                                        <option value="officer">Crew</option>
                                    </select>
                                </div>

                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="name">Name</label>
                                    <input id="name" type="text" placeholder="Enter Name.."
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>

                                <!-- Form Group (email address)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Email Address.." />
                                </div>

                                <!-- Form Group (password)-->
                                <div class="form-group">
                                    <label for="password" class="small mb-1">{{ __('Password') }}</label>


                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}

                                </div>

                                <!-- Form Group (confirm password)-->
                                <div class="form-group">
                                    <label for="password-confirm" class="small mb-1">{{ __('Confirm Password') }}</label>


                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

                                </div>

                                <div class="form-group">
                                    <!-- Profile picture image-->
                                    <a href="{{ env('APP_URL') }}/storage/{{ Auth::user()->picture }}"
                                        target="_blank">Open Picture</a>
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                    <!-- Profile picture upload button-->
                                    <input type="file" name="picture" class="form-control">
                                </div>

                                <!-- Save changes button-->
                                <button class="btn btn-primary float-right" type="submit">Register New Staff</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2"
                                src="{{ asset('admin/assets/img/illustrations/profiles/profile-1.png') }}" alt="" />
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
