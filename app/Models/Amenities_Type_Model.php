<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class amenitiesType extends Model
{
    protected $table = 'amenity_types';

    protected $fillable = [
        'cabin_type_id',
        'amenity_id'
    ];

    public function amenity()
    {
        return $this->belongsTo(amenities::class, 'amenity_id');
    }
}
