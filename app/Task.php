<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  use Notifiable;

  protected $fillable = [
      'user_id', 'board_id', 'title'
  ];
}
