<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'name',
        'booking_id',
        'payment_method_id',
        'amount',
        'currency',
        'transation_ref',
        'paid_at'
    ];

    public function booking()
    {
        return $this->belongsTo(bookings::class, 'booking_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(paymentMethod::class, 'payment_method_id');
    }
}
