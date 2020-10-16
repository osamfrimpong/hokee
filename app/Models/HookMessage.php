<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class HookMessage extends Model
{
    protected $fillable = [
        'request_id', 'message', 'hookee'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function hookRequest(){
        return $this->belongsTo(HookRequest::class);
    }
}
