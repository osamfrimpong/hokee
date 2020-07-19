<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'price', 'picture'
    ];

    public function hookRequests(){
        return $this->hasMany(HookRequest::class);
    }
}
