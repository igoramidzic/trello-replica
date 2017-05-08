<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{

  public function __construct ()
  {
    $this->middleware('guest');
  }

  public function create ()
  {
    $page = 'Signup';
    return view('auth/signup', compact('page'));
  }

  public function store ()
  {
    // Validate the form
    $this->validate(request(), [
      'first_name' => 'required',
      'last_name' => 'required',
      'username' => 'required|min:4|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:4'
    ]);
    // Create and save the User
    $user = User::create(request(['first_name', 'last_name', 'username', 'email', 'password']));
    // Sign them in
    auth()->login($user);
    // Redirect to home page
    return redirect()->home();
  }
}
