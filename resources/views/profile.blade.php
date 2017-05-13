@extends ('layouts.layout')

@section ('main-content')


  <div class="main-content">
    <div class="wrapper">

      @include ('partials.main-navbar')

      @if (Auth::user() AND Auth::user()->username == $user->username)
        Welcome to your profile, {{ Auth::user()->first_name }}
      @elseif ($user)
        <!-- If statement checks if user's first name ends in 's' -->
        This is {{ $user->first_name }}'@if ($user->first_name[strlen($user->first_name) - 1] != 's')s @endif profile
      @else
        @include ('partials.page-not-found')
      @endif

    </div>
  </div>

@endsection
