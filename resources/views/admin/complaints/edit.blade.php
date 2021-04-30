@extends('admin.main')

@section('title')
    Edit Complaint :: Complaint Management System
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Edit Complaint {{ $complaint->id }} Details</div>
        <div class="card-body">
           <form action="{{ route('admin.complaints.update', $complaint) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="panel">Panel Name :</label>
                    <input type="text" name="panel" id="panel" class="form-control" value="{{ $complaint->panel->name }}" >
                </div>
                <div class="form-group">
                    <label for="panel">Complaint Category :</label>
                    <input type="text" name="category" id="category" class="form-control" value="{{ $complaint->category->title }}" >
                </div>
                <div class="form-group">
                    <label for="detail">Complaint Details :</label>
                    <textarea name="detail" id="detail" cols="5" rows="5" class="form-control" >{{ $complaint->detail }}</textarea> 
                </div>
                <div class="form-group">
                    <label for="priority">Priority :</label>
                    <select name="priority" id="priority" class="form-control">
                        <option value="High">High</option>
                        <option value="Low">Low</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status :</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Pending">Pending</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="officer">Assigned Officer :</label>
                    <select name="officer" id="officer" class="form-control">
                        @foreach ($users as $user)
                            @if ($user->role == "officer")
                               <option value="{{ $user->id }}">{{ $user->name }}</option> 
                            @endif
                        @endforeach
                    </select>
                </div>
    
                <div class="form-group">
                    
                    <button type="submit" class="btn btn-secondary float-right">Save Changes</button>
                    <a href="" class="btn btn-primary float-right mx-2">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection