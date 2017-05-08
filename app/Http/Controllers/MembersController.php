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

  // GET Login
  public function login ()
  {
    $page = 'Login';
    return view('members/login', compact('page'));
  }

  // POST Login
  public function store ()
  {
    $first_name = request('first_name');
    $last_name = request('last_name');
    $username = request('username');
    $password = request('password');
    $color = rand(50, 200) . ", " . rand(50, 200) . ", " . rand(50, 200);

    DB::insert("INSERT INTO users VALUES (NULL, '$first_name', '$last_name', '$username', '$password', '$color', NULL, NOW(), NOW())");

    return redirect('/members');
  }

  // GET Register
  public function register ()
  {
    $page = 'Signup';
    return view('members/register', compact('page'));
  }
}
