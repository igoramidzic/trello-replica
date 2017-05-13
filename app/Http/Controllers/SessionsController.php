<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

  public function __construct ()
  {
    $this->middleware('guest')->except(['destroy']);
  }

  public function index ()
  {
    $page = 'Login';
    return view('auth/login', compact('page'));
  }

  public function store ()
  {
    // Attempt to authenticate the user
    if (!auth()->attempt(request(['email', 'password']))) {
      return back()->withErrors([
        'message' => 'Email or password incorrect.'
      ])->withInput();
    }

    return redirect()->home();
  }

  public function destroy ()
  {
    auth()->logout();
    return redirect()->home();
  }
}
