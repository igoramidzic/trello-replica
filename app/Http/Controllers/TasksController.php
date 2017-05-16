<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function index($id, $board)
  {
    $page = $board;
    return view('tasks', compact('page'));
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
      //
  }

  public function show(Task $task)
  {
      //
  }

  public function edit(Task $task)
  {
      //
  }

  public function update(Request $request, Task $task)
  {
      //
  }

  public function destroy(Task $task)
  {
      //
  }
}
