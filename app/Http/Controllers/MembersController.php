<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MembersController extends Controller
{
  // Show all members
  public function index ()
  {
    // Get all users
    $users = DB::select("SELECT * FROM users ORDER BY last_name ASC, first_name ASC");
    $page = 'Members';
    return view('members/login', compact('users', 'page'));
  }

  // Show one members
  public function show ($id)
  {
    $user = DB::select("SELECT * FROM users WHERE id = $id");
    $page = 'Member';
    dd($user);
    // return view('index', compact('users'));
  }

  // Login
  public function login ()
  {
    $page = 'Login';
    return view('members/login', compact('page'));
  }

  // Register
  public function register ()
  {
    $page = 'Signup';
    return view('members/register', compact('page'));
  }
}
