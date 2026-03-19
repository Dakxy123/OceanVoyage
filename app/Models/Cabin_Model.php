<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cabins extends Model
{
   protected $table = 'cabins';

    protected $fillable = [
        'ship_id',
        'cabin_type_id',
        'cbin_number',
        'deck',
        'is_available'
    ];

    public function bookings()
    {
        return $this->hasMany(bookings::class, 'cabin_id');
    }

    public function ship()
    {
        return $this->belongsTo(ships::class, 'ship_id');
    }

    public function cabinType()
    {
        return $this->belongsTo(cabinType::class, 'cabin_type_id');
    }

    
}
