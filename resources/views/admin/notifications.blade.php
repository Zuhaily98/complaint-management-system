@extends('admin.main')

@section('title')
    Notification List :: Comsys
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">List of Notification</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($notifications as $notification)
                    <li class="list-group-item">
                        @if ($notification->type == "App\Notifications\NewRemarkAdded")
                            A new remark was added to complaint 
                            {{-- {{ $notification->data['data']['detail'] }} --}}
                            <a href="" class="btn btn-sm btn-info float-right">View Complaint</a>
                        @endif

                        @if ($notification->type == "App\Notifications\NewComplaintUpdate")
                            A new changes was updated to complaint
                            {{-- {{ $notification->data['complaint']['detail'] }} --}}
                            <a href="" class="btn btn-sm btn-info float-right">View Complaint</a>
                        @endif
                    </li>
                @endforeach 
            </ul>
        </div>
    </div>
@endsection
