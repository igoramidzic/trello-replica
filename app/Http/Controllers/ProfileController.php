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
    // If no user by that username, throw 404 page
    if (!$user) {
      $page = "Error";
      return view('page-not-found', compact('page'));
    }

    $page = 'Profile';
    return view('profile', compact('page', 'user'));
  }
}
