<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount', 'user_id', 'payment_type','payment_method','bill_id','status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
