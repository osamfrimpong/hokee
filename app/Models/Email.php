<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'user_id', 'message_type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
