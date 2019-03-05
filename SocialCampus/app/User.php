<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'password', 'dob', 'occupation', 'gender',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
      return $this->hasMany('App\Post');
    }
    public function likes(){
      return $this->hasMany('App\Like');
    }
    public function comments(){
      return $this->hasMany('App\Comment');
    }

    public function followers(){
      return $this->belongsToMany('App\User', 'follows', 'following', 'follower');
    }

    public function following(){
      return $this->belongsToMany('App\User', 'follows', 'follower', 'following');
    }
}
