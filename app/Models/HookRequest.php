<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class HookRequest extends Model
{
    protected $fillable = [
        'location', 'message', 'hookee','service_id','interested_in','request_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
