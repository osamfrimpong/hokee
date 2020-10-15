<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class MatchedHook extends Model
{
    protected $fillable = [
        'hooker', 'hookee','match_id','request_id','booking_id'
    ];

    public function owner(){
        return $this->belongsTo(User::class,'hooker','id');
    }

    public function booker(){
        return $this->belongsTo(User::class,'hookee','id');
    }
}
