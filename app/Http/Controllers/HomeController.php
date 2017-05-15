<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Board;
use App\Task;

class HomeController extends Controller
{
  public function index()
  {
    // If no authenticated user
    if (!Auth::user()) {
      $page = 'Todo List Application';
      return view('index', compact('page'));
    }

    // If user is authenticated
    $page = 'Boards';
    $boards = DB::select('SELECT boards.title,
                          boards.created_at,
                          SUM(CASE WHEN tasks.is_completed = 0 THEN 1 ELSE 0 END) AS incomplete,
                          SUM(CASE WHEN tasks.is_completed = 1 THEN 1 ELSE 0 END) AS completed
                          FROM boards
                          LEFT OUTER JOIN tasks
                          ON boards.id = tasks.board_id
                          GROUP BY boards.id');
    return view('boards', compact('page', 'boards'));
  }
}
