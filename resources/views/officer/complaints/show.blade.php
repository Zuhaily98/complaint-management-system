@extends('officer.main')

@section('title')
    Assigned Complaint :: Complaint Management System
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
        @error('comment')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="card-header">Assigned Complaint {{ $complaint->id }} Details</div>
        <div class="card-body">
            <div class="form-group">
                <label for="panel">Panel Name :</label>
                <input type="text" name="panel" id="panel" class="form-control" value="{{ $complaint->panel->name }}"
                    disabled>
            </div>
            <div class="form-group">
                <label for="panel">Complaint Category :</label>
                <input type="text" name="category" id="category" class="form-control"
                    value="{{ $complaint->category->title }}" disabled>
            </div>
            <div class="form-group">
                <label for="detail">Complaint Details :</label>
                <textarea name="detail" id="detail" cols="5" rows="5" class="form-control"
                    disabled>{{ $complaint->detail }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Priority :</label>
                <td>
                    <div class="badge badge-primary badge-pill">{{ $complaint->priority }}</div>
                </td>
            </div>
            <div class="form-group">
                <label for="status">Status :</label>
                <td>
                    <div class="badge badge-warning badge-pill">{{ $complaint->status }}</div>
                </td>
            </div>

            <div class="card card-default">
                <div class="card-header">Display Remarks</div>
                <div class="card-body">
                    @if ($complaint->comments->count() > 0)
                    @include('officer.complaints.partials.replies', ['comments' => $complaint->comments, 'complaint_id' => $complaint->id])
                    
                
            @endif
                </div>
            </div>

            <div class="card card-default my-3">
                <div class="card-header">Leave a Remark</div>
                <div class="card-body">
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment" class="form-control" placeholder="example: Clinic closed today"/>
                            <input type="hidden" name="complaint_id" value="{{ $complaint->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-danger"
                                value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="form-group">
                <a href="{{ route('officer.complaints.edit', $complaint->id) }}" type="submit"
                    class="btn btn-secondary">Edit</a>
                <a href="" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
