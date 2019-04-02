<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
   
    protected $fillable = [
        'name', 'email', 'phone_number','address', 'password', 'role', 'remember_token',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bills(){
        return $this->hasMany('App\Bill', 'customer_id', 'id');
    }

    public function comments(){
        return $this->hasMany('App\Comment', 'user_id', 'id');
    }
    
    public function contacts(){
        return $this->hasMany('App\Contact', 'user_id', 'id');
    }
}
