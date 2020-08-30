<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class MatchedHook extends Model
{
    protected $fillable = [
        'hooker', 'hookee','match_id','request_id','booking_id'
    ];

    public function hooker(){
        return $this->belongsTo(User::class,'id','hooker');
    }

    public function hookee(){
        return $this->belongsTo(User::class,'id','hookee');
    }
}
