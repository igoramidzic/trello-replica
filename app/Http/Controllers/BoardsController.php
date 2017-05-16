<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Task;

class BoardsController extends Controller
{
  // Restrict access
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $page = 'Boards';
      $boards = User::find(Auth::User()->id)->boards;
      return view('boards', compact('page', 'boards'));
  }

  public function store(Request $request)
  {
    // Check input validation
    $validator = Validator::make($request->all(), [
      'title' => 'required|min:1',
    ]);

    // If validation fails, return with errors and input
    if ($validator->fails()) {
      return redirect('/')
                     ->withErrors($validator)
                     ->withInput();
    }

    // Create and save the Board
    $user = Board::create([
      'user_id' => Auth::User()->id,
      'title' => request('title')
    ]);
    // Redirect to home controller (Boards page)
    return redirect('/');
  }

  public function update(Request $request, Board $board)
  {
      //
  }

  public function destroy($id)
  {
    Board::find($id)->where("user_id", Auth::User()->id)->where('id', $id)->delete();
    Task::where("board_id", $id)->delete();
    return back();
  }
}
