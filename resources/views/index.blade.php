@extends ('layouts.layout')

@section ('main-content')

  <div class="main-index">
    <div class="wrapper">
      @include ('partials.main-navbar')
      @include ('partials.todo-content')
    </div>
  </div>

@endsection
