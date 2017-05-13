<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class ProfileController extends Controller
{
  public function index ($username)
  {
    $user = User::whereUsername($username)->first();
    $page = $username;
    return view('profile', compact('page', 'user'));
  }
}
