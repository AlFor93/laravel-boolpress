<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'title' ,
    'content' ,
    'publication_date' ,
    'author_id'
  ];

  function author() {
    return $this->belongsTo(Author::class);
  }
  function categories() {
    return $this->belongsToMany(Category::class);
  }

}
