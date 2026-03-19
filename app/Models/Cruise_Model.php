<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cruises extends Model
{
    protected $table = 'cruises';

    protected $fillable = [
        'ship_id',
        'departure_port_id',
        'name',
        'description',
        'trip_type',
        'departure_date',
        'return_date',
        'duration_nights',
        'base_price',
        'status',
        'image_url'
    ];

    public function ship()
    {
        return $this->belongsTo(ships::class, 'ship_id');
    }

    public function port()
    {
        return $this->belongsTo(ports::class, 'port_id');
    }

    public function destination()
    {
        return $this->HasMany(destinations::class, 'cruise_id');
    }

    public function bookings()
    {
        return $this->hasMany(bookings::class, 'cruise_id');
    }

    public function reviews()
    {
        return $this->hasMany(reviews::class, 'cruise_id');
    }
    
}
