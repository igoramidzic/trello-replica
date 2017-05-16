<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
  use Notifiable;

  protected $fillable = [
      'title', 'user_id'
  ];

  public function tasks ()
  {
    return $this->hasMany(Task::class);
  }
}
