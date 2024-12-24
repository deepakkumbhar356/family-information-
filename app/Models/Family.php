<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'birthdate',
        'mobile_no',
        'address',
        'state_id', // Add this if you're linking to the State model
        'city',
        'pincode',
        'marital_status',
        'wedding_date',
    ];

    // Define the relationship
    public function state()
    {
        return $this->belongsTo(State::class);
    }

        public function city()
    {
        return $this->belongsTo(City::class);
    }

}
