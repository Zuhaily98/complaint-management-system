@extends('admin.main')

@section('title')
    City List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Cities</div>

        <div class="card-body">
            <a href="{{ route('admin.cities.create') }}" class="btn btn-primary btn-sm">Add New City</a>
        </div>

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>City Name</th>
                            <th>State Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>City Name</th>
                            <th>State Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($cities as $city)
                            <tr>
                                <td>{{ $city->id }}</td>
                                <td>{{ $city->city }}</td>
                                <td>{{ $city->state->state }}</td>
                                <td><a href="" class="badge badge-info">See More</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
