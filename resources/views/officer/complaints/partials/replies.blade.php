@foreach($comments as $comment)
    <div class="display-comment">
        <strong>{{ $comment->user->name }}</strong> on {{ $comment->created_at->diffForHumans() }}({{ $comment->created_at->format('l d M Y ') }})
        <p>{{ $comment->comment }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment" class="form-control" />
                <input type="hidden" name="complaint_id" value="{{ $complaint_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
            </div>
        </form>
        @include('officer.complaints.partials.replies', ['comments' => $comment->replies])
    </div>
@endforeach 