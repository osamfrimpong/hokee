<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'message', 'user_id','notification_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
