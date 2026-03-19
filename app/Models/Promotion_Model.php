<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promotions extends Model
{
    protected $table = 'promotions';

    protected $fillable = [
        'code',
        'description',
        'discount_type',
        'discount_value',
        'valid_from',
        'valid_until',
        'usage_limit',
        'times_used'
    ];

    public function bookings()
    {
        return $this->HasOne(bookings::class, 'promotion_id');
    }
}
