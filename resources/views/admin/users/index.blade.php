@extends('admin.main')

@section('title')
    User List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Users</div>
        <!-- Account page navigation-->
        
        
            <nav class="nav nav-borders">
                <a class="nav-link" href="{{ route('admin.users.create') }}">Create Staff Account</a>
                <a class="nav-link active ml-0" href="{{ route('admin.users.index') }}">View All Account</a>
            </nav>
            <hr class="mt-0 mb-4" />

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->role == 'admin')
                                        <a class="badge badge-danger">Admin</a>
                                    @elseif ($user->role == 'officer')
                                        <a class="badge badge-secondary">Crew</a>
                                    @endif

                                    
                                </td>
                                <td><a href="{{ route('admin.users.show', $user) }}" class="badge badge-primary">See More</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
