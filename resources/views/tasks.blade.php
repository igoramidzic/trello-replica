@extends ('layouts.layout')

@section ('main-content')

  <div class="main-content">
    <div class="wrapper">
      @include ('partials.navbars.main-navbar')
      <div class="items-content">
        <div class="row">
          <!-- Task item -->
          @include ('partials.tasks.task-item')
          <!-- Create new task item -->
          @include ('partials.tasks.create-new-task-item')
        </div>
      </div>
    </div>
  </div>

@endsection
