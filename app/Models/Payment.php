<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount', 'user_id', 'payment_type','payment_method'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
