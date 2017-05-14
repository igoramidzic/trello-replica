@extends ('layouts.layout')

@section ('main-content')

  <div class="main-content">
    <div class="wrapper">
      @include ('partials.navbars.main-navbar')

      <div class="items-content">
        @include ('partials.users.user-item')
      </div>

    </div>
  </div>

@endsection
