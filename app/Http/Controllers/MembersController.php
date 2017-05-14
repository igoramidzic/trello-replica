<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    $users = User::orderBy('last_name', 'asc')->get();
    $page = 'Members';
    return view('members', compact('users', 'page'));
  }

}
