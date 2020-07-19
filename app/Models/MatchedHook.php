<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchedHook extends Model
{
    protected $fillable = [
        'hookeer', 'hookee'
    ];

    public function hooker(){
        return $this->belongsTo(User::class,'id','hooker');
    }

    public function hookee(){
        return $this->belongsTo(User::class,'id','hookee');
    }
}
