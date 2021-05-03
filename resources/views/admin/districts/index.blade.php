@extends('admin.main')

@section('title')
    District List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of District</div>

        <div class="card-body">
            <a href="{{ route('admin.districts.create') }}" class="btn btn-primary btn-sm">Add New District</a>
        </div>

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>District Name</th>
                            <th>City Name</th>
                            <th>State Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>District Name</th>
                            <th>City Name</th>
                            <th>State Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($districts as $district)
                            <tr>
                                <td>{{ $district->id }}</td>
                                <td>{{ $district->district }}</td>
                                <td>{{ $district->city->city }}</td>
                                <td>{{ $district->city->state->state }}</td>
                                <td><a href="" class="badge badge-info">See More</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
