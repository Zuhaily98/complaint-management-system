<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detail',
        'status',
    ];

    // each and every complaint belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // each and every complaint belongs to a panel
    public function panel()
    {
        return $this->belongsTo(Panel::class);
    }

    // each and every complaint is belongs to a guest
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    // each and every complaint has 1 category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
