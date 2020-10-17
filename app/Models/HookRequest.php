<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class HookRequest extends Model
{
    protected $fillable = [
        'location', 'message', 'hookee','service_id','interested_in','request_id','hookee','paid','matched','published'
    ];

    public function user(){
        return $this->belongsTo(User::class,'hookee','id');
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function hookMessage(){
        return $this->hasOne(HookMessage::class);
    }
}
