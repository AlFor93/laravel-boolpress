<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'type' ,
    'description'
  ];

  function posts() {
    return $this->belongsToMany(Category::class);
  }
}
