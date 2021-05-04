@extends('officer.main')

@section('title')
    Assigned Complaints :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Assigned Complaint List</div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Panel Name</th>
                            <th>Complaint Category</th>
                            <th>Complaint Details</th>
                            <th>Complaint Status</th>
                            <th>Complaint Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Panel Name</th>
                            <th>Complaint Category</th>
                            <th>Complaint Details</th>
                            <th>Complaint Status</th>
                            <th>Complaint Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($complaints as $complaint)
                            @if (auth()->user()->id == $complaint->user_id)
                            <tr>
                                <td>{{ $complaint->id }}</td>
                                <td>{{ $complaint->panel->name }}</td>
                                <td>{{ $complaint->category->title }}</td>
                                <td>
                                    @if ($complaint->priority == 'Low')
                                        <div class="badge badge-primary badge-pill">Low</div>
                                    @elseif ($complaint->priority == 'High')
                                        <div class="badge badge-danger badge-pill">High</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($complaint->status == 'Pending')
                                        <div class="badge badge-warning badge-pill">Pending</div>
                                    @elseif ($complaint->status == 'Closed')
                                        <div class="badge badge-danger badge-pill">Closed</div>
                                    @endif
                                </td>
                                <td>{{ $complaint->created_at->diffForHumans() }}</td>
                                <td><a href="{{ route('officer.complaints.show', $complaint->id) }}" class="badge badge-info">See More</a></td>
                            </tr>
                            @endif
                        @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
