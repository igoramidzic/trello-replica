<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
    $boards = User::find(Auth::User()->id)->boards;
    return view('boards', compact('page', 'boards'));
  }
}
