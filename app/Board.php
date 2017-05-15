<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
  use Notifiable;

  protected $fillable = [
      'title'
  ];

  // public function tasks ()
  // {
  //   return $this->hasMany(Task::class);
  // }
}
