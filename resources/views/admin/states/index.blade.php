@extends('admin.main')

@section('title')
    State List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of States</div>

        <div class="card-body">
            <a href="{{ route('admin.states.create') }}" class="btn btn-primary btn-sm">Add New State</a>
        </div>

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>State Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>State Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($states as $state)
                            <tr>
                                <td>{{ $state->id }}</td>
                                <td>{{ $state->state }}</td>
                                <td><a href="" class="badge badge-info">See More</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
