<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'cruise_id',
        'cabin_id',
        'promotion_id',
        'total_price',
        'status',
        'special_requests',
        'booked_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cruise()
    {
        return $this->belongsTo(cruises::class, 'cruise_id');
    }

    public function cabin()
    {
        return $this->belongsTo(cabins::class, 'cabin_id');
    }

    public function promotion()
    {
        return $this->belongsTo(promotions::class, 'promotion_id');
    }

    public function passengers()
    {
        return $this->hasMany(passengers::class, 'booking_id');
    }

    public function payment()
    {
        return $this->hasMany(payments::class, 'booking_id');
    }

    public function bookingLogs()
    {
        return $this->hasMany(bookingLogs::class, 'booking_id');
    }
}
