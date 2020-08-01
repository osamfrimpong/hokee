<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserRating extends Model
{
    protected $fillable = [
        'approved', 'user_id', 'message'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
