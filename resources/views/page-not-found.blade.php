@extends ('layouts.layout')

@section ('main-content')


  <div class="main-content">
    <div class="wrapper">

      @include ('partials.main-navbar')

      <div class="page-not-found" style="text-align: center; color: rgb(145, 145, 145);">
        <h1>Page not found</h1>
        <h5>/{{ $page }} cannot be found!</h5>
      </div>

    </div>
  </div>

@endsection
