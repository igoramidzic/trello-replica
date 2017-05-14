@extends ('layouts.layout')

@section ('main-content')

  <div class="main-content">
    <div class="wrapper">

      @include ('partials.navbars.main-navbar')

      @include ('partials.auth.register-form')

    </div>
  </div>

@endsection
