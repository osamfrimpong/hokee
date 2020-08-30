<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'request_id', 'user_id', 'paid','booking_id','matched'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
