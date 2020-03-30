<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name','address', 'email',
  ];

  public function books()
  {
    return $this->belongsTo(Books::class);
  }
}
