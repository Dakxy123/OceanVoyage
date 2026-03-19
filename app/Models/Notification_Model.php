<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'user_id',
        'title',
        'message',
        'type',
        'is_read'
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id');
    }
}
