<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  protected $fillable = [
    'name' ,
    'lastname' ,
    'username' ,
    'birthday' ,
    'number_of_posts' ,
    'registration_date'
  ];

  function posts() {
    return $this->hasMany(Post::class);
  }
}
