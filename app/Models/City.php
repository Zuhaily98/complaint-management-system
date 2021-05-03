<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['city', 'state_id'];

    // a city belongs to a state
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    // a city contains many districts
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
