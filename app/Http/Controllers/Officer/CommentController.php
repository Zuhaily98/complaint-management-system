<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Complaint;
use App\Notifications\NewRemarkAdded;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'comment' => 'required|min:3',
        ]);

        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user()->associate($request->user());
        $complaint = Complaint::find($request->complaint_id);
        
        // dd($comment);
        // dd($complaint);
        
        $comment->complaint_id = $complaint->id;
        // dd($comment);    
        $complaint->comments()->save($comment);

        $complaint->user->notify(new NewRemarkAdded($complaint));
        
        return back();
    }

    public function replyStore(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required|min:3',
        ]);
        
        $reply = new Comment();
        $reply->comment = $request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $complaint = Complaint::find($request->get('complaint_id'));

        $reply->complaint_id = $complaint->id;
        $complaint->comments()->save($reply);

        $complaint->user->notify(new NewRemarkAdded($complaint));

        return back();
    }
}
