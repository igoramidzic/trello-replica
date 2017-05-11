@extends ('layouts.layout')

@section ('main-content')

<div class="main-content">
  <div class="wrapper">
    @include ('partials.main-navbar')

    @include ('partials.login-form')
  </div>
</div>

@endsection
