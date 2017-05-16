<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  use Notifiable;

  protected $fillable = [
      'board_id', 'title'
  ];
}
