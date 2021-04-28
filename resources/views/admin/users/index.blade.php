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
                            <th>Phone Number</th>
                            <th>User Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>User Type</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>Nur Iman Hafiz</td>
                            <td>iman98@gmail.com</td>
                            <td>0145365895</td>
                            <td><div class="badge badge-danger badge-pill">Administrator</div></td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Ahmad Affeeff</td>
                            <td>affeff@hotmail.com</td>
                            <td>0175026423</td>
                            <td><div class="badge bg-dark text-light">Officer</div></td>
                            <td><a href="" class="badge badge-info">See More</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
