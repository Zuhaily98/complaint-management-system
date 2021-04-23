<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // 1 comment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1 comment can have many replies on top of the current comment
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->latest();
    }

    // a comment belongs to a complaint
    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }
}
