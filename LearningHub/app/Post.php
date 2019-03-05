<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function likes(){
      return $this->hasMany('App\Like');
    }
}
