<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ports extends Model
{
    protected $table = 'ports';

    protected $fillable = [
        'name',
        'city',
        'country',
        'description',
        'image_url'
    ];

    public function destinations()
    {
        return $this->hasMany(destinations::class, 'port_id');
    }

    public function cruises()
    {
        return $this->belongsTo(cruises::class, 'departure_port_id');
    }

}
