@extends ('layouts.layout')

@section ('main-content')


  <div class="main-content">
    <div class="wrapper">

      @include ('partials.navbars.main-navbar')
      
      <div class="items-content">
        <!-- If the URL username is same as logged in user -->
        @if (Auth::user() AND Auth::user()->username == $user->username)
          Welcome to your profile, {{ Auth::user()->first_name }}
        <!-- Else, user is visiting someone else's profile -->
        @else
          <!-- If statement checks if user's first name ends in 's' -->
          This is {{ $user->first_name }}'@if ($user->first_name[strlen($user->first_name) - 1] != 's')s @endif profile
        @endif
      </div>

    </div>
  </div>

@endsection
