<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'name',
        'address',
        'postcode',
        'district_id'
    ];

    // 1 panel has many complaints
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    // 1 panel has many PICs
    public function personInCharges()
    {
        return $this->hasMany(PersonInCharge::class);
    }

    // a panel belongs to a district
    public function district()
    {
        return $this->belongsTo(District::class);
    }

}
