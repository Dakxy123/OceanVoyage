<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cruises extends Model
{
    protected $table = 'cruises';

    protected $fillable = [
        'name',
        'departure_date',
        'return_date',
        'departure_time',
        'return_time',
        'destination_id',
        'ship_id',
        'duration_days',
        'iterenary',
        'description',
        'status',
        'image_url'
    ];

    public function ship()
    {
        return $this->belongsTo(ships::class, 'ship_id');
    }

    public function destination()
    {
        return $this->belongsTo(destinations::class, 'destination_id');
    }

    public function bookings()
    {
        return $this->hasMany(bookings::class, 'cruise_id');
    }
}
