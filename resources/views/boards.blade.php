@extends ('layouts.layout')

@section ('main-content')

  <div class="main-content">
    <div class="wrapper">
      @include ('partials.navbars.main-navbar')
      <div class="items-content">
        <div class="row">
          <!-- Board item -->
          @include ('partials.boards.board-item')
          <!-- Create new board item -->
          @include ('partials.boards.create-new-board-item')
        </div>
      </div>
    </div>
  </div>

@endsection
