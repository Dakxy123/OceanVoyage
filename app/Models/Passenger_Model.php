<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger_Model extends Model
{
    protected $table = 'passengers';

    protected $fillable = [
        'booking_id',
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'nationality',
        'passport_number',
        'dietary_requirements',
        'is_primary',
        'is_checked_in',
        'is_smoker'
    ];

    public function booking()
    {
        return $this->belongsTo(bookings::class, 'booking_id');
    }
}
