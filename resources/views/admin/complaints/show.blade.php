@extends('admin.main')

@section('title')
    Show Complaint :: Complaint Management System
@endsection

@section('js')
    <style>
        .display-comment .display-comment {
            margin-left: 40px
        }

    </style>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Show Complaint {{ $complaint->id }} Details</div>
        <div class="card-body">
            <div class="form-group">
                <label for="panel">Panel Name :</label>
                <input type="text" name="panel" id="panel" class="form-control" value="{{ $complaint->panel->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="panel">Complaint Category :</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ $complaint->category->title }}" disabled>
            </div>
            <div class="form-group">
                <label for="detail">Complaint Details :</label>
                <textarea name="detail" id="detail" cols="5" rows="5" class="form-control" disabled>{{ $complaint->detail }}</textarea> 
            </div>
            <div class="form-group">
                <label for="status">Priority :</label>
                <td><div class="badge badge-primary badge-pill">{{ $complaint->priority }}</div></td>
            </div>
            <div class="form-group">
                <label for="status">Status :</label>
                <td><div class="badge badge-warning badge-pill">{{ $complaint->status }}</div></td>
            </div>
            <div class="form-group">
                <label for="officer">Assigned Officer :</label>
                <input type="text" name="officer" id="officer" class="form-control" value="{{ $complaint->user ? $complaint->user->name : 'Not Assigned'}}" disabled>
            </div>
            <div class="form-group">
                <label for="attachment">Attachment : </label>
                <br>
                @foreach ($attachments as $attachment)
                @if ($attachment->complaint_id == $complaint->id)
                    <img src="{{ env('APP_URL') }}/storage/{{ $attachment->attachment }}" width="300px" height="160px" alt="" />
                @endif
                @endforeach
                
            </div>
            <div class="card card-default my-4">
                <div class="card-header">Display Remarks</div>
                <div class="card-body">
                    @if ($complaint->comments->count() > 0)
                        @include('officer.complaints.partials.replies', ['comments' => $complaint->comments, 'complaint_id'
                        => $complaint->id])
                    @endif
                </div>
            </div>

            <div class="form-group">
                <a href="{{ route('admin.complaints.edit', $complaint) }}" type="submit" class="btn btn-secondary">Edit</a>
                <a href="" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection