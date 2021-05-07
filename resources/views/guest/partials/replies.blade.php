@foreach ($comments as $comment)
    <div class="display-comment my-2">
        <img class="mr-3 rounded-circle" width="40px" height="40px" alt="Bootstrap Media Preview" src="{{ env('APP_URL') }}/storage/{{ $comment->user->picture }}" />
        <strong>{{ $comment->user->name }}</strong> on {{ $comment->created_at->diffForHumans() }}
        <!-- ({{ $comment->created_at->format('l d M Y ') }}) -->
        <p>{{ $comment->comment }}</p>
        <a href="" id="reply"></a>

        @include('guest.partials.replies', ['comments' => $comment->replies])
    </div>
@endforeach
