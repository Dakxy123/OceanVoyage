<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ships extends Model
{
    protected $table = 'ships';

    protected $fillable = [
        'ship_class_id',
        'name',
        'passenger_capacity',
        'year_built',
        'status',
        'image_url'
    ];


    public function shipClass()
    {
        return $this->belongsTo(shipClass::class, 'ship_class_id');
    }

    public function cabins()
    {
        return $this->hasMany(cabins::class, 'ship_id');
    }
    public function cruises()
    {
        return $this->hasMany(cruises::class, 'ship_id');
    }
}
