<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MembersController extends Controller
{
  // Restrict access
  public function __construct()
  {
      $this->middleware('auth');
  }

  // Show all members
  public function index ()
  {
    // Get all users
    $users = DB::select("SELECT * FROM users ORDER BY last_name ASC, first_name ASC, username ASC");
    $page = 'Members';
    return view('members/index', compact('users', 'page'));
  }

  // Show one members
  public function show ($id)
  {
    $user = DB::select("SELECT * FROM users WHERE id = $id");
    $page = 'Member';
    dd($user);
    // return view('index', compact('users'));
  }
}
