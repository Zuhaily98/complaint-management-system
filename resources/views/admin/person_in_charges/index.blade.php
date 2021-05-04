@extends('admin.main')

@section('title')
    Person In Charges List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Person In Charges (PIC)</div>

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Panel Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Panel Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($pics as $pic)
                            <tr>
                                <td>{{ $pic->id }}</td>
                                <td>{{ $pic->name }}</td>
                                <td>{{ $pic->email }}</td>
                                <td>{{ $pic->phone }}</td>
                                <td>{{ $pic->panel->name }}</td>
                                <td><a href="" class="badge badge-primary">See More</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
