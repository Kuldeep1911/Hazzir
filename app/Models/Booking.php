<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
       'user_id', 'name','phone','address','maid_type','service_date','otp','otp_verified','team_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $casts = [
        'otp_verified' => 'boolean',
        'service_date' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'maid_type');
        // if table name is `user_services`, replace Service::class with UserService::class
    }

    // ✅ NEW: Relation to allotted maid
    public function maid()
    {
        return $this->belongsTo(User::class, 'team_id');
    }
}
