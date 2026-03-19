<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookingLog extends Model
{
    protected $table = 'booking_logs';

    protected $fillable = [
        'booking_id',
        'user_id',
        'action',
        'remarks'
    ];

    public function booking()
    {
        return $this->belongsTo(bookings::class, 'booking_id');
    }

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id');
    }
}
