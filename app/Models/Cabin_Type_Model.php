<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cabinType extends Model
{
    protected $table = 'cabin_types';

    protected $fillable = [
        'name',
        'description',
        'price_modifier',
        'max_occupancy',
        'image_url'
    ];

    public function cabins()
    {
        return $this->hasMany(cabins::class, 'cabin_type_id');
    }

    public function ameneties()
    {
        return $this->hasMany(ameneties::class, 'cabin_type_id');
    }
}
