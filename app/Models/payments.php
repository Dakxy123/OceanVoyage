<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'name',
        'booking_id',
        'amount',
        'payment_method',
        'payment_status',
        'payment_date',
        'transaction_id',
        'status'
    ];

    public function booking()
    {
        return $this->belongsTo(bookings::class, 'booking_id');
    }
}
