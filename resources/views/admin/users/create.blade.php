@extends('admin.main')

@section('title')
    Create Admin :: Complaint Management System
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
                                Create Staff Account
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
                            <form>
                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Name</label>
                                    <input class="form-control" id="inputUsername" type="text" placeholder="Enter Name"
                                        value="" />
                                </div>
                                <!-- Form Group (role) -->
                                <div class="form-group">
                                    <label class="small mb-1" for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="">-- Select Role --</option>
                                        <option value="">Administrator</option>
                                        <option value="">Crew</option>
                                    </select>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email"
                                        placeholder="Enter email address" value="" />
                                </div>
                                <!-- Form Row-->
                                <div class="form-row">
                                    <!-- Form Group (phone number)-->
                                    <div class="form-group col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                        <input class="form-control" id="inputPhone" type="tel"
                                            placeholder="Enter phone number" value="" />
                                    </div>
                                </div>
                                <!-- Form Group (password)-->
                                <div class="form-group">
                                    <label for="password" class="small mb-1">{{ __('Password') }}</label>


                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <!-- Form Group (confirm password)-->
                                <div class="form-group">
                                    <label for="password-confirm" class="small mb-1">{{ __('Confirm Password') }}</label>


                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="button">Create New Admin</button>
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
