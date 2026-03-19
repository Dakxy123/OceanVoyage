<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class amenities extends Model
{
    protected $table = 'amenities';

    protected $fillable = [
        'name',
        'icon',
        'description'
    ];

    public function amenityType()
    {
        return $this->hasOne(amenityType::class, 'amenity_id');
    }
}
