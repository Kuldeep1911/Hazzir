<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
       'user_id', 'name','phone','address','maid_type','service_date','otp','otp_verified'
    ];

    protected $casts = [
        'otp_verified' => 'boolean',
        'service_date' => 'datetime',
    ];
}
