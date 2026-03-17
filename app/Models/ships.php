<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ships extends Model
{
    protected $table = 'ships';

    protected $fillable = [
        'name',
        'type',
        'capacity',
        'crew_members',
        'ameneties',
        'facilities',
        'image_url'
    ];


    public function cabins()
    {
        return $this->hasMany(cabins::class, 'ship_id');
    }

    public function cruises()
    {
        return $this->hasMany(cruises::class, 'ship_id');
    }
}
