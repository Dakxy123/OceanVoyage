<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shipClass extends Model
{
    protected $table = 'ship_classes';

    protected $fillable = [
        'name',
        'tier',
        'description'
    ];


    public function ships()
    {
        return $this->hasMany(ships::class, 'ship_class_id');
    }
}
