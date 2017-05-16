<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
  public function up()
  {
      Schema::create('tasks', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->required();
          $table->integer('board_id')->required();
          $table->text('title')->required();
          $table->boolean('is_completed')->default(false);
          $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('tasks');
  }
}
