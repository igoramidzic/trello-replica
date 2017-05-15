<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;

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

  public function show(Board $board)
  {
      //
  }

  public function edit(Board $board)
  {
      //
  }

  public function update(Request $request, Board $board)
  {
      //
  }

  public function destroy(Board $board)
  {
      //
  }
}
