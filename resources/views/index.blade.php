@extends ('layouts.layout')

@section ('main-content')

  <div class="main-index">
    <div class="wrapper">
      @include ('partials.main-navbar')
      @include ('partials.users-content')
    </div>
  </div>

@endsection
