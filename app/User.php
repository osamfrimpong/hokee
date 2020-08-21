<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','age','interested_in','occupation','phone','sex','profile_picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hookRequests(){
        return $this->hasMany(HookRequest::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function ratings(){
        return $this->hasMany(UserRating::class);
    }

    public function hookedMatches(){
        return $this->hasMany(MatchedHook::class,'hookee','id');
    }

    public function hookerMatches(){
        return $this->hasMany(MatchedHook::class,'hooker','id');
    }

    public function hookMessages(){
        return $this->hasMany(HookMessage::class);
    }

    public function emails(){
        return $this->hasMany(Email::class);
    }
}
