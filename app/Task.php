<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  use Notifiable;

  protected $fillable = [
      'title', 'board_id'
  ];
}
