@foreach ($comments as $comment)
    <div class="display-comment my-2">
        <strong>{{ $comment->user->name }}</strong> on {{ $comment->created_at->diffForHumans() }}
        <!-- ({{ $comment->created_at->format('l d M Y ') }}) -->
        <p>{{ $comment->comment }}</p>
        <a href="" id="reply"></a>
        
        @if (auth()->user()->isOfficer())
            <form method="post" action="{{ route('reply.add') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="comment" class="form-control input-sm" placeholder="Reply.."
                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" value="Reply">Reply</button>
                    </div>

                </div>
                <input type="hidden" name="complaint_id" value="{{ $complaint_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </form>
        @endif

        @include('officer.complaints.partials.replies', ['comments' => $comment->replies])
    </div>
@endforeach
