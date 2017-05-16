<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Board;
use Illuminate\Http\Request;
use Auth;
use Validator;

class TasksController extends Controller
{
  // Restrict access
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index($id, $board)
  {
    $page = $board;
    $board_id = $id;
    $tasks = Board::find($id)->tasks;
    return view('tasks', compact('page', 'board_id', 'tasks'));
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
    // Check input validation
    $validator = Validator::make($request->all(), [
      'title' => 'required|min:1',
    ]);

    // If validation fails, return with errors and input
    if ($validator->fails()) {
      return back()
                 ->withErrors($validator)
                 ->withInput();
    }

    // Create and save the Board
    $user = Task::create([
      'user_id' => Auth::User()->id,
      'board_id' => request('board_id'),
      'title' => request('title')
    ]);
    // Redirect to home controller (Boards page)
    return back();
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

  public function destroy($id)
  {

    Task::find($id)->where('user_id', Auth::User()->id)->where('id', $id)->delete();
    return back();
  }
}
