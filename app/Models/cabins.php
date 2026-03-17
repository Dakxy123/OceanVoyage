<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cabins extends Model
{
   protected $table = 'cabins';

    protected $fillable = [
        'cabin_id',
        'cabin_type',
        'cabin_categories',
        'floors',
        'prices',
        'max_occupancy',
        'discription',
        'image_url'
    ];
}
