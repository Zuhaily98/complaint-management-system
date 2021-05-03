@extends('admin.main')

@section('title')
    Panel List :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Panels</div>

        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Panel ID</th>
                            <th>Type</th>
                            <th>Panel Name</th>
                            <th>District</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Full Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Panel ID</th>
                            <th>Type</th>
                            <th>Panel Name</th>
                            <th>District</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Full Address</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($panels as $panel)
                            <tr>
                                <td>{{ $panel->id }}</td>
                                <td>{{ $panel->type }}</td>
                                <td>{{ $panel->name }}</td>
                                <td>{{$panel->district->district}}</td>
                                <td>{{$panel->district->city->city}}</td>
                                <td>{{$panel->district->city->state->state}}</td>
                                <td>{{ $panel->address }}, {{$panel->district->district}}, {{$panel->postcode}} {{$panel->district->city->city}}, {{$panel->district->city->state->state}}</td>
                                <td><a href="" class="badge badge-info">See More</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
