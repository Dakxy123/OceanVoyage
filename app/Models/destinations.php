<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class destinations extends Model
{
    protected $table = 'destinations';

    protected $fillable = [
        'name',
        'description',
        'location',
        'country',
        'image_url'
    ];

    public function cruises()
    {
        return $this->hasMany(cruises::class, 'destination_id');
    }
}
