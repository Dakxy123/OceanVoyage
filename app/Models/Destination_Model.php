<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class destinations extends Model
{
    protected $table = 'destinations';

    protected $fillable = [
        'cruise_id',
        'port_id',
        'arrival_date',
        'departure_date',
        'stop_order',
        'notes'
    ];

    public function cruises()
    {
        return $this->belongsTo(cruises::class, 'cruise_id');
    }

    public function ports()
    {
        return $this->belongsTo(ports::class, 'port_id');
    }
}
