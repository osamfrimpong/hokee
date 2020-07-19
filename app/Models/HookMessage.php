<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HookMessage extends Model
{
    protected $fillable = [
        'location', 'message', 'hookee'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
