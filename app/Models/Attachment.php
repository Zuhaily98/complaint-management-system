<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    // an attachment belongs to only one complaint
    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }
}
