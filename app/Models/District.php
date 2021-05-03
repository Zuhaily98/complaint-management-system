<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['district', 'city_id'];

    // a district belongs to a city
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // a district has many panels
    public function panels()
    {
        return $this->hasMany(Panel::class);
    }
}
