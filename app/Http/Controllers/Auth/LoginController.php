<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/members';

    public function index ()
    {
      $page = 'Login';
      return view('auth/login', compact('page'));
    }

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
