@extends('officer.main')

@section('title')
    Edit Assigned Complaint :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Edit Assigned Complaint {{ $complaint->id }} Details</div>
        <div class="card-body">
           <form action="{{ route('officer.complaints.update', $complaint) }}" method="post">
                @csrf

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
                    <label for="priority">Priority :</label>
                    <td><div class="badge badge-primary badge-pill">{{ $complaint->priority }}</div></td>
                </div>
                <div class="form-group">
                    <label for="status">Status :</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Pending">Pending</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>
    
                <div class="form-group">
                    
                    <button type="submit" class="btn btn-secondary float-right">Update Changes</button>
                    <a href="" class="btn btn-primary float-right mx-2">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection