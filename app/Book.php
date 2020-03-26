<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
    'image', 'title', 'category', 'status', 'author_id', 'publisher_id',
];

/**
* one author can have many books
*/
public function authors()
{
  return $this->hasMany(Author::class);
}

public function publishers()
{
  return $this->hasMany(Publisher::class);
}
}
