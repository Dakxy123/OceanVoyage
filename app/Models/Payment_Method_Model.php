<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paymentMethod extends Model
{
    protected $table = 'payment_methods';

    protected $fillable = [
        'name',
        'code',
        'description',
        'is_active'
    ];

    public function payments()
    {
        return $this->hasMany(payments::class, 'payment_method_id');
    }
}
