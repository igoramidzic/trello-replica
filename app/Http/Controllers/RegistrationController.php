<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{

  public function __construct ()
  {
    $this->middleware('guest');
  }

  public function index ()
  {
    $page = 'Signup';
    return view('auth/signup', compact('page'));
  }

  public function store (Request $request)
  {
    // Check input validation
    $validator = Validator::make($request->all(), [
      'first_name' => 'required',
      'last_name' => 'required',
      'username' => 'required|min:4|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:4'
    ]);

    // If validation fails, return to signup route with errors and input
    if ($validator->fails()) {
      return redirect('/signup')
                     ->withErrors($validator)
                     ->withInput();
    }

    // Create and save the User
    $user = User::create([
      'first_name' => ucfirst(request('first_name')),
      'last_name' => ucfirst(request('last_name')),
      'username' => request('username'),
      'email' => request('email'),
      'password' => bcrypt(request('password')),
      'color' => rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0,255)
    ]);
    // Sign them in
    auth()->login($user);
    // Redirect to home controller (Boards page)
    return redirect()->home();
  }

  // Delete user
  public function destroy ()
  {

  }
}
