<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'user_id',
        'cruise_id',
        'rating',
        'title',
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id');
    }

    public function cruise()
    {
        return $this->belongsTo(cruises::class, 'cruise_id');
    }
}
