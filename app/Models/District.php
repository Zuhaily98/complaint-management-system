<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    // a district belongs to a city
    public function city()
    {
        return $this->belongTo(City::class);
    }

    // a district has many panels
    public function panels()
    {
        return $this->hasMany(Panel::class);
    }
}
