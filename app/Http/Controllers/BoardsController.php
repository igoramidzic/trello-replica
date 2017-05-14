<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use Auth;
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
      //
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
